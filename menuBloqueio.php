<?php session_start();?>
<?php if ($_SESSION['idperfil']==1){?>
<ul class="nav nav-list">
                     
<li class="active">
        <a href="#" class="dropdown-toggle">
            <i class="icon-save"></i>
            <span>Cadastro</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
        <li><a href="default.php?pg=view/candidatos/incluir.php&form=Pr&eacute;-inscri&ccedil;&atilde;o de Candidato">Pr&eacute;-inscri&ccedil;&atilde;o</a></li>
        <li><a href="default.php?pg=view/eventos/incluir.php&form=Cadastro dos Eventos">Eventos</a></li>
        <li><a href="default.php?pg=view/segmento_escolar/incluir.php&form=Cadastro de Segmento Escolar">Segmento Escolar</a></li>
        <li><a href="default.php?pg=view/unidade_escolar/incluir.php&form=Cadastro da Unidade Escolar">Unidade Escolar</a></li>
        <li><a href="default.php?pg=view/usuarios/incluir.php&form=Cadastro de Usu&aacute;rio">Usu&aacute;rios</a></li>
		<li><a href="default.php?pg=view/vagas/incluir.php&form=Cadastro de Vagas">Vagas</a></li>
   </ul>
    <!-- END Submenu -->
</li>

<li class="">
        <a href="#" class="dropdown-toggle">
            <i class="icon-edit"></i>
            <span>Consulta</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
        <li><a href="default.php?pg=view/candidatos/consulta.php&form=Consulta de Pr&eacute;-inscri&ccedil;&atilde;o de Candidatos">Pr&eacute;-inscri&ccedil;&atilde;o</a></li>
        <li><a href="default.php?pg=view/distritos/consulta.php&form=Consulta do Distrito">Distrito</a></li>
        <li><a href="default.php?pg=view/eventos/consulta.php&form=Consulta dos Eventos">Eventos</a></li>
        <li><a href="default.php?pg=view/segmento_escolar/consulta.php&form=Consulta de Segmento Escolar">Segmento Escolar</a></li>
        <li><a href="default.php?pg=view/unidade_escolar/consulta.php&form=Consulta da Unidade Escolar">Unidade Escolar</a></li>
        <li><a href="default.php?pg=view/usuarios/consulta.php&form=Consulta de Usu&aacute;rio">Usu&aacute;rios</a></li>
   </ul>
    <!-- END Submenu -->
</li>
<li class="">   

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
<li class="">
        <a href="#" class="dropdown-toggle">
            <i class="icon-file"></i>
            <span>Relat&oacute;rio</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
     <li><a href="view/relatorios/relinscricaoIndevida.php" target="_blank">Cadastro Indevidos</a></li>  
    <li><a href="view/relatorios/relduplicacao.php" target="_blank">Lista de duplicata</a></li>		
		<li><a href="default.php?pg=view/relatorios/consultaQuantitativoCandidatosCreche.php&form=Relat&oacute;rio dos Candidatos">Por creche</a></li> 
		<li><a href="view/relatorios/QuantitativoCandidatoDistrito.php" target="_blank">Por distrito</a></li> 
		<li><a href="view/relatorios/QuantitativoCandidatoSegmentoEscolar.php" target="_blank">Por Segmento Escolar</a></li> 
		<li><a href="view/relatorios/QuantitativoCandidatoUnidadeEscolar.php" target="_blank">Por Unidade Escolar</a></li>   
		<li><a href="default.php?pg=view/relatorios/consultaQuantitativoCandidatosSorteio.php&form=Relat&oacute;rio dos Candidatos">Completa por creche</a></li>   
   </ul>
    <!-- END Submenu -->
</li>

</ul>
<?php }?>

<?php 
if ($_SESSION['idperfil']==2){
?>
<ul class="nav nav-list">
                     
<li class="active">
        <a href="#" class="dropdown-toggle">
            <i class="icon-save"></i>
            <span>Cadastro</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
	<?php //if($_SESSION['idunidade_escolar']==40 || $_SESSION['idunidade_escolar']==92 || $_SESSION['idunidade_escolar']==143 || $_SESSION['idunidade_escolar']==41 || $_SESSION['idunidade_escolar']==36 || $_SESSION['idunidade_escolar']==54 || $_SESSION['idunidade_escolar']==41){
	if($_SESSION['idunidade_escolar']==143 || $_SESSION['idunidade_escolar']==88 || $_SESSION['idunidade_escolar']==119 || $_SESSION['idunidade_escolar']==40){
	?>
	 <li><a href="default.php?pg=view/candidatos/incluirOld.php&form=Pr&eacute;-inscri&ccedil;&atilde;o de Candidato">Pr&eacute;-inscri&ccedil;&atilde;o</a></li>
	<?php }else{?>
        <li><a href="default.php?pg=view/candidatos/teste.php&form=Pr&eacute;-inscri&ccedil;&atilde;o de Candidato">Pr&eacute;-inscri&ccedil;&atilde;o</a></li>
    <?php } ?>   
   </ul>
    <!-- END Submenu -->
</li>

<li class="">
        <a href="#" class="dropdown-toggle">
            <i class="icon-edit"></i>
            <span>Consulta</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
        <li><a href="default.php?pg=view/candidatos/consulta.php&form=Consulta de Candidatos">Pr&eacute;-inscri&ccedil;&atilde;o</a></li>
     
   </ul>
    <!-- END Submenu -->
</li>

<li class="">
        <a href="#" class="dropdown-toggle">
            <i class="icon-file"></i>
            <span>Relat&oacute;rio</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
        <li><a href="default.php?pg=view/relatorios/consultaQuantitativoCandidatos.php&form=Relat&oacute;rio dos Candidatos">Candidato</a></li> 
        <li><a href="default.php?pg=view/relatorios/rel.php&form=Relat&oacute;rio das Matr&iacute;culas">Matr&iacute;culas</a></li> 
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



   <?php if ($_SESSION['idperfil']==5){?>
<ul class="nav nav-list">
                     
<li class="active">   
        <a href="#" class="dropdown-toggle">
            <i class="icon-file"></i>
            <span>Relat&oacute;rio</span>
            <b class="arrow icon-angle-right"></b>
        </a>
<!-- BEGIN Submenu -->
    <ul class="submenu">
      
         <li><a href="view/relatorios/relinscricaoIndevida.php" target="_blank">Cadastro Indevidos</a></li>  
    <li><a href="view/relatorios/relduplicacao.php" target="_blank">Lista de duplicata</a></li>		
		<li><a href="default.php?pg=view/relatorios/consultaQuantitativoCandidatosCreche.php&form=Relat&oacute;rio dos Candidatos">Por creche</a></li> 
		<li><a href="view/relatorios/QuantitativoCandidatoDistrito.php" target="_blank">Por distrito</a></li> 
		<li><a href="view/relatorios/QuantitativoCandidatoSegmentoEscolar.php" target="_blank">Por Segmento Escolar</a></li> 
		<li><a href="view/relatorios/QuantitativoCandidatoUnidadeEscolar.php" target="_blank">Por Unidade Escolar</a></li>   
		<li><a href="default.php?pg=view/relatorios/consultaQuantitativoCandidatosSorteio.php&form=Relat&oacute;rio dos Candidatos">Completa por creche</a></li>   
   </ul>
    <!-- END Submenu -->
</li>


</ul>

<?php }?>   
