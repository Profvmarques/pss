<?php

require_once('controles/vagas.php');

Processo('editar');

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
<h3><legend>CONSULTAR / EDITAR</legend></h3>
<hr width="90%">
</center>
<!-- formulário responsivo -->

<form class="form-horizontal" id="form" name="form" method="post">

<div class="container">
<div class="row-fluid">
  <div class="col-md-4">
      
     <div class="form-group">
  <label for="sel1">EVENTO:</label>
  
  
  <select class="form-control"  
  name="ideventos" id="ideventos" title="O campo evento &eacute; obrigat&oacute;rio"
  >
    
<option value="">Escolha o Evento</option>

          <?php for($i=0;$i<$linha;$i++){?>

          <option value="<?php echo mysql_result($rs,$i,'ideventos');?>"><?php echo mysql_result($rs,$i,'descricao');?></option>

          <?php }?>    
    
  </select> 
</div>
    
    
  </div>  



  <div class="col-md-8">
  
  <div class="form-group">
    <label for="ue">UNIDADE ESCOLAR:</label>

  <select class="form-control"  
  name="idunidade_escolar" id="idunidade_escolar" title="O campo evento &eacute; obrigat&oacute;rio">
   
   <option value="">Escolha a Unidade Escolar</option>
   <?php for($i=0;$i<$linha2;$i++){ ?>

          <option value="<?php echo mysql_result($rs2,$i,'ue.idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'ue.descricao'));?></option>

          <?php } ?>
   
  </select>
</div>
  </div>  
  </div> 



<div class="row-fluid">
  <div class="col-md-4">
  
  <div class="form-group">
    <label for="tipo_inscricao">TIPO DE INSCRI&Ccedil;&Atilde;O:</label>
   
  <select class="form-control"  
  name="tipovaga" id="tipovaga" title="O campo Tipo de inscri&ccedil;&atilde;o &eacute; obrigat&oacute;rio" >
  
    <option value="INSCRICAO">INSCRI&Ccedil;&Atilde;O</option>

          <option value="INSCRICAO_CCAIC">INSCRI&Ccedil;&Atilde;O CCAIC</option>

          <option value="INSCRICAO_CAMPO">INSCRI&Ccedil;&Atilde;O CAMPO</option>

          <option value="INSCRICAO_FASE1">INSCRI&Ccedil;&Atilde;O FASE1</option>

          <option value="INSCRICAO_FASE2">INSCRI&Ccedil;&Atilde;O FASE2</option>
          <option value="INSCRICAO_FASE3">INSCRIÇÃO FASE3</option>

          <option value="TRANSFERENCIA">TRANSFER&Ecirc;NCIA</option>

	  <option value="TRANSFERENCIA_INTERNA">TRANSFER&Ecirc;NCIA INTERNA</option>
	  <option value="TRANSFERENCIA_EXTERNA">TRANSFERÊNCIA EXTERNA</option>
	  <option value="TRANSFERENCIA_SEGUNDA_FASE">TRANSFERÊNCIA SEGUNDA FASE</option>
      
  </select>
</div>
    
  </div> 
  
  
  <div class="col-md-4">
  
  <div class="form-group">
    <p>
      <label for="segmento">SEGMENTO:</label>
    
  <select class="form-control"  
  tabindex="1" id="idtipo_segmento" name="idtipo_segmento" title="O campo Tipo segmento &eacute; obrigat&oacute;rio">
   
   <option value="">Escolha o tipo de segmento</option>

  <?php for($i=0;$i<$linha4;$i++){?>

  <option value="<?php echo mysql_result($rs4,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>

  <?php }?>   
   
  </select>
</div>
    
  </div> 
  
 
  <div class="col-md-4">
  
  <div class="form-group">
    <label for="turno">TURNO:</label>
    
  <select class="form-control"  
 id="idturno" name="idturno" title="O campo Turno &eacute; obrigat&oacute;rio">
    
    <option value="1">MANHÃ</option>

    <option value="2">VESPERTINO</option>

     <option value="3">NOTURNO</option>

    
  </select>
</div>
    
  </div> 
  
  </div>
  <DIV class="row">
  <div class="col-md-12">
  
  <center>
  <input name="acao" type="hidden" id="acao"/>
  
  <button type="button" class="btn btn-primary" onclick="validar2(document.form);"> </i> PESQUISAR</button></center>
  
  </div>
  </DIV>

</div> <!--fim container-->
<hr width="90%">

<!-- fim formulário responsivo -->



<!-- formulario antigo

