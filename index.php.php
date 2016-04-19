<?php
require("controles/index.php");
Processo('login');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- códigos para modal-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script>   
  $(document).ready(function() {
   $('#myModal').modal('show');
  });   
  </script>
  
   
  <style>
  .modal-header, h4, .close {
      background-color: #DDD;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #DDD;
  }  
  
  </style>
  
    <!-- FIM códigos para modal-->
    
    
    
    
    
    
    
    
    
    
    
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SGM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles antiga
        
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

        <!--page specific css styles-->

        <!--flaty css styles-
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">
        
        -->
        
        
        <!-- adriano e leandro -->
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
<script src="js/Validacaoform.js"></script>
        <script src="assets/modernizr/modernizr-2.6.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body,td,th {
	font-family: "Open Sans";
}
body {
	background-image: img/fundo_login.jpg;
	background-repeat: no-repeat;
}
    .style1 {font-size: 18px}
    </style>
    </head>
<body class="login-page">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<div class="cantainer-fluid">



        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <form id="form" name="form" action="" method="post">
            
            
            <div class="row-fluid">
<div class="col-md-6 col-md-offset-3">
                <center><img src="img/logo.png" class="img-responsive"></center>
                <hr/>
                </div></div>
               
                
                <div class="row-fluid">
<div class="col-md-6 col-md-offset-3">

<input type="text" name="login" id="login" class="form-control" title="O campo Login é obrigatório" placeholder="Informe seu Login ou CPF" autocomplete="off">
                </div></div>
                
                <div class="row-fluid">
<div class="col-md-6 col-md-offset-3">

                <input name="senha" type="password" class="form-control" id="senha" title="Informe sua senha" placeholder="Informe sua senha" autocomplete="off"/>
                </div></div>
            
                   <div class="row-fluid">
<div class="col-md-6 col-md-offset-3">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onClick="validar(document.form);">Entrar</button>
                  </div>
                </div>
                <hr/>
				<p class="clearfix"><span class="style1"><a href="cadastro.php?sgm=2" class="goto-forgot pull-left">Cadastre-se para obter acesso</a></span>                </p>
                <p class="clearfix"><span class="style1"><a href="esqueceusenha.php" class="goto-forgot pull-left">Perdeu a senha?</a> </span></p>
                
                <span class="style1">
                <input name="ok" type="hidden" id="ok"/>
              </span><span class="style1">              </span>                </span></span>
            </form>
            <!-- END Login Form -->

    
                <h3>&nbsp;</h3>
        </div>
        </div><!-- fim row e fim col--><!-- fim container -->
        <!-- END Main Content -->

        <!--basic scripts-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="assets/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript">
            function goToForm(form)
            {
                $('.login-wrapper > form:visible').fadeOut(500, function(){
                    $('#form-' + form).fadeIn(500);
                });
            }
            $(function() {
                $('.goto-login').click(function(){
                    goToForm('login');
                });
                $('.goto-forgot').click(function(){
                    goToForm('forgot');
                });
                $('.goto-register').click(function(){
                    goToForm('register');
                });
            });
        </script>
        
        <!-- Modal -->
<div class="container">
  

 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal conteúdo-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          
          <center><img src="img/logo.png"</center>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
		    
                    <h3 align="justify"> Clique no botão abaixo para realizar o cadastro da pré-matrícula. 
					<strong><br><br>Atenção:</strong> O cadastro não garante a vaga.</h3>
                    <br>
                    <br>
					
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">CADASTRAMENTO DE PRÉ-MATRÍCULA</button>
              
          </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div> 
</div>
  <!-- FIM Modal conteúdo-->
        
        
        
    </body>
</html>
