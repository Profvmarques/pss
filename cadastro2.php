<?php
require_once('controles/usuarios.php');
Processo('cadastroPais');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prefeitura Duque de Caxias</title>
<link type="text/css" href="css/styles.css" rel="stylesheet" />

</head>

<body>

<div id="topo">
	<img src="img/logo.png" />
</div>

<div class="botao">
    <ul class="nav nav-tabs">
        <li><a class="active" href="#"  >Home</a></li>
        <li><a href="nome.php">Cadastrar</a></li>
        <li><a href="nome.php">Consultar</a></li>
        <li><a href="nome.php">Nome</a></li>
        <li><a href="nome.php">Nome</a></li>
        <li><a href="nome.php">Nome</a></li>
        <li><a href="nome.php">Nome</a></li>
    </ul>
</div>

<div class="login-wrapper">
  <!-- BEGIN Login Form -->
  <form id="form" name="form" action="" method="post">
    <h3>&nbsp;</h3>
    <hr/>
    <div class="control-group">
      <div class="controls">
        <table width="726" border="0" align="center">
          <tr>
            <td width="161">NOME </td>
            <td width="555"><input name="nome" type="text" class="input-xlarge" id="nome" placeholder="" />
            </td>
          </tr>
          <tr>
            <td>LOGIN</td>
            <td><input name="login" type="text" class="input-medium" id="login" placeholder="" /></td>
          </tr>
          <tr>
            <td>SENHA</td>
            <td><input name="senha" type="password" class="input-medium" id="senha" placeholder="" /></td>
          </tr>
          <tr>
            <td>E-MAIL</td>
            <td><input name="email" type="text" class="input-xlarge" id="email" placeholder="" /></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="control-group"></div>
    <div class="control-group">
      <div class="controls">
        <button type="button" class="btn btn-primary input-block-level" onclick="validar(document.form);">Enviar</button>
      </div>
    </div>
    <hr/>
    <p class="clearfix">
      <input name="ok" type="hidden" id="ok"/>
      </span></span> </p>
  </form>
  <!-- END Login Form -->
  <h3>&nbsp;</h3>
</div>
<div id="footer">
<p>SEDE MUNICIPAL DA PREFEITURA DE DUQUE DE CAXIAS - ALAMEDA ESMERALDA 206, JD. PRIMAVERA, DUQUE DE CAXIAS / RJ<br />
CEP: 25215-260  - TEL: (21) 2773-6200 CNPJ: 29.138.328/0001-50<br />
2013-TODOS OS DIREITOS RESERVADOS<br />
Atendimento ao público: segunda a sexta de 9h as 17h</p>
</div>

</body>
</html>
