<?php



require_once('../classes/segmento_escolar.php');

$se = new SegmentoEscolar();

$idtipoinscricao = $_GET['ti'];



//Para a pre-inscricao do EJA - Etapa I

if ($_POST['idtipo_segmento'] == 2) {



    $se->consultar("select * from segmentoescolar where idtipo_segmento=2 and idsegmento_escolar=1 order by descricao;");

    $linha = $se->Linha;

    $resultado = $se->Result;

}



  //Para a pre-inscricao do Infantil - primeiro ano

if ($_POST['idtipo_segmento'] == 4) {



    $se->consultar("select * from segmentoescolar where idtipo_segmento=4 and idsegmento_escolar in(17,19) order by descricao;");

    $linha = $se->Linha;

    $resultado = $se->Result;

}

  



//Para a pre-inscricao do fundamental - primeiro ano

if ($_POST['idtipo_segmento'] == 1 /*&& $idtipoinscricao == 1*/) {



    $se->consultar("select * from segmentoescolar where idtipo_segmento=1 and idsegmento_escolar=6 order by descricao;");

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