<?php
require_once('controles/usuarios.php');
Processo('cadastroPais');
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>PSS - FUNDEC</title>





<!--

<link type="text/css" href="css/styles.css" rel="stylesheet" />



  base css styles antigo-->



     <!--base css style



        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">



        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">



        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">



        <link rel="stylesheet" href="assets/normalize/normalize.css">







        <!--page specific css styles-->







        <!--flaty css styles



        <link rel="stylesheet" href="css/flaty.css">



        <link rel="stylesheet" href="css/flaty-responsive.css">



		<link rel="stylesheet" href="css/design.css">



-->



<!-- adriano -->

<link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>

  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>

  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>

  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>





        <link rel="shortcut icon" href="favicon.ico">



</head>



<script src="js/Validacaoform.js"></script>



<body>

<div class="container">

  <div class="row"> 

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/logo.png" /></div>



<div class="row">



<?php include "menu.php" ; ?>

</div>

</div>

<div class="row">

<div id="content">



   <h1><i class="icon-file-alt"></i>



 



	<?php



	if($_GET['form']==""){



		echo "";



	}else{



						



	 echo base64_decode($_GET['form']);



						}



						 



						 ?></h1>

</div>

</div>

   

<!-- repetindo valor de cpf -->

<script language=JavaScript>

function repeat(valor)

{

document.form.senha.value = valor;

senha.innerHTML=valor

}

</script> 







<!-- BEGIN Login Form -->



<div class="container">



  <form class="form-horizontal" id="form" name="form" action="" method="post">

    <div class="form-group" align="left">



<div class="row-fluid">





<label class="control-label">RESPONS&Aacute;VEL</label>

<input type="text" name="nome" id="nome" class="form-control" title="O campo é obrigatório"/>



</div>



<div class="row-fluid">





<label class="control-label">CPF</label>

<input type="text" name="login" id="login" class="form-control" title="O campo é obrigatório" onkeypress="return Mascaras_Format(document.form,'login','99999999999',event);" onblur="TestaCPF(document.form.login.value);" autocomplete="off" onKeyUp="repeat(document.digitador.login.value)"/>



</div>



<div class="row-fluid">





</br>

<div class="alert alert-info" role="alert">

  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>

  <span class="sr-only">ATENÇÃO:</span>

  ATENÇÃO: Sua senha é o seu CPF.

</div>







<!--

<label class="control-label">SUA SENHA É O SEU CPF</label>

<input type="password" name="senha" id="senha" class="form-control" title="O campo é obrigatório" /> -->



</div>



<div class="row-fluid">





<label class="control-label">E-MAIL</label>

<input type="text" name="email" id="nome" class="form-control"/>



</div>



</BR>

<DIV class="row-fluid">



    <div class="control-group"></div>



    <div class="control-group">



      <div class="controls">





       <button type="button" class="btn btn-primary bt-large" onclick="validar(document.form);">ENVIAR</button>

		

                                    <button type="button" class="btn  btn-default bt-large" >CANCELAR</button>

                                    

                               

                                    

        </DIV>



      </div>



    </div>



 



    <p class="clearfix">



      <input name="ok" type="hidden" id="ok"/>



      </span></span> </p>



  </form>



  <!-- END Login Form -->



</div><!-- fim CONTAINER -->





<div id="footer">



<div class="container-fluid">

<div class="row-fluid">

<hr />

<div class="col-md-10 col-md-offset-1">

<center>

<p>SEDE MUNICIPAL DA PREFEITURA DE DUQUE DE CAXIAS - ALAMEDA ESMERALDA 206, JD. PRIMAVERA, DUQUE DE CAXIAS / RJ<br />



CEP: 25215-260  - TEL: (21) 2773-6200 CNPJ: 29.138.328/0001-50<br />



2013-TODOS OS DIREITOS RESERVADOS<br />



Atendimento ao público: segunda a sexta de 9h as 17h</p>

</center>

</div>



</div>







</body>



</html>



