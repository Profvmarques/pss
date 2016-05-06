<?php
@session_start();

require_once('classes/usuarios.php');
require_once('classes/util.php');
require_once('classes/ocorrencias.php');

function Processo($Processo) {

    /* Atributos Globais */

    $util = new Util();

    $usuarios = new Usuarios();

    $ocorrencias = new Ocorrencias();



    /* Switch processos */

    switch ($Processo) {

        case 'publico':

            $util->Seguranca($_SESSION['idusuarios'], 'index.php');

            global $linha;

            global $rs;

            global $linha2;

            global $rs2;

            global $linha3;

            global $rs3;

            global $linha4;

            global $rs4;

            global $linha5;

            global $rs5;


            $usuarios->consultar("select * from usuarios u inner join inscricao i on(i.idusuarios=u.idusuarios) "
                    . "inner join cargos c on(i.idcargos=c.idcargos) where u.cpf=".$_SESSION['cpf']);
            $linha = $usuarios->Linha;
            $rs = $usuarios->Result;

            break;



        case 'publicoGestao':

            $util->Seguranca($_SESSION['idusuarios'], 'index.php');

            global $linha;

            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;
            global $linha4;
            global $rs4;
            global $linha5;
            global $rs5;            
            global $linha6;
            global $rs6;
            
            $usuarios->consultar("select count(*) as total from requerimento where situacao='EM ANALISE'");
            $linha6 = $usuarios->Linha;
            $rs6 = $usuarios->Result;

            $usuarios->consultar("select * from cargos order by descricao;");
            $linha = $usuarios->Linha;
            $rs = $usuarios->Result;


            $usuarios->consultar("select * from titulacao order by descricao;");
            $linha2 = $usuarios->Linha;
            $rs2 = $usuarios->Result;


            $usuarios->consultar("select * from experiencia order by descricao;");
            $linha3 = $usuarios->Linha;
            $rs3 = $usuarios->Result;
            
            $usuarios->consultar("select count(*) as total from inscricao i inner join usuarios u on(i.idusuarios=u.idusuarios) inner join cargos c on(i.idcargos = c.idcargos)
order by c.descricao, i.nome;");
            $linha4 = $usuarios->Linha;
            $rs4 = $usuarios->Result;
            
            $usuarios->consultar("select count(*) as total from inscricao i inner join usuarios u on(i.idusuarios=u.idusuarios) inner join cargos c on(i.idcargos = c.idcargos) where i.pontos>=7");
            $linha5 = $usuarios->Linha;
            $rs5 = $usuarios->Result;
            break;



        case 'consulta':

            require_once('classes/candidatos.php');

            global $linha;

            global $rs;



            $candidatos = new Candidatos();

            $util = new Util();



            if ($_POST['ok'] == 'true') {



                if ($_POST['tipo'] == 'matricula') {

                    $candidatos->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc,  date_format(i.dtreg, '%d/%m/%Y %H:%i:%s') as dtinscricao from candidatos c inner join inscricao i ON(c.idcandidatos = i.idcandidatos) 

 inner join usuarios u ON(i.idusuarios = u.idusuarios) inner join rendafamiliar rf on(c.idrendafamiliar =rf.idrendafamiliar) 

 inner join segmentoescolar se on(i.idsegmento_escolar = se.idsegmento_escolar) 

 inner join tipoinscricao ti ON(i.idtipoinscricao = ti.idtipoinscricao) 

 inner join tiposegmento ts on(ts.idtipo_segmento = se.idtipo_segmento) where i.idinscricao='" . $_POST['criterio'] . "'");

                    $linha = $candidatos->Linha;

                    $rs = $candidatos->Result;



                    if ($linha > 0) {

                        $idcandidatos = @mysql_result($rs, 0, 'i.idcandidatos');

                        echo"<script>window.open('view/candidatos/ficha.php?&id=" . $idcandidatos . "');</script>";
                    }
                }



                if ($_POST['tipo'] == 'nome') {

                    $candidatos->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc,  date_format(i.dtreg, '%d/%m/%Y %H:%i:%s') as dtinscricao from candidatos c inner join inscricao i ON(c.idcandidatos = i.idcandidatos) 

 inner join usuarios u ON(i.idusuarios = u.idusuarios) inner join rendafamiliar rf on(c.idrendafamiliar =rf.idrendafamiliar) 

 inner join segmentoescolar se on(i.idsegmento_escolar = se.idsegmento_escolar) 

 inner join tipoinscricao ti ON(i.idtipoinscricao = ti.idtipoinscricao) 

 inner join tiposegmento ts on(ts.idtipo_segmento = se.idtipo_segmento) where  c.cpf ='" . $_POST['criterio'] . "' order by c.nome");





                    $linha = $candidatos->Linha;

                    $rs = $candidatos->Result;
                }
            }

            break;
    }
}
?>