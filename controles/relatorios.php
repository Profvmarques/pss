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
inner join titulacao t on(i.idtitulacao=t.idtitulacao) 
inner JOIN experiencia e on(i.idexperiencia=e.idexperiencia)
where i.idinscricao=" . $_GET['id']);
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            break;
    }
}

?>