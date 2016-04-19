<?php session_start();?>
<?php if ($_SESSION['idperfil']==1 || $_SESSION['idperfil']==5 ){?>
<div class="botao">

    <ul class="sf-menu">

         <li><a class="active" href="default.php?pg=<?php echo base64_encode("view/publico/incluir3.php");?>&form=<?php echo base64_encode("Painel");?>"  >Principal</a></li>        

        <li><a href="nome.php">Cadastro</a>
        	<ul class="sub-menu"> 
            	<li><a href="default.php?pg=<?php echo base64_encode("view/vagas/incluir.php");?>&form=<?php echo base64_encode("Cadastro de Vagas");?>">Vagas</a></li>
            </ul>
        
        </li>

          <li><a href="nome.php">Consulta</a>
        	<ul class="sub-menu"> 
            	<li><a href="default.php?pg=<?php echo base64_encode("view/vagas/editar.php");?>&form=<?php echo base64_encode("Consulta de Vagas");?>">Vagas</a></li>
				<li><a href="default.php?pg=<?php echo base64_encode("view/vagas/atualizarVagas.php");?>&form=<?php echo base64_encode("Atualizar Quadro de Vagas");?>">Atualiza Quadro de Vagas</a></li>
				<li><a href="default.php?pg=<?php echo base64_encode("view/candidatos/atualizarClassificacao.php");?>&form=<?php echo base64_encode("Atualizar Classificação");?>">Atualiza Classificação</a></li>
            </ul>
        
        </li>
  <li><a href="logoff.php">Sair</a>  </li>
       
    </ul>
</div>
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


