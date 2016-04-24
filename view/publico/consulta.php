<?php
require_once('controles/publico.php');
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
   document.getElementById('criterio').className ='input-medium';
   document.getElementById('criterio').title='O campo CPF é obrigatório';
   document.getElementById('mat').style.display="none";
  }

}
</script>
<form class="form-horizontal" id="form2" name="form" method="post">
  <div class="container">
    <div class="row-fluid">
      <div class="cols-md-8">
        <label class=" control-label" for="textinput" >ESCOLA O TIPO DE CONSULTA</label>
      </div>
      <!--fim coluna -->
    </div>
    <!--fim linha -->
    <div class="row-fluid">
      <div class="cols-md-8"><span class="radio inline">
        <input type="radio" value="nome" name="tipo" onclick="aparecerCampo('nom');" />
      </span>
        <label class=" control-label" for="textinput" >NOME</label>
        <span class="radio inline">
        <input type="radio" checked="checked" value="matricula" name="tipo" onclick="aparecerCampo('mat');" />
        </span>
        <label class=" control-label" for="textinput" >PROTOCOLO</label>
      </div>
      <!--fim coluna -->
    </div>
    <!--fim linha -->
    <div class="row-fluid">
      <div class="cols-md-8">
        <label class=" control-label" for="textinput" >PROTOCOLO</label>
        <span style="margin-left:45px; visibility:visible;">
        
        <input name="criterio" type="text" id="criterio" placeholder="" title="O campo protocolo é obrigatório" />  <button type="button" onClick="validar(document.form);" onkeypress="validar(document.form);"> <i class="icon-search"></i></button>
        
      </div>
      <!--fim coluna -->
    </div>
    <!--fim linha -->
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
            <td width="117" align="center">
            
            
            <a title="Visualizar" href="view/candidatos/ficha.php?id=<?php echo mysql_result($rs,$i,'i.idcandidatos');?>" target="_blank"><i class="icon-eye-open"></i><img src="../../img/lista.png" alt="" width="24" height="24" /></a>
            
            
            
           
            <td width="117">&nbsp;</td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  
      <?php }elseif($_POST['ok']=="true"){?>
   
    <!-- alerta-->
    <div class="alert alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <h4>Mensagem!</h4>
      <p>Nenhum registro encontrado</p>
      <p>
        <?php }?>
      </p>
      <p>
        <input name="ok2" type="hidden" id="ok2"/>
      </p>
    </div>
  </div>
  <!--fim container -->
</form>
<p>&nbsp;</p>
