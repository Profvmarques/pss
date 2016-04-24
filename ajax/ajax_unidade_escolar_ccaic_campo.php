<?php

require_once('../classes/segmento_escolar.php');
$se = new SegmentoEscolar();
$idtipoinscricao = $_GET['ti'];

$se->consultar("SELECT * from segmentoescolar where idsegmento_escolar=" . $_POST['idsegmento_escolar']);
$ls = $se->Linha;
$rs = $se->Result;
$idtipo_segmento = mysql_result($rs, 0, 'idtipo_segmento');


if($_POST['idsegmento_escolar']==18){// 3 anos
  $flag="66,164,1,2,67,125,180,137,40,11,8,5,7,18,4,3,68,73,69,156";	
}
if($_POST['idsegmento_escolar']==16){//2 anos
$flag="66,164,1,2,67,125,180,137,40,11";
}
if($_POST['idsegmento_escolar']==15){//1 ano
$flag="66,164,1,2,67,125,180,137,40";
}
    $se->consultar("SELECT v.idunidade_escolar, ue.descricao, v.totalvagas,v.remanescente from vagas v inner join unidade_escolar ue on(v.idunidade_escolar= ue.idunidade_escolar) where v.idunidade_escolar NOT IN($flag) and v.idsegmento_escolar=" . $_POST['idsegmento_escolar'] . " order by ue.descricao");
    $linha = $se->Linha;
    $resultado = $se->Result;

    if ($linha <= 0) {
        echo '<option value="">' . htmlentities('Aguardando escolha ...') . '</option>';
    } else {
        echo '<option value="">Selecione a Unidade Escolar...</option>';
        for ($i = 0; $i < $linha; $i++) {
            echo '<option value="' . mysql_result($resultado, $i, 'v.idunidade_escolar') . '">' . utf8_encode(mysql_result($resultado, $i, 'ue.descricao')).'</option>';
        }
    }


?>