<?php @session_start();?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>PSS - FUNDEC</title>



<!--

<link type="text/css" href="css/styles.css" rel="stylesheet" />



-->



<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>



<script src="js/Validacaoform.js"></script>



<script src="js/formulario.js"></script>







<!--base css styles-



        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">



        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">



        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">



        <link rel="stylesheet" href="assets/normalize/normalize.css">







        <!--page specific css styles-->







        <!--flaty css styles



        <link rel="stylesheet" href="css/flaty.css">



        <link rel="stylesheet" href="css/flaty-responsive.css">







		<link rel="stylesheet" href="css/design.css">

      

        

<script src="js/superfish.js" type="text/javascript"></script>

<script src='js/cufon-yui.js' type='text/javascript'></script>

<script type="text/javascript">



 

		jQuery(function(){

			// main navigation init

			jQuery('ul.sf-menu').superfish({

				delay:       1000, 		// one second delay on mouseout 

				animation:   {opacity:'false',height:'show'}, // fade-in and slide-down animation 

				speed:       'slow',  // faster animation speed 

				autoArrows:  false,        // generation of arrow mark-up (for submenu) 

				dropShadows: false,    // drop shadows (for submenu)

				onHide		: function(){Cufon.refresh('.sf-menu > li > a')}

			}).children('li').each(function(i){jQuery(this).addClass("top_item_"+(i+=1));});

			});

	</script>

    

    -->





<!---->

<link rel="stylesheet" href="js/jquery.fancybox-1.3.1.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<link rel="stylesheet" href="js/grid.css" type="text/css" media="screen">



<script src="js/jquery.fancybox-1.3.1.pack.js" type="text/javascript" charset="utf-8"></script>

<script src="js/jquery.easing-1.3.pack.js" type="text/javascript" charset="utf-8"></script>

<script src="js/jquery.pngFix.pack.js" type="text/javascript" charset="utf-8"></script>



<script type="text/javascript" charset="utf-8">

    $(document).ready(function() {

        $(document).pngFix();

        $("a.fancy_img").fancybox({

            'titlePosition': 'inside',

            'transitionIn': 'elastic',

            'transitionOut': 'elastic'

        });

    });

</script>













<!-- REFERÊNCIAS BOOTSTRAP -->



<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Optional theme -->

		<link rel="stylesheet" href="css/bootstrap-theme.min.css">



		<!-- Latest compiled and minified JavaScript -->		

		<script src="js/bootstrap.min.js"></script>

				

		<!-- datetimepicker -->

		

		<script type="text/javascript">

		      $('#sandbox-container input').datepicker({

              });

		</script>

		



<!-- FIM REFERÊNCIAS BOOTSTRAP-->



</head>



	<IFRAME id=gToday:normal:agenda.js:ctyPopCalendario 



style="Z-INDEX: 999; LEFT: -800px; VISIBILITY: visible; POSITION: absolute; TOP: 0px" 



name=gToday:normal:agenda.js:ctyPopCalendario 



src="mostra.htm" frameBorder=0 width=174 scrolling=no 



height=189></IFRAME>



<body>





<div class="container-fluid">

<div id="topo">

	</br></br>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/logo.png" /> </div>

    

    </div>



<?php include "menu.php" ; ?>



<div class="container-fluid">



<div class="row-fluid">

<div class="col-md-12" align="right">

&nbsp;

<?php 

if($_SESSION['idperfil']<>""){

echo"Bem vindo, voc&ecirc; est&aacute; conectado como : <b>".$_SESSION['cpf']."</b>";

}

?>

</div></div></div>



<div id="container">







<!-- GET FORM FICAVA AQUI -->







<?php include "includes/incluir_pag.php" ; ?>

</div>

</div>

</div>



<div class="container-fluid">

<div class="row-fluid">

<hr />

<div class="col-md-10 col-md-offset-1">

<center>

<p>FUNDEC - Fundação de Apoio à Escola Técnica, Ciência, Tecnologia, Esporte, Lazer, Cultura e Políticas Sociais de Duque de Caxias - RJ<br />



Av. Brigadeiro Lima e Silva, 131 - Parque Duque - Duque de Caxias CEP 25085-131 - Tel.:21-2672-5650.<br />



2016-TODOS OS DIREITOS RESERVADOS<br />



Atendimento ao público: segunda a sexta de 9h as 17h</p>

</center>

</div>

</body>

</html>



