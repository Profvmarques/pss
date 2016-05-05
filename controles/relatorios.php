<?php

@session_start();

function Processo($Processo) {
    /* Switch processos */
    switch ($Processo) {
        /* incluir */
        case 'fichaCandidato':
            ini_set('memory_limit', '500M');
            ini_set('max_execution_time', 600);
            require_once('../../classes/util.php');
            require_once('../../classes/inscricao.php');
            $inscricao = new Inscricao();

            $util = new Util();
            $util->Seguranca($_SESSION['idusuarios'], '../index.php');
            global $linha;
            global $rs;
            global $tipo;
            global $msg;
            global $unidadeEscolar;
            global $idsegmento_escolar;
            global $situacao;
            global $array;
            global $fase;
            global $adm_publica;
            global $participacao_projetos;
            global $curso_extensao;
            global $curso_aperfeicoamento;
            global $inf_basica;

            $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc, date_format(data_expedicao, '%d/%m/%Y') as data_exp,  date_format(i.dtreg, '%d/%m/%Y %H:%i:%s') as dtinscricao from inscricao i INNER join usuarios u on(i.idusuarios=u.idusuarios) 
inner join cargos c on(i.idcargos = c.idcargos) 
inner JOIN experiencia e on(i.idexperiencia=e.idexperiencia)
where i.idinscricao=" . $_GET['id']);
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;
            
            if(mysql_result($rs,0,'experiencia_adm_publica')==1){
              $adm_publica='EXPERI&Ecirc;NCIA NA ADMINISTRA&Ccedil;&Atilde;O P&Uacute;BLICA EM ATUA&Ccedil;&Atilde;O COMPAT&Iacute;VEL NA &Aacute;REA DA FUN&Ccedil;&Atilde;O PRETENDIDA (M&Iacute;NIMA DE 02 ANOS).';  
            }
            if(mysql_result($rs,0,'participacao_projetos')==1){
              $participacao_projetos='PARTICIPA&Ccedil;&Atilde;O EM PROJETOS NA &Aacute;REA PRETENDIDA (M&Aacute;XIMO DE 01 PROJETO EM 2015).';
            }
            
            if(mysql_result($rs,0,'curso_extensao')==1){
              $curso_extensao='CURSO DE EXTENS&Atilde;O NA &Aacute;REA PRETENDIDA &ndash; CARGA HOR&Aacute;RIA MIN&Iacute;MA DE 30H (M&Aacute;XIMO DE 01 CURSO).';
            }
            
            if(mysql_result($rs,0,'curso_aperfeicoamento')==1){
              $curso_aperfeicoamento='CURSO DE APERFEI&Ccedil;OAMENTO NA &Aacute;REA PRETENDIDA &ndash; CARGA HOR&Aacute;RIA M&Iacute;NIMA DE 180H (M&Aacute;XIMO DE 01 CURSO).';
            }

            if(mysql_result($rs,0,'inf_basica')==1){
              $inf_basica='CURSO DE INFORM&Aacute;TICA B&Aacute;SICA.';
            }
            
            break;

        case 'listaGeralCargo':
            ini_set('memory_limit', '500M');
            ini_set('max_execution_time', 600);
            require_once('../../classes/util.php');
            require_once('../../classes/inscricao.php');
            $inscricao = new Inscricao();

            $util = new Util();
            $util->Seguranca($_SESSION['idusuarios'], '../index.php');
            global $linha;
            global $rs;
            global $linha2;
            global $rs;
            global $array;

            $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc from inscricao i inner join usuarios u on(i.idusuarios=u.idusuarios) inner join cargos c on(i.idcargos = c.idcargos)
order by c.descricao, i.pontos desc, i.nome");
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            $array = array();

            $testeCrago = '';
            $cont = 0;
            $class = 0;
            for ($i = 0; $i < $linha; $i++) {
                $cargosAtual = mysql_result($rs, $i, 'c.idcargos');

                if ($cargosAnterior == '') {
                    $cargosAnterior = $cargosAtual;
                } else {
                    $x = $i - 1;
                    $cargosAnterior = mysql_result($rs, $x, 'c.idcargos');
                }

                if ($cargosAnterior==$cargosAtual) {
                    $class=$class+1;
                    $array[$i]['classificacao'] = $class;                    
                }else{
                    $class=0;
                    $class=$class+1;
                    $array[$i]['classificacao'] = $class;
                }

                if (mysql_result($rs, $i, 'c.idcargos') != $testeCrago) {

                    $testeCrago = mysql_result($rs, $i, 'c.idcargos');
                    $array[$i]['cargo'] = mysql_result($rs, $i, 'c.descricao');
                    $array[$i]['total'] = $inscricao->obterTotalIncritosCargo(mysql_result($rs, $i, 'c.idcargos'));
                }
                $array[$i]['inscricao'] = mysql_result($rs, $i, 'i.idinscricao');
                $array[$i]['nome'] = mysql_result($rs, $i, 'i.nome');
                $array[$i]['nascimento'] = @mysql_result($rs, $i, 'dtnasc');
                $array[$i]['pontos'] = mysql_result($rs, $i, 'i.pontos');
            }

            break;
            
            case 'listaHomologacaoPrevia':
            ini_set('memory_limit', '500M');
            ini_set('max_execution_time', 600);
            require_once('../../classes/util.php');
            require_once('../../classes/inscricao.php');
            $inscricao = new Inscricao();

            $util = new Util();
            $util->Seguranca($_SESSION['idusuarios'], '../index.php');
            global $linha;
            global $rs;
            global $linha2;
            global $rs;
            global $array;

            $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc from inscricao i inner join usuarios u on(i.idusuarios=u.idusuarios) inner join cargos c on(i.idcargos = c.idcargos)
order by c.descricao, i.nome");
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            $array = array();

            $testeCrago = '';
            $cont = 0;
            $class = 0;
            for ($i = 0; $i < $linha; $i++) {
                $cargosAtual = mysql_result($rs, $i, 'c.idcargos');

                if ($cargosAnterior == '') {
                    $cargosAnterior = $cargosAtual;
                } else {
                    $x = $i - 1;
                    $cargosAnterior = mysql_result($rs, $x, 'c.idcargos');
                }

                if ($cargosAnterior==$cargosAtual) {
                    $class=$class+1;
                    $array[$i]['classificacao'] = $class;                    
                }else{
                    $class=0;
                    $class=$class+1;
                    $array[$i]['classificacao'] = $class;
                }

                if (mysql_result($rs, $i, 'c.idcargos') != $testeCrago) {

                    $testeCrago = mysql_result($rs, $i, 'c.idcargos');
                    $array[$i]['cargo'] = mysql_result($rs, $i, 'c.descricao');
                    $array[$i]['total'] = $inscricao->obterTotalIncritosCargo(mysql_result($rs, $i, 'c.idcargos'));
                }
                $array[$i]['inscricao'] = mysql_result($rs, $i, 'i.idinscricao');
                $array[$i]['nome'] = mysql_result($rs, $i, 'i.nome');
                $array[$i]['nascimento'] = @mysql_result($rs, $i, 'dtnasc');
                $array[$i]['pontos'] = mysql_result($rs, $i, 'i.pontos');
            }

            break;

        case 'listaCargoSuperiorIgual':
            ini_set('memory_limit', '500M');
            ini_set('max_execution_time', 600);
            require_once('../../classes/util.php');
            require_once('../../classes/inscricao.php');
            $inscricao = new Inscricao();

            $util = new Util();
            $util->Seguranca($_SESSION['idusuarios'], '../index.php');
            global $linha;
            global $rs;
            global $linha2;
            global $rs;
            global $array;

            $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc from inscricao i inner join usuarios u on(i.idusuarios=u.idusuarios) inner join cargos c on(i.idcargos = c.idcargos)
 where i.pontos>=7 order by c.descricao, i.pontos desc, i.nome");
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            $array = array();

            $testeCrago = '';
            $cont = 0;
            $class = 0;
            for ($i = 0; $i < $linha; $i++) {

                if (mysql_result($rs, $i, 'c.idcargos') != $testeCrago) {
                    $array[$i]['flag'] = mysql_result($rs, $i, 'c.idcargos');
                    $testeCrago = mysql_result($rs, $i, 'c.idcargos');
                    $array[$i]['cargo'] = mysql_result($rs, $i, 'c.descricao');
                    $array[$i]['total'] = $inscricao->obterTotalIncritosCargo(mysql_result($rs, $i, 'c.idcargos'));
                    $class = 0;
                } else {
                    $array[$i]['classificacao'] = $class++;
                }


                $array[$i]['inscricao'] = mysql_result($rs, $i, 'i.idinscricao');
                $array[$i]['nome'] = mysql_result($rs, $i, 'i.nome');
                $array[$i]['nascimento'] = @mysql_result($rs, $i, 'dtnasc');
                $array[$i]['pontos'] = mysql_result($rs, $i, 'i.pontos');
            }

            break;
    }
}

?>