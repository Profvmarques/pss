<?php

require_once('controles/vagas.php');

Processo('atualizaVagasPorUnidadesIndividual');

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
         </script>
		<style type="text/css">
			.panel-default > .panel-heading-vermelho {
			 background: #A62A2A; color: #fff; }
			.panel-default > .panel-heading-azul{
			 background: #3366FF; color: #fff; }
			.panel-default > .panel-heading-magenta {
			 background: #FF00FF; color: #fff; }
			.panel-default > .panel-heading-amarelo {
			 background: #FFCC00; color: #fff; }
			.centered { margin: 0 auto !important;
    		float: none !important; }
			 
		.col-md-6 .row-fluid .panel.panel-primary .panel-body .container-fluid.centered .row-fluid.centered .centered .col-md-6 .table.table-responsive tr td {
	color: #FFF;
}
        .col-md-6 .row-fluid .panel.panel-primary .panel-body .container-fluid.centered .row-fluid.centered .centered .col-md-6 .table.table-responsive tr td2 {
	color: #004080;
}
        </style>


<script type="text/javascript">

$(function () {

	function removeCampo() {

		$(".removerCampo").unbind("click");

		$(".removerCampo").bind("click", function () {

			if($("tr.linhas").length > 1){

				$(this).parent().parent().remove();

			}

		});

	}

	//removeCampo();

	$(".adicionarCampo").click(function () {

		novoCampo = $("tr.linhas:first").clone();

		novoCampo.find("input").val("");

		novoCampo.insertAfter("tr.linhas:last");

		removeCampo();

	});

});

</script>


<center>									   
<h3>
  <legend>ATUALIZAÇÃO DO QUADRO DE VAGAS (SEGUNDA FASE)</legend></h3>

<div class="alert alert-danger" role="alert" align="center"><b>CASO HAJA ALGUM SEGMENTO ESCOLAR SEM OFERTA DE VAGAS, POR FAVOR PREENCHAR COM ZERO (0).</b></div>
</center>
<!-- formulário responsivo -->

<form class="form-horizontal" id="form" name="form" method="post"><!--fim container-->


<!-- fim formulário responsivo -->



  <br />

  
<div class="container">
  
  <table border="0" align="center" class="table table-hover table-responsive">
    <tr>
      <td bgcolor="#689FBD"><strong>EDUCAÇÃO INFANTIL</strong></td>
      <td bgcolor="#689FBD"><strong><font color="#FFF9F9">TOTAL DE VAGAS </font></strong></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">1 ANO</font></strong></td>
      <td width="233"><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,0,'totalvagas');?>" name="vagas1" id="vagas1">
        <input name="idsegmento_escolar1" type="hidden" id="idsegmento_escolar1"/></td>
    </tr>

    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">2 ANOS</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,1,'totalvagas');?>" name="vagas2" id="vagas2">
        <input name="idsegmento_escolar2" type="hidden" id="idsegmento_escolar2"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">3 ANOS</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,2,'totalvagas');?>" name="vagas3" id="vagas3">
        <input name="idsegmento_escolar3" type="hidden" id="idsegmento_escolar3"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">4 ANOS</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,3,'totalvagas');?>" name="vagas4" id="vagas4">
        <input name="idsegmento_escolar4" type="hidden" id="idsegmento_escolar4"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">5 ANOS</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,4,'totalvagas');?>" name="vagas5" id="vagas5">
        <input name="idsegmento_escolar5" type="hidden" id="idsegmento_escolar5"/></td>
    </tr>
    <tr>
      <td bgcolor="#689FBD"><strong>ENSINO FUNDAMENTAL</strong></td>
      <td bgcolor="#689FBD"><strong><font color="#FFF9F9">TOTAL DE VAGAS </font></strong></td>
      </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">1º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,5,'totalvagas');?>" name="vagas6" id="vagas6">
        <input name="idsegmento_escolar6" type="hidden" id="idsegmento_escolar6"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">2º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,6,'totalvagas');?>" name="vagas7" id="vagas7">
        <input name="idsegmento_escolar7" type="hidden" id="idsegmento_escolar7"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">3º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,7,'totalvagas');?>" name="vagas8" id="vagas8">
        <input name="idsegmento_escolar8" type="hidden" id="idsegmento_escolar8"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">4º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,8,'totalvagas');?>" name="vagas9" id="vagas9">
        <input name="idsegmento_escolar9" type="hidden" id="idsegmento_escolar9"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">5º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,9,'totalvagas');?>" name="vagas10" id="vagas10">
        <input name="idsegmento_escolar10" type="hidden" id="idsegmento_escolar10"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">6º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,10,'totalvagas');?>" name="vagas11" id="vagas11">
        <input name="idsegmento_escolar11" type="hidden" id="idsegmento_escolar11"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">7º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,11,'totalvagas');?>" name="vagas12" id="vagas12">
        <input name="idsegmento_escolar12" type="hidden" id="idsegmento_escolar12"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">8º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,12,'totalvagas');?>" name="vagas13" id="vagas13">
        <input name="idsegmento_escolar13" type="hidden" id="idsegmento_escolar13"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">9º ANO DE ESCOLARIDADE</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,13,'totalvagas');?>" name="vagas14" id="vagas14">
        <input name="idsegmento_escolar14" type="hidden" id="idsegmento_escolar14"/></td>
    </tr>
    <tr>
      <td bgcolor="#689FBD"><strong>EDUCAÇÃO DE JOVENS E ADULTOS</strong></td>
      <td bgcolor="#689FBD"><strong><font color="#FFF9F9">TOTAL DE VAGAS </font></strong></td>
      </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">ETAPA I</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,14,'totalvagas');?>" name="vagas15" id="vagas15">
        <input name="idsegmento_escolar15" type="hidden" id="idsegmento_escolar15" /></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">ETAPA II</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,15,'totalvagas');?>" name="vagas16" id="vagas16">
        <input name="idsegmento_escolar16" type="hidden" id="idsegmento_escolar16"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">ETAPA III</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,16,'totalvagas');?>" name="vagas17" id="vagas17">
        <input name="idsegmento_escolar17" type="hidden" id="idsegmento_escolar17"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">ETAPA IV</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,17,'totalvagas');?>" name="vagas18" id="vagas18">
        <input name="idsegmento_escolar18" type="hidden" id="idsegmento_escolar18"/></td>
    </tr>
    <tr>
      <td><strong><font color="#FFF9F9" style="color: #000000">ETAPA V</font></strong></td>
      <td><input type="text" title="Todas os campos de vagas devem ser informados" value="<?php echo mysql_result($rs,18,'totalvagas');?>" name="vagas19" id="vagas19">
        <input name="idsegmento_escolar19" type="hidden" id="idsegmento_escolar19"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#519DBD"><button type="button" class="btn btn-primary" onClick="validar(document.form);"> SALVAR</button>
        <input name="ok" type="hidden" id="ok"/></td>
    </tr>
 
  </table>
  <p align="center">&nbsp;</p>
</div> <!-- fim container -->
</form>

<script>

document.form.ideventos.value='<?php echo $_POST['ideventos'];?>';

document.form.idunidade_escolar.value='<?php echo $_POST['idunidade_escolar'];?>';

document.form.tipovaga.value='<?php echo $_POST['tipovaga'];?>';

document.form.idtipo_segmento.value=<?php echo $_POST['idtipo_segmento'];?>;

document.form.idturno.value='<?php echo $_POST['idturno'];?>';

document.form.acao.value='<?php echo $_POST['acao'];?>';

</script>

</body>
</html>