<form class="form-horizontal" id="form" name="form" method="post">

  <p>&nbsp;</p>

  <p>&nbsp;</p>

  <table width="1010" border="0" align="center">

    <tr>

      <td class="control-group"><strong>EVENTO </strong>

        <select name="ideventos" class="input-xlarge" id="ideventos" title="O campo evento é obrigatório">

          <option value="">Escolha o Evento</option>

          <?php for($i=0;$i<$linha;$i++){?>

          <option value="<?php echo mysql_result($rs,$i,'ideventos');?>"><?php echo mysql_result($rs,$i,'descricao');?></option>

          <?php }?>

        </select> 

        <strong>UNIDADE ESCOLAR</strong> <span style="margin-left:auto">

        <select name="idunidade_escolar" class="input-xlarge" id="idunidade_escolar" title="O campo unidade escolar é obrigatório">

          <?php for($i=0;$i<$linha2;$i++){ ?>

          <option value="<?php echo mysql_result($rs2,$i,'ue.idunidade_escolar');?>"><?php echo utf8_encode(mysql_result($rs2,$i,'ue.descricao'));?></option>

          <?php } ?>

        </select>

        </span>      </td>

    </tr>

    <tr>

      <td class="control-group"><span style="margin-left:auto"><strong>TIPO DE INSCRIÇÃO</strong> &nbsp;

        <select name="tipovaga" class="input-medium" id="tipovaga" title="O campo Segmento Escolar é obrigatório">

          <option value="INSCRICAO">INSCRIÇÃO</option>

          <option value="INSCRICAO_CCAIC">INSCRIÇÃO CCAIC</option>

          <option value="INSCRICAO_CAMPO">INSCRIÇÃO CAMPO</option>

          <option value="INSCRICAO_FASE1">INSCRICÃO FASE1</option>

          <option value="TRANSFERENCIA">TRANSFERÊNCIA</option>

	  <option value="TRANSFERENCIA_INTERNA">TRANSFERÊNCIA INTERNA</option>
	  <option value="TRANSFERENCIA_EXTERNA" selected="SELECTED">TRANSFERÊNCIA EXTERNA</option>
        </select>

        &nbsp;<strong>SEGMENTO</strong> &nbsp;

<select name="idtipo_segmento" class="input-xlarge" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar é obrigatório" >

  <option value="">Escolha o tipo de segmento</option>

  <?php for($i=0;$i<$linha4;$i++){?>

  <option value="<?php echo mysql_result($rs4,$i,'idtipo_segmento');?>"><?php echo utf8_encode(mysql_result($rs4,$i,'descricao'));?></option>

  <?php }?>

</select>

      <strong>TURNO</strong> 

      <select name="idturno" class="input-medium" id="idturno" title="O campo Segmento Escolar é obrigatório">

        <option value="1">MANHÃ</option>

        <option value="2">VESPERTINO</option>

        <option value="3">NOTURNO</option>

      </select>

      </span></td>

    </tr>

    <tr>

      <td class="control-group"><input name="acao" type="hidden" id="acao"/></td>

    </tr>

    <tr>

      <td class="control-group"><center><button type="button" class="btn btn-primary" onclick="validar2(document.form);"> </i> PESQUISAR</button></center></td>

    </tr>

  </table> -->

  <br />

  <?php  if($_POST['acao'] == 'true') {

          if($linha3 > 0) {

    ?>
<div class="container">
  <table class="table table-hover table-responsive" align="center">

    <tr>

      <td colspan="2" bgcolor="#0F6DA2"><div align="center"><strong><font color="#FFF9F9"><?php echo utf8_encode(mysql_result($rs3,0,'ue.descricao'));?></font></strong></div></td>

    </tr>

    <tr>

      <td colspan="2" bgcolor="#519DBD"><div align="center"><strong><font color="#FFF9F9"><?php echo utf8_encode(mysql_result($rs3,0,'ts.descricao'))." - ".utf8_encode(mysql_result($rs3,0,'t.descricao'));?> </font></strong></div></td>

    </tr>

    <tr>

      <td width="435" bgcolor="#689FBD"><strong><font color="#FFF9F9">ANO ESCOLAR </font></strong></td>

      <td width="233" bgcolor="#689FBD"><strong><font color="#FFF9F9">TOTAL DE VAGAS </font></strong></td>

    </tr>

	<?php for($i=0;$i<$linha3;$i++){?>

    <tr>

      <td><?php echo mysql_result($rs3,$i,'se.descricao');?></td>

      <td><label>

        <input name="totalvagas<?php echo $i;?>" type="text" class="input-mini" id="totalvagas<?php echo $i;?>" value="<?php echo mysql_result($rs3,$i,'v.totalvagas');?>"/>

        <input name="idsegmento_escolar<?php echo $i;?>" type="hidden" id="idsegmento_escolar<?php echo $i;?>" value="<?php echo mysql_result($rs3,$i,'v.idsegmento_escolar');?>"/>

      </label></td>

    </tr>

	 <?php  }?>

  </table>

  <?php  }else{?>

     <div class="alert alert-danger" role="alert" align="center">
     Não há vagas lançadas para a unidade, segmento escolar e truno escolhido!
     </div>

  <?php  }?>

  <p align="center">

    <button type="button" class="btn btn-primary" onclick="validar(document.form);"> </i> ATUALIZAR</button>

    

    <input name="ok" type="hidden" id="ok"/>

    <?php  }?>

  </p>
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

