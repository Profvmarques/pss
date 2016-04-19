<?php
@session_start();
require_once('../classes/segmento_escolar.php');
$se = new SegmentoEscolar();
$idtipoinscricao = $_GET['ti'];

$se->consultar("SELECT * from segmentoescolar where idsegmento_escolar=" . $_POST['idsegmento_escolar']);
$ls = $se->Linha;
$rs = $se->Result;
$idtipo_segmento = mysql_result($rs, 0, 'idtipo_segmento');

	echo "SELECT * from vagas v 
inner join unidade_escolar ue on(v.idunidade_escolar= ue.idunidade_escolar) 
where 
v.idsegmento_escolar=" . $_POST['idsegmento_escolar'] . " and v.remanescente>0 and v.idunidade_escolar=" . $_SESSION['idunidade_escolar']." and v.tipovaga='TRANSFERENCIA_SEGUNDA_FASE' order by ue.descricao;";

    $se->consultar("SELECT * from vagas v 
inner join unidade_escolar ue on(v.idunidade_escolar= ue.idunidade_escolar) 
where 
v.idsegmento_escolar=" . $_POST['idsegmento_escolar'] . " and v.remanescente>0 and v.idunidade_escolar=".$_SESSION['idunidade_escolar']." and v.tipovaga='TRANSFERENCIA_SEGUNDA_FASE' order by ue.descricao;");
    $linha = $se->Linha;
    $resultado = $se->Result;	

     if ($linha <= 0) {
        echo '<option value="">' . htmlentities('SUA UNIDADE ESCOLAR CARECE DE VAGA ...') . '</option>';
    } else {
        echo '<option value="">Selecione a Unidade Escolar...</option>';
        for ($i = 0; $i < $linha; $i++) {
            echo '<option value="' . mysql_result($resultado, $i, 'v.idunidade_escolar') . '">' . utf8_encode(mysql_result($resultado, $i, 'ue.descricao')).' - Vagas Remanescentes : '. utf8_encode(mysql_result($resultado, $i, 'v.remanescente')).'</option>';
        }
    }


?>