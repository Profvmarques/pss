<?php
@session_start();
require_once('../classes/segmento_escolar.php');
$se = new SegmentoEscolar();
$idtipoinscricao = $_GET['ti'];

  //Para a pre-inscricao do Infantil - 4 a 5 anos
if ($_POST['idtipo_segmento'] == 4) {

    $se->consultar("select * from segmentoescolar where idsegmento_escolar in(17,19) ");

    $linha = $se->Linha;
    $resultado = $se->Result;
}
  //Para a pre-inscricao do Fundamental - 1 a 9 ano
 if ($_POST['idtipo_segmento'] == 1) {

     $se->consultar("select * from segmentoescolar where idsegmento_escolar in(6,7,8,9,10,11,12,13,14)");
    $linha = $se->Linha;
    $resultado = $se->Result;
}

 if ($_POST['idtipo_segmento'] == 2) {

     $se->consultar("select * from segmentoescolar where idsegmento_escolar in(1,2,3,4,5)");
    $linha = $se->Linha;
    $resultado = $se->Result;
}

if ($linha <= 0) {
    echo '<option value="">' . htmlentities('SUA UNIDADE ESCOLAR CARECE DE VAGA  ...') . '</option>';
} else {
    echo '<option value="">Selecione o Segmento Escolar...</option>';
    for ($i = 0; $i < $linha; $i++) {
        echo '<option value="' . mysql_result($resultado, $i, 'idsegmento_escolar') . '">' . utf8_encode(mysql_result($resultado, $i, 'descricao')) . '</option>';
    }
}
?>