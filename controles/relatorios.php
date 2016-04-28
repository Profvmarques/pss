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

            $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc, date_format(data_expedicao, '%d/%m/%Y') as data_exp,  date_format(i.dtreg, '%d/%m/%Y %H:%i:%s') as dtinscricao from inscricao i INNER join usuarios u on(i.idusuarios=u.idusuarios) 
inner join cargos c on(i.idcargos = c.idcargos) 
inner JOIN experiencia e on(i.idexperiencia=e.idexperiencia)
where i.idinscricao=" . $_GET['id']);
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

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
order by c.descricao, i.pontos desc, i.nascimento asc, i.nome");
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            $array = array();

            $testeCrago='';
            $cont=0;
            for ($i = 0; $i < $linha; $i++) {

                if(mysql_result($rs, $i, 'c.idcargos')!=$testeCrago){
                  $array[$i]['flag'] = mysql_result($rs, $i, 'c.idcargos');
                  $testeCrago=mysql_result($rs, $i, 'c.idcargos');
                  $array[$i]['cargo'] = mysql_result($rs, $i, 'c.descricao');
                  $array[$i]['total']=$inscricao->obterTotalIncritosCargo(mysql_result($rs, $i, 'c.idcargos'));
                  
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