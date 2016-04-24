<?php
require_once('../classes/segmento_escolar.php');
$se = new SegmentoEscolar();
$idtipoinscricao = $_GET['ti'];

if ($_POST['idtipo_segmento']!='') {

    $se->consultar("select * from segmentoescolar where idtipo_segmento=".$_POST['idtipo_segmento']." order by descricao");
    $linha = $se->Linha;
    $resultado = $se->Result;
} 

if ($linha <= 0) {
    echo '<option value="">' . htmlentities('Aguardando escolha ...') . '</option>';
} else {
    echo '<option value="">Selecione o Segmento Escolar...</option>';
    for ($i = 0; $i < $linha; $i++) {
        echo '<option value="' . mysql_result($resultado, $i, 'idsegmento_escolar') . '">' . utf8_encode(mysql_result($resultado, $i, 'descricao')) . '</option>';
    }
}
?>