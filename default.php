<?php @session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSS - FUNDEC</title>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script src="js/Validacaoform.js"></script>
<script src="js/formulario.js"></script>
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



