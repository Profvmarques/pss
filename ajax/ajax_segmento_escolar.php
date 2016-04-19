<?php

require_once('../classes/segmento_escolar.php');
$se = new SegmentoEscolar();
$idtipoinscricao = $_GET['ti'];
/* if($_SESSION['idunidade_escolar']<>137 && ($_SESSION['idunidade_escolar']==88 || $_SESSION['idunidade_escolar']==56 || $_SESSION['idunidade_escolar']==128 || $_SESSION['idunidade_escolar']==141 || $_SESSION['idunidade_escolar']==123 || $_SESSION['idunidade_escolar']==91)){
  $se->consultar("select * from segmentoescolar where idtipo_segmento=" . $_POST['idtipo_segmento'] . " and situacao <> 'INATIVO' order by descricao");
  $linha = $se->Linha;
  $resultado = $se->Result;
  }else{

  } */
  //Para a pre-inscricao do Infantil - primeiro ano
if ($_POST['idtipo_segmento'] == 4 && $idtipoinscricao == 1) {

    $se->consultar("select * from segmentoescolar where idtipo_segmento=4 and idsegmento_escolar>=15 and idsegmento_escolar<=19 order by descricao;");
    $linha = $se->Linha;
    $resultado = $se->Result;
}
  
//Para a pre-inscricao do fundamental - primeiro ano
if ($_POST['idtipo_segmento'] == 2 && $idtipoinscricao == 1) {

    $se->consultar("select * from segmentoescolar where idtipo_segmento=2 order by descricao;");
    $linha = $se->Linha;
    $resultado = $se->Result;
}
//P

//Para a pre-inscricao do fundamental - primeiro ano
if ($_POST['idtipo_segmento'] == 1 /*&& $idtipoinscricao == 1*/) {

    $se->consultar("select * from segmentoescolar where idtipo_segmento=1 order by descricao;");
    $linha = $se->Linha;
    $resultado = $se->Result;
}

/*
//Para a pre-inscricao do fundamental - primeiro ano
if ($_POST['idtipo_segmento'] == 1 && $idtipoinscricao == 2) {

    $se->consultar("select * from segmentoescolar where idtipo_segmento=1 and (idsegmento_escolar>=7 and idsegmento_escolar<=14) order by descricao;");
    $linha = $se->Linha;
    $resultado = $se->Result;
}
*/
//Para a pre-inscricao do EJA - primeiro ano
if ($_POST['idtipo_segmento'] ==2 && $idtipoinscricao == 1) {

    $se->consultar("select * from segmentoescolar where idtipo_segmento=2 order by descricao;");
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