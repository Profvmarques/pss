<?php session_start();?>

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
<?php if ($_SESSION['idperfil']==1 ){?>
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

            <a href="default.php?pg=<?php echo base64_encode("view/publico/incluir.php");?>&form=<?php echo base64_encode("Painel");?>" class="navbar-brand">Principal</a>

        </div>

        <!-- Collection of nav links, forms, and other content for toggling -->

        <div id="navbarCollapse" class="collapse navbar-collapse">

            <ul class="nav navbar-nav">

                
            

                <li><a href="logoff.php">Sair</a></li>

            </ul>
      </div>

    </nav>

</div>

 

<?php }?>


  
<?php if($_SESSION['idperfil']==''){?>

</p>

  <div class="bs-example">

    <nav role="navigation" class="navbar navbar-default">

      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header">

        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>

        

      <a href="default.php?pg=<?php echo base64_encode("view/publico/incluir.php");?>&form=<?php echo base64_encode("Painel");?>" class="navbar-brand">Principal</a></div>

    

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
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="default.php?pg=dmlldy9wdWJsaWNvL2luY2x1aXJHZXN0YW8ucGhw&form=UGFpbmVs" class="navbar-brand">Principal</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                
                
                
            <li class="dropdown">
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">Cadastros <b class="caret"></b></a>
                    
               <ul role="menu" class="dropdown-menu">
                <li><a href="default.php?pg=dmlldy9jYXJnb3MvaW5jbHVpci5waHA=﻿﻿﻿&form=Q2FkYXN0cm8gZGUgQ2FyZ29z﻿﻿﻿">Cargos</a></li>
                <li><a href="default.php?pg=dmlldy9leHBlcmllbmNpYS9pbmNsdWlyLnBocA==&form=Q2FkYXN0cm8gZGUgRXhwZXJpw6puY2lh﻿﻿﻿">Experiencia</a></li>
                <li><a href="default.php?pg=dmlldy90aXR1bGFjYW8vaW5jbHVpci5waHA=&form=Q2FkYXN0cm8gZGUgVGl0dWxhw6fDo28=﻿﻿﻿">Titulação</a></li>
                <li><a href="default.php?pg=dmlldy91c3Vhcmlvcy9pbmNsdWlyLnBocA==&form=Q2FkYXN0cm8gZGUgVXN1YXJpb3M=">Usuários</a></li>                                                  
                                                          </ul>
                </li>
                
                
                
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Consulta<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                    <li><a href="default.php?pg=dmlldy92YWdhcy9pbmNsdWlyLnBocA==&amp;form=Q2FkYXN0cm8gZGUgVmFnYXM=">Cargos</a></li>
                <li><a href="default.php?pg=dmlldy92YWdhcy9pbmNsdWlyLnBocA==&amp;form=Q2FkYXN0cm8gZGUgVmFnYXM=">Experiencia</a></li>
                <li><a href="default.php?pg=dmlldy92YWdhcy9pbmNsdWlyLnBocA==&amp;form=Q2FkYXN0cm8gZGUgVmFnYXM=">Titulação</a></li>
                <li><a href="default.php?pg=dmlldy92YWdhcy9pbmNsdWlyLnBocA==&amp;form=Q2FkYXN0cm8gZGUgVmFnYXM=">Usuários</a></li>
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



</div>

</body>

