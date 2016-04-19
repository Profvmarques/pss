<?php session_start();?>
<?php if ($_SESSION['idperfil']==1 || $_SESSION['idperfil']==5 ){?>

<!-- menu responsivo -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://www.w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-dropdown.js"></script>

<script type="text/javascript" src="http://www.w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-collapse.js"></script>

<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head> 
<body>
<div class="container-fluid">
<div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="default.php?pg=<?php echo base64_encode("view/publico/incluir3.php");?>&form=<?php echo base64_encode("Painel");?>" class="navbar-brand">Principal</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                
                
                
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Cadastros <b class="caret"></b></a>
                    
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/incluir.php");?>&form=<?php echo base64_encode("Cadastro de Vagas");?>">Vagas</a></li>                                          </ul>
                </li>
                
                
                
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Consulta<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/incluir.php");?>&form=<?php echo base64_encode("Cadastro de Vagas");?>">Vagas</a></li>
                        
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/atualizarVagas.php");?>&form=<?php echo base64_encode("Atualizar Quadro de Vagas");?>">Atualizar quadro de vagas</a></li>
                        
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/atualizarVagas.php");?>&form=<?php echo base64_encode("Atualizar Quadro de Vagas");?>">Atualizar classifica&ccedil;&atilde;o</a></li>
                        
                      
                        
                        
                        
                        
                        
                    </ul>
                </li>
                
                <li><a href="logoff.php">Sair</a></li>
            </ul>
            
            <!-- LOGIN 
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
            <!-- FIM LOGIN-->
            
      </div>
    </nav>
</div>


  <!-- fim menu responsivo -->
  
  
</p>
<?php }?>

<?php if($_SESSION['idperfil']==7){?>
<div class="botao">

    <ul>

        <li><a class="active" href="default.php?pg=<?php echo base64_encode("view/publico/incluir.php");?>&form=<?php echo base64_encode("Painel");?>"  >Principal</a></li>
		    <li><a href="logoff.php">Sair</a></li>
       
       
    </ul>
</div>
<?php }?>
<?php if($_SESSION['idperfil']==8){?>
<div class="botao">

    <ul>

        <li><a class="active" href="default.php?pg=<?php echo base64_encode("view/publico/incluirDiretores.php");?>&form=<?php echo base64_encode("Painel");?>"  >Principal</a></li>
		 <li><a href="default.php?pg=<?php echo base64_encode("view/publico/consulta2.php");?>&form=<?php echo base64_encode("Painel");?>"  >Consulta</a></li>
		    <li><a href="logoff.php">Sair</a></li>
       
       
    </ul>
</div>
<?php }?>
<?php if($_SESSION['idperfil']==''){?>
<div class="botao">

    <ul>

        <li><a class="active" href="default.php?pg=<?php echo base64_encode("view/publico/incluir.php");?>&form=<?php echo base64_encode("Painel");?>"  >Principal</a></li>
		    <li><a href="javascript:history.back()">Voltar</a></li>
       
       
    </ul>
</div>
<?php }?>


<?php 
if ($_SESSION['idperfil']==2){
?>
<ul class="nav nav-list">
                     
<li class="active">
        <a href="#" class="dropdown-toggle">
            <i class="icon-save"></i>
            <span>Cadastro</span>
            <b class="arrow icon-angle-right"></b>        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
	<?php 
if ($_SESSION['idunidade_escolar']==137 || $_SESSION['idunidade_escolar']==100 || $_SESSION['idunidade_escolar']==23 || $_SESSION['idunidade_escolar']==28 || $_SESSION['idunidade_escolar']==135 || $_SESSION['idunidade_escolar']==140){
?>

	 <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir.php")?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>">Inscri&ccedil;&atilde;o Atrasadas</a></li>
	 	<?php } ?>
	
	   <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>">Pr&eacute;-inscri&ccedil;&atilde;o</a></li>
	   <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&form=<?php echo base64_encode("Transfer&ecirc;ncia de Aluno");?>&ti=<?php echo base64_encode("2");?>">Transfer&ecirc;ncia</a></li>
   </ul>
    <!-- END Submenu -->
</li>

<li class="">
        <a href="#" class="dropdown-toggle">
            <i class="icon-edit"></i>
            <span>Consulta</span>
            <b class="arrow icon-angle-right"></b>        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
        <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta.php")?>&amp;form=<?php echo base64_encode("Consulta de Pr&eacute;-inscri&ccedil;&atilde;o/Transfer&ecirc;ncia");?>">Pr&eacute;-inscri&ccedil;&atilde;o/Transfer&ecirc;ncia</a><a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta.php");?>&form=<?php echo base64_encode("Consulta de Candidatos");?>"></a></li>
   </ul>
    <!-- END Submenu -->
</li>
</ul>


<?php }?>

<?php if ($_SESSION['idperfil']==3){?>
<ul class="nav nav-list">
                     
<li class="active">   

        <a href="#" class="dropdown-toggle">
            <i class="icon-file"></i>
            <span>Emiss&atilde;o</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
        <li><a href="default.php?pg=view/relatorios/rel.php&form=Relat&oacute;rio dos Candidatos">Mala Direta</a></li> 
        <li><a href="default.php?pg=view/relatorios/rel.php&form=Relat&oacute;rio das Matr&iacute;culas">Correspond&ecirc;ncia</a></li> 
   </ul>
    <!-- END Submenu -->
</li>

</ul>

<?php }?>

<?php if ($_SESSION['idperfil']==4){?>


<?php }?>

</div>
</body>
