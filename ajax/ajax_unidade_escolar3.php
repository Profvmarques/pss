<?php

require_once('../classes/segmento_escolar.php');
$se = new SegmentoEscolar();
$idtipoinscricao = $_GET['ti'];

$idsegmento_escolar = $_POST['idsegmento_escolar'];
$idtipo_segmento = $_POST['idtipo_segmento'];
$idunidade_escolar=$_POST['idunidade_escolar'].",".$_POST['idunidade_escolar2'];



    $se->consultar("SELECT v.idunidade_escolar, ue.descricao, v.totalvagas from vagas v inner join unidade_escolar ue on(v.idunidade_escolar= ue.idunidade_escolar) where v.idunidade_escolar NOT IN(66,164,1,2,67,125,180,".$idunidade_escolar.") and v.idsegmento_escolar=".$idsegmento_escolar." and ue.tipo NOT IN('ESCOLA_CAMPO') and v.totalvagas > 0 order by ue.descricao;");
    $linha = $se->Linha;
    $resultado = $se->Result;

    if ($linha <= 0) {
        echo '<option value="">' . htmlentities('Aguardando escolha ...') . '</option>';
    } else {
        echo '<option value="">Selecione o Unidade Escolar...</option>';
        for ($i = 0; $i < $linha; $i++) {
            echo '<option value="' . mysql_result($resultado, $i, 'v.idunidade_escolar') . '">' . utf8_encode(mysql_result($resultado, $i, 'ue.descricao')).'</option>';
        }
    }

?>