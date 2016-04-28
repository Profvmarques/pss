<?php

session_start();
require_once('classes/usuarios.php');
require_once('classes/util.php');

function Processo($Processo) {

    /* Switch processos */

    switch ($Processo) {

        /* login de identificação */

        case 'login':

            /* Atributos Globais */

            $util = new Util();

            $usuarios = new Usuarios();



            if ($_POST['ok'] == 'true') {

                $sql = 'select * from usuarios u where u.cpf="' . ($_POST['cpf']) . '" and u.senha="' . (base64_encode($_POST['senha'])) . '"';

                //$sql = str_replace("'", "\'", $sql);

                $usuarios->consultar($sql);

                $rs = $usuarios->Result;

                $linha = $usuarios->Linha;



                if ($linha > 0) {

                    $_SESSION['idusuarios'] = mysql_result($rs, 0, 'u.idusuarios');

                    $_SESSION['idperfil'] = mysql_result($rs, 0, 'u.idperfil');

                    $_SESSION['cpf'] = mysql_result($rs, 0, 'u.cpf');
                    //$_SESSION['nome'] = mysql_result($rs, 0, 'i.nome');

                    $_SESSION['horalogado'] = "Logado em " . date('H:i');



                    if ($_SESSION['idperfil'] == 1) {
                        $pg = "default.php?pg=" . base64_encode('view/publico/incluir.php') . "&form=" . base64_encode('Painel');
                    }

                    if ($_SESSION['idperfil'] == 2) {

                        $pg = "default.php?pg=" . base64_encode('view/publico/incluirGestao.php') . "&form=" . base64_encode('Painel');
                    }


                    $util->redirecionamentopage($pg);
                } else {

                    $util->msgbox("Login ou senha errado!");
                }
            }

            break;



        case 'esqueceuSenha':

            /* Atributos Globais */

            require_once('classes/usuarios.php');
            $usuarios = new Usuarios();
            $util = new Util();

            if ($_POST['ok'] == 'true') {

                $sql = "select * from usuarios u inner join perfil on(u.idperfil=perfil.idperfil) inner join inscricao i "
                        . "on(i.idusuarios=u.idusuarios) where i.email='" . trim(strtoupper($_POST['email'])) . "' and u.cpf='" . trim(strtoupper($_POST['cpf'])) . "'";

                $usuarios->consultar($sql);
                $rs = $usuarios->Result;
                $linha = $usuarios->Linha;

                if ($linha > 0) {

                    $cpf = mysql_result($rs, 0, 'u.cpf');
                    $senha = base64_decode(mysql_result($rs, 0, 'u.senha'));
                    $perfil = mysql_result($rs, 0, 'perfil.descricao');


                    $usuarios->EnviarEmail($cpf, $senha, $_POST['email'], $perfil);
                    $util->msgbox("Os dados de autenticação de acesso do PSS, foram enviado para o seguinte e-mail :" . $_POST['email']);
                    $util->redirecionamentopage("index.php");
                } else {

                    //$util->msgbox("O e-mail informado não foi encontrado, por favor verifique seus dados!");
                }
            }

            break;

        case 'logoff':

            $util = new Util();

            @session_destroy();

            $util->redirecionamentopage("index.php");



            break;
    }
}

?>