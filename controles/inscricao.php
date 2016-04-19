<?php
session_start();

require_once('classes/ocorrencias.php');
require_once('classes/inscricao.php');
require_once('classes/titulacao.php');
require_once('classes/experiencia.php');
require_once('classes/usuarios.php');
require_once('classes/util.php');

//echo gethostbyaddr($_SERVER['REMOTE_ADDR']); 
function Processo($Processo) {

    /* Switch processos */
    switch ($Processo) {

        case 'consultaPublico':
            global $linha;
            global $rs;

            $inscricao = new Candidatos();
            $util = new Util();

            if ($_POST['ok'] == 'true') {


                if ($_POST['tipo'] == 'matricula') {

                    $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc,  date_format(i.dtreg, '%d/%m/%Y %H:%i:%s') as dtinscricao from candidatos c inner join inscricao i ON(c.idcandidatos = i.idcandidatos) 
 inner join usuarios u ON(i.idusuarios = u.idusuarios) inner join rendafamiliar rf on(c.idrendafamiliar =rf.idrendafamiliar) 
 inner join segmentoescolar se on(i.idsegmento_escolar = se.idsegmento_escolar) 
 inner join tipoinscricao ti ON(i.idtipoinscricao = ti.idtipoinscricao) 
 inner join tiposegmento ts on(ts.idtipo_segmento = se.idtipo_segmento) where i.idinscricao='" . $_POST['criterio'] . "' and i.idunidade_escolar=" . $_SESSION['idunidade_escolar'] . " and i.idunidade_escolar not IN(66,164,1,2,67,125,180)");
                    $linha = $inscricao->Linha;
                    $rs = $inscricao->Result;

                    if ($linha > 0) {
                        $idcandidatos = @mysql_result($rs, 0, 'i.idcandidatos');
                        echo"<script>window.open('view/candidatos/ficha2.php?&id=" . $idcandidatos . "');</script>";
                    }
                }

                if ($_POST['tipo'] == 'nome') {
                    $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc,  date_format(i.dtreg, '%d/%m/%Y %H:%i:%s') as dtinscricao from candidatos c inner join inscricao i ON(c.idcandidatos = i.idcandidatos) 
 inner join usuarios u ON(i.idusuarios = u.idusuarios) inner join rendafamiliar rf on(c.idrendafamiliar =rf.idrendafamiliar) 
 inner join segmentoescolar se on(i.idsegmento_escolar = se.idsegmento_escolar) 
 inner join tipoinscricao ti ON(i.idtipoinscricao = ti.idtipoinscricao) 
 inner join tiposegmento ts on(ts.idtipo_segmento = se.idtipo_segmento) where i.idunidade_escolar=" . $_SESSION['idunidade_escolar'] . " and i.idunidade_escolar not IN(66,164,1,2,67,125,180) and c.nome like '%" . $_POST['criterio'] . "%' order by c.nome");
                    $linha = $inscricao->Linha;
                    $rs = $inscricao->Result;
                }
            }
            break;

        case 'editar':

            /* Atributos Globais */
            $util = new Util();
            $inscricao = new Inscricao();
            $ocorrencias = new Ocorrencias();
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;
            global $linha4;
            global $rs4;


            $inscricao->consultar("select *, date_format(nascimento, '%d/%m/%Y') as dtnasc,  date_format(i.dtreg, '%d/%m/%Y %H:%i:%s') as dtinscricao from candidatos c inner join inscricao i ON(c.idcandidatos = i.idcandidatos) 
 inner join usuarios u ON(i.idusuarios = u.idusuarios) inner join rendafamiliar rf on(c.idrendafamiliar =rf.idrendafamiliar) 
 inner join segmentoescolar se on(i.idsegmento_escolar = se.idsegmento_escolar) 
 inner join tipoinscricao ti ON(i.idtipoinscricao = ti.idtipoinscricao) 
 inner join tiposegmento ts on(ts.idtipo_segmento = se.idtipo_segmento) where i.idinscricao=" . $_GET['id']);
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;

            $inscricao->consultar("select * from tiposegmento");
            $linha2 = $inscricao->Linha;
            $rs2 = $inscricao->Result;

            $inscricao->consultar("select * from rendafamiliar");
            $linha3 = $inscricao->Linha;
            $rs3 = $inscricao->Result;


            if ($_POST['ok'] == 'true') {
                try {
                    //Chamar Incluir

                    $idcandidatos = $inscricao->alterar($_GET['id'], $_POST['nome'], $_POST['pai'], $_POST['mae'], $util->formatoDataYMD($_POST['nascimento']), $_POST['sexo'], $_POST['endereco'], $_POST['numero'], $_POST['complemento'], $_POST['bairro'], $_POST['cidade'], $_POST['uf'], $_POST['cep'], $_POST['telefone'], $_POST['celular'], $idrendafamiliar, $_POST['num_irmaos'], $_POST['responsavel'], $_POST['cpf'], $_POST['rg'], $_POST['email'], $auditiva, $visual, $motora, $intelectual, $transtorno_global, $_POST['deficiencias_outras'], $_POST['idade'], $_SESSION['idusuarios'], $_POST['idsegmento_escolar'], $_POST['idtipoinscricao'], $_POST['idunidade_escolar'], $_POST['idunidade_escolar2'], $_POST['idunidade_escolar3'], $_POST['idunidade_escolar4'], $_POST['idunidade_escolar5'], $_POST['camisa_aluno'], $_POST['bermuda_aluno'], $_POST['pe_aluno']);

                    $descricao = "Realizado Cadastro do Candidato <b>" . $_POST['nome'] . "</b> pelo usuário <b>" . $_SESSION['cpf'] . "</b>";
                    $funcionalidade = "Cadastro de novo candidato";
                    $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));

                    $inscricao->consultar("select * from tiposegmento");
                    $linha = $inscricao->Linha;
                    $rs = $inscricao->Result;

                    $inscricao->consultar("COMMIT");
                    echo"<script>window.open('view/candidatos/ficha.php?&id=" . $idcandidatos . "');</script>";
                    $util->MsgboxSimNaoNovoCad("Registro salvo com sucesso! Deseja Cadastrar um novo Candidato?", 'default.php?pg=view/candidatos/incluir.php&form=Consulta de Candidatos', 'default.php?pg=view/ocorrencias/ocorrencias.php&form=Ocorr&ecirc;ncias que merecem aten&ccedil;&atilde;o');
                } catch (Exception $ex) {
                    $inscricao->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;

        /* incluir */
        case 'incluirPublico':

            $util = new Util();
            $ocorrencias = new Ocorrencias();
            $inscricao = new Inscricao();
            $usuarios = new Usuarios();
            $titulacao = new Titulacao();
            $experiencia = new Experiencia();
            global $linha;
            global $rs;
            global $linha2;
            global $rs2;
            global $linha3;
            global $rs3;

            if ($_GET['cadastro'] == 0) {

                $util->Seguranca($_SESSION['idusuarios'], '../index.php');
            }

            $inscricao->consultar("select * from cargos order by descricao;");
            $linha = $inscricao->Linha;
            $rs = $inscricao->Result;


            $inscricao->consultar("select * from titulacao order by idtitulacao;");
            $linha2 = $inscricao->Linha;
            $rs2 = $inscricao->Result;


            $inscricao->consultar("select * from experiencia order by descricao;");
            $linha3 = $inscricao->Linha;
            $rs3 = $inscricao->Result;

            




            if ($_POST['ok'] == 'true') {
                try {

                    $usuarios->verificarCPF($_POST['cpf']);
                    $cpf_valido = $util->validaCPF($_POST['cpf']);
                    
                    if ($cpf_valido == false) {
                        $_POST['ok'] = false;
                        $util->msgbox("CPF INVÁLIDO! VERIFIQUE A SEQUÊNCIA DE NÚMEROS INFORMADA");
                    } 
                    if ($usuarios->Achou == 'nao' && $cpf_valido==true) {
                        $pontos = 0;
                        $inscricao->consultar("BEGIN");

                        $pontos+=$titulacao->obterPontos($_POST['idtitulacao']);
                        $pontos+=$experiencia->obterPontos($_POST['idexperiencia']);

                        
                        $idusuarios = $usuarios->incluirPublico($_POST['cpf'], $_POST['senha'], 1);
                        //Para resolver o insert do logs
                        if($_GET['cadastro']==1){
                            $_SESSION['idusuarios'] =$idusuarios;
                        }

                        $idinscricao=$inscricao->incluir($_POST['rg'], $util->formatoDataYMD($_POST['data_expedicao']), $_POST['nome'], $_POST['sexo'], $util->formatoDataYMD($_POST['nascimento']), $_POST['endereco'],$_POST['complemento'], $_POST['bairro'], $_POST['municipio'], $_POST['uf'], $_POST['cep'], $_POST['telefone'], $_POST['celular'], $_POST['email'], $_POST['idcargos'], $_POST['idexperiencia'], $_POST['idtitulacao'], $idusuarios, $pontos);

                        $descricao = "Realizado Cadastro do Candidato <b>" . $_POST['nome'] . "</b> pelo usuário <b>" . $_SESSION['cpf'] . "</b>";
                        $funcionalidade = "Cadastro de novo candidato";
                        $ocorrencias->Incluir($_SESSION['idusuarios'], utf8_decode($descricao), utf8_decode($funcionalidade));

                        $inscricao->consultar("COMMIT");
                        $descricao = "Realizado Cadastro do Candidato <b>" . $_POST['nome'] . "</b> pelo usuário <b>" . $_POST['cpf'];
                                $pg = "view/candidatos/ficha.php?&id=" . $idinscricao;
                        //$pg= base64_encode($pg);
                        echo"<script>window.open('" . $pg . "');</script>";
                        //$pg = "default.php?pg=" . base64_encode('view/publico/incluir.php') . "&form=" . base64_encode('Painel');

                        $pg ='index.php';

                        $util->msgbox("Registro salvo com sucesso!");
                        $util->redirecionamentopage($pg);
                    }
                } catch (Exception $ex) {
                    $inscricao->consultar("ROLLBACK");
                    $util->msgbox("Falha de operacao");
                }
            }
            break;
    }
}
?>