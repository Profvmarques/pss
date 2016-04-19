<?php

require_once('controles/candidatos.php');

Processo('consulta');

?>

<script>

function aparecerCampo(param){



  if(param=='mat'){

  

   document.getElementById('mat').style.display="block";

   document.getElementById('criterio').className ='input-medium';

   document.getElementById('criterio').title='O campo protocolo é obrigatório';

   document.getElementById('nom').style.display="none";

  

  }else if(param=='nom'){

   document.getElementById('nom').style.display="block";

   document.getElementById('criterio').className ='input-xxlarge';

   document.getElementById('criterio').title='O campo nome é obrigatório';

   document.getElementById('mat').style.display="none";

  }



}

</script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="../../js/Validacaoform.js"></script>



<form class="form-horizontal" id="form" name="form" method="post">

  <div class="container">

<div class="row-fluid">



<div class="cols-md-8">

<label class=" control-label" for="textinput" >ESCOLHA O TIPO DE CONSULTA</label>

</div><!--fim coluna -->

</div><!--fim linha -->



<div class="row-fluid">



<div class="cols-md-8">





<input type="radio" value="nome" name="tipo" onclick="aparecerCampo('nom');">

<label class=" control-label" for="textinput" >NOME</label>





<input type="radio" checked="" value="matricula" name="tipo" onclick="aparecerCampo('mat');"><label class=" control-label" for="textinput" >PROTOCOLO</label>

</div><!--fim coluna -->

</div><!--fim linha -->



<div class="row-fluid">

<div class="cols-md-8">



<label class=" control-label" for="textinput" >NOME/PROTOCOLO</label>

<input name="criterio" type="text" id="criterio" placeholder="" title="O campo protocolo é obrigatório" class="form-control" />  <button type="button"  onClick="validar(document.form);"> PESQUISAR</button>



</div><!--fim coluna -->

</div><!--fim linha -->

<input name="ok" type="hidden" id="ok"/>

<?php if($linha>0){?>

<div class="table-responsive">

<table class="table table-hover" id="table2">

  <thead>

    <tr class="info">

      <td><label class=" control-label" for="textinput" >Protocolo</label></td>

      <td><label class=" control-label" for="textinput" >Candidato</label></td>

      <td colspan="2" align="center"><label class=" control-label" for="textinput" >Ação</label></td>

    </tr>

  </thead>

  <tbody>

    <?php for($i=0;$i<$linha;$i++){?>

    <tr class="table-flag-blue">

      <td height="21"><?php echo "000".utf8_encode(mysql_result($rs,$i,'i.idinscricao'));?></td>

      <td><?php echo mysql_result($rs,$i,'c.nome');?></td>

      <td width="117" align="center"><a title="Visualizar" href="view/candidatos/ficha.php?id=<?php echo mysql_result($rs,$i,'i.idinscricao');?>" target="_blank"><i class="icon-eye-open"></i><img src="img/lista.png" width="24" height="24" /></a></td>

      <td width="117">&nbsp;</td>

    </tr>

    <?php }?>

  </tbody>

</table>

</div>



  <?php }elseif($_POST['ok']=="true" && $linha<=0){?>



<div class="alert alert-block">

  <button type="button" class="close" data-dismiss="alert">×</button>

  <h4>Mensagem!</h4>

  <p>Nenhum registro encontrado</p>

  

  

  

  

</div>

<?php }?>





</div> <!--fim container -->



</form>