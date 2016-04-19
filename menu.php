<?php session_start();?>
<?php if ($_SESSION['idperfil']==1 ){?>

<!-- menu responsivo -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
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
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/editar.php");?>&form=<?php echo base64_encode("Consulta de Vagas");?>">Vagas</a></li>
                        
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/atualizarVagas.php");?>&form=<?php echo base64_encode("Atualizar Quadro de Vagas");?>">Atualizar quadro de vagas</a></li>
                        
                        <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/atualizarClassificacao.php");?>&form=<?php echo base64_encode("Atualizar Classificação");?>">Atualizar classifica&ccedil;&atilde;o</a></li>
                        
                      
                        
                        
                        
                        
                        
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
  
 
<?php }?>



<?php if($_SESSION['idperfil']==5){?>
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
            <a href="default.php?pg=<?php echo base64_encode("view/publico/incluir_adm.php");?>&form=<?php echo base64_encode("Painel");?>" class="navbar-brand">Principal</a>
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
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/editar.php");?>&form=<?php echo base64_encode("Consulta de Vagas");?>">Vagas</a></li>
                        
                        <li><a href="default.php?pg=<?php echo base64_encode("view/vagas/atualizarVagas.php");?>&form=<?php echo base64_encode("Atualizar Quadro de Vagas");?>">Atualizar quadro de vagas</a></li>
                        
                        <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/atualizarClassificacao.php");?>&form=<?php echo base64_encode("Atualizar Classificação");?>">Atualizar classifica&ccedil;&atilde;o</a></li>
                        
                      
                        
                        
                        
                        
                        
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
  
 
<?php }?>

















<?php if($_SESSION['idperfil']==7){?>
 
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
          <a href="default.php?pg=<?php echo base64_encode("view/publico/incluir.php");?>&form=<?php echo base64_encode("Painel");?>"  class="navbar-brand">Principal</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                
                
                
                
                
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
  <p>
    <?php }?>
    
    
    
    
  <!-- fim menu responsivo -->
  
    <?php if($_SESSION['idperfil']==8){?>
  </p>
  <div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        
      <a href="default.php?pg=<?php echo base64_encode("view/publico/incluirDiretores.php");?>&form=<?php echo base64_encode("Painel");?>" class="navbar-brand">Principal</a> </div>
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse2" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
           <li><a href="default.php?pg=<?php echo base64_encode("view/publico/consulta2.php");?>&form=<?php echo base64_encode("Painel");?>"  >Consulta</a></li>
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
  <p>
    <?php }?>
<?php if($_SESSION['idperfil']==''){?>
</p>
  <div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
        
      <a href="default.php?pg=<?php echo base64_encode("view/publico/incluir.php");?>&form=<?php echo base64_encode("Painel");?>" class="navbar-brand">Principal</a></div>
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse3" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          
          <li><a href="javascript:history.back()">Voltar</a></li>
        </ul>
        <!-- LOGIN 
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
            <!-- FIM LOGIN-->
      </div>
    </nav>
  </div>
  
  <p>
  <?php }?>
    
    
  <?php 
if ($_SESSION['idperfil']==2){
?>
  </p>
  <div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="default.php?pg=<?php echo base64_encode("view/publico/incluir_unidade_escolar.php");?>&form=<?php echo base64_encode("Painel");?>" class="navbar-brand">Principal</a> </div>
      
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse4" class="collapse navbar-collapse">
        <!-- <ul class="nav navbar-nav">
          <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><b class="caret"></b></a>-->
            
            <ul role="menu" class="dropdown-menu">
            
            <?php 
if ($_SESSION['idunidade_escolar']==137 || $_SESSION['idunidade_escolar']==100 || $_SESSION['idunidade_escolar']==23 || $_SESSION['idunidade_escolar']==28 || $_SESSION['idunidade_escolar']==135 || $_SESSION['idunidade_escolar']==140){
?>
            
              <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir.php")?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>">Inscri&ccedil;&otilde;es Atrasadas</a></li>
              
              	<?php } ?>
            </ul>
            
            <ul role="menu" class="dropdown-menu">
              <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>">Pr&eacute; - Inscri&ccedil;&atilde;o</a></li>
            </ul>
            
             <ul role="menu" class="dropdown-menu">
              <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/teste.php");?>&form=<?php echo base64_encode("Transfer&ecirc;ncia de Aluno");?>&ti=<?php echo base64_encode("2");?>">Transfer&ecirc;ncia</a></li>
            </ul>
            
          </li>
         <!-- <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Consulta<b class="caret"></b></a>
         -->
            <ul role="menu" class="dropdown-menu">
            
              <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta.php")?>&amp;form=<?php echo base64_encode("Consulta de Pr&eacute;-inscri&ccedil;&atilde;o/Transfer&ecirc;ncia");?>">Pr&eacute;-inscri&ccedil;&atilde;o/Transfer&ecirc;ncia</a><a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta.php");?>&form=<?php echo base64_encode("Consulta de Candidatos");?>"></a></li>          
       
          
        </ul>
        
        <ul class="nav navbar-nav">
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
  <p>
    <?php }?>

<?php if ($_SESSION['idperfil']==3){?>
</p>
  <div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
        
      <a href="#" class="navbar-brand">Principal</a></div>
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse5" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          
          <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Emiss&atilde;o <b class="caret"></b></a>
            <ul role="menu" class="dropdown-menu">
              
              <li><a href="default.php?pg=view/relatorios/rel.php&form=Relat&oacute;rio dos Candidatos">Mala Direta</a></li>
           
            </ul>
            <ul role="menu" class="dropdown-menu">
              <li><a href="default.php?pg=view/relatorios/rel.php&form=Relat&oacute;rio das Matr&iacute;culas">Correspond&ecirc;ncia</a></li>
            </ul>
            
            
          </li>
          <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Consulta<b class="caret"></b></a>
            <ul role="menu" class="dropdown-menu">
              <li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta.php")?>&amp;form=<?php echo base64_encode("Consulta de Pr&eacute;-inscri&ccedil;&atilde;o/Transfer&ecirc;ncia");?>">Pr&eacute;-inscri&ccedil;&atilde;o/Transfer&ecirc;ncia</a><a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta.php");?>&form=<?php echo base64_encode("Consulta de Candidatos");?>"></a></li>
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

<?php }?>

<?php if ($_SESSION['idperfil']==4){?>


<?php }?>

</div>
</body>
