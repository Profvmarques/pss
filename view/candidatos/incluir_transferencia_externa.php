<?php
require_once('controles/candidatos.php');
Processo('incluirTransferencia_Externa');
?>


<!-- POP UP DO TERMO 
<script type="text/javascript">

$(document).ready(function() {
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		$('#mask').css({'width':maskWidth,'height':maskHeight});
 
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		$('#dialog2').css('top',  winH/2-$('#dialog2').height()/2);
		$('#dialog2').css('left', winW/2-$('#dialog2').width()/2);
	
		$('#dialog2').fadeIn(2000); 
	
	$('.window .close').click(function (e) {
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});
</script>

<style type="text/css">
#termo-all {background:#fff; overflow:hidden; width:650px;}
.termo { width:650px;  padding:20px;  } 
.style1 {font-weight: bold} 
#mask { position:absolute; left:0; top:0; z-index:9000; background-color:#000; display:none; }
  
#boxes .window { position:absolute; left:0; top:0; width:740px; height:200px; display:none; z-index:9999; padding:20px; }
 
#boxes #dialog2 { background:transparent; width:650px; margin:0 auto; margin-top:-160px; }
.close{display:block; text-align:right; position:absolute; right:0; background-image: url("js/fancybox.png");background-position: -40px 0; cursor: pointer; top: 29px; width: 29px; height:29px; opacity: 1 !important;}
 
</style>
 FIM POP UP DO TERMO -->



<!-- INÍCIO DOS REQUISITOS DO MODELO ANTIGO -->


<script type='text/javascript' src='js/cep.js'></script>
<script type='text/javascript' src='js/Validacaoform.js'></script>
<script type='text/javascript' src='http://192.95.8.216/~pmdcsmen/sgm/js/idade.js'></script>
		 
<script type="text/javascript">
        

		 function habilitarCaixasSelecao(){
			
	      		 
			if((document.getElementById('idsegmento_escolar').value==15 || document.getElementById('idsegmento_escolar').value==16 || document.getElementById('idsegmento_escolar').value==18 || document.getElementById('idsegmento_escolar').value==19 || document.getElementById('idsegmento_escolar').value==17) && (document.getElementById('idtipo_segmento').value==4)){
				
				
				 document.getElementById('escolha2').style.visibility='hidden';
				 document.getElementById('escolha3').style.visibility='hidden';
				 document.getElementById('escolha4').style.visibility='hidden';
				 document.getElementById('escolha5').style.visibility='hidden';
				 
				 
				 document.getElementById('idunidade_escolar2').title="";
				 document.getElementById('idunidade_escolar3').title="";
				 document.getElementById('idunidade_escolar4').title="";
				 document.getElementById('idunidade_escolar5').title="";
				 
				 
				 document.getElementById('idunidade_escolar2').value=0;
				 document.getElementById('idunidade_escolar3').value=0;
				 document.getElementById('idunidade_escolar4').value=0;
				 document.getElementById('idunidade_escolar5').value=0;
				 
			}else{
				
				document.getElementById('escolha2').style.visibility='visible';
				 document.getElementById('escolha3').style.visibility='visible';
				 document.getElementById('escolha4').style.visibility='visible';
				 document.getElementById('escolha5').style.visibility='visible';
			} 
		 }
		 
 // COMENTÁRIO DESSA FUNÇÃO PARA SEGMENTO ESCOLAR*****************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idtipo_segmento]").change(function(){

            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idsegmento_escolar]").html('<option value="">Carregando segmento escolar...</option>');           
				
			
            $.post("ajax/ajax_segmento_escolarTransferencia_Fase2.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idtipo_segmento:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idsegmento_escolar]").html(valor);					
					 
                  }
                  )//fim valor post
				  
			
				  
         });//fim evento change
	
		 
	  });      	  
	   // PARA APARECER APENAS UMA COMBO *********************************
	   

	   
	    // COMENTÁRIO DESSA FUNÇÃO PARA UNIDADE ESCOLAR*****************************
      $(document).ready(function(){
        // Evento change no campo idtipo_segmento  
         $("select[name=idsegmento_escolar]").change(function(){
			//habilitarCaixasSelecao();
            // Exibimos no campo idapartamentos antes de concluirmos
			$("select[name=idunidade_escolar]").html('<option value="">Carregando unidade escolar...</option>');
			
            // Exibimos o campo sistemas antes de selecionamos o módulo, serve também em caso
			// do usuario ja ter selecionado o tipo e resolveu trocar, com isso limpamos a
			// seleção antiga caso tenha feito.
			// Passando tipo por parametro para a pagina ajax_modulos.php
            $.post("ajax/ajax_unidade_escolar_transferencia_fase2.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idsegmento_escolar:$(this).val()},
                  // Carregamos o resultado acima para o campo marca
				  function(valor){
                     $("select[name=idunidade_escolar]").html(valor);					
				
					 
                  }
             )
         });
	  });     
	  // PARA CARREGAR A COMBO idunidade_escolar
	  
	    // COMENTÁRIO DESSA FUNÇÃO PARA UNIDADE ESCOLAR *****************************
      $(document).ready(function(){
        // Evento change no campo idunidade_escolar
         $("select[name=idunidade_escolar]").change(function(){
            // Exibimos no campo idunidade_escolar antes de concluirmos
			//VM
			$("select[name=idunidade_escolar2]").html('<option value="">Carregando unidade escolar...</option>');
						

            $.post("ajax/ajax_unidade_escolar2.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idunidade_escolar:$(this).val(),idsegmento_escolar:document.form.idsegmento_escolar.value,idtipo_segmento:document.form.idtipo_segmento.value},
                  // Carregamos o resultado acima para o campo idunidade_escolar2
		function(valor){
                     		 
		       //VM
		      $("select[name=idunidade_escolar2]").html(valor);
					  
                  }
             )
         });
	  }); 
	  
	     // COMENTÁRIO DESSA FUNÇÃO PARA UNIDADE ESCOLAR 2*****************************
      $(document).ready(function(){
        // Evento change no campo idunidade_escolar
         $("select[name=idunidade_escolar2]").change(function(){
            // Exibimos no campo idunidade_escolar antes de concluirmos
			//VM
			$("select[name=idunidade_escolar3]").html('<option value="">Carregando unidade escolar...</option>');
						

            $.post("ajax/ajax_unidade_escolar3.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idunidade_escolar:document.form.idunidade_escolar.value,idunidade_escolar2:$(this).val(),idsegmento_escolar:document.form.idsegmento_escolar.value,idtipo_segmento:document.form.idtipo_segmento.value},
                  // Carregamos o resultado acima para o campo idunidade_escolar2
		function(valor){
                     		 
		       //VM
		      $("select[name=idunidade_escolar3]").html(valor);
					  
                  }
             )
         });
	  }); 
	 
	 
	     // COMENTÁRIO DESSA FUNÇÃO PARA UNIDADE ESCOLAR 3*****************************
      $(document).ready(function(){
        // Evento change no campo idunidade_escolar
         $("select[name=idunidade_escolar3]").change(function(){
            // Exibimos no campo idunidade_escolar antes de concluirmos
			//VM
			$("select[name=idunidade_escolar4]").html('<option value="">Carregando unidade escolar...</option>');
						

            $.post("ajax/ajax_unidade_escolar4.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idunidade_escolar:document.form.idunidade_escolar.value,idunidade_escolar2:document.form.idunidade_escolar2.value,idunidade_escolar3:$(this).val(),idsegmento_escolar:document.form.idsegmento_escolar.value,idtipo_segmento:document.form.idtipo_segmento.value},
                  // Carregamos o resultado acima para o campo idunidade_escolar2
		function(valor){
                     		 
		       //VM
		      $("select[name=idunidade_escolar4]").html(valor);
					  
                  }
             )
         });
	  }); 
	
		     // COMENTÁRIO DESSA FUNÇÃO PARA UNIDADE ESCOLAR 4*****************************
      $(document).ready(function(){
        // Evento change no campo idunidade_escolar
         $("select[name=idunidade_escolar4]").change(function(){
            // Exibimos no campo idunidade_escolar antes de concluirmos
			//VM
			$("select[name=idunidade_escolar5]").html('<option value="">Carregando unidade escolar...</option>');
						

            $.post("ajax/ajax_unidade_escolar5.php?ti=<?php echo base64_decode($_GET['ti']);?>",
                  {idunidade_escolar:document.form.idunidade_escolar.value,idunidade_escolar2:document.form.idunidade_escolar2.value,idunidade_escolar3:document.form.idunidade_escolar3.value,idunidade_escolar4:document.form.idunidade_escolar4.value,idsegmento_escolar:document.form.idsegmento_escolar.value,idtipo_segmento:document.form.idtipo_segmento.value},
                  // Carregamos o resultado acima para o campo idunidade_escolar2
		function(valor){
                     		 
		       //VM
		      $("select[name=idunidade_escolar5]").html(valor);
					  
                  }
             )
         });
	  }); 
	   	  
	   // COMENTÁRIO DESSA FUNÇÃO *********************************
	   function desabilitarEscola(){	  	
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		 
		 // ADRIANO
		 document.getElementById('tdidunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').title="";

		 document.getElementById('tdidunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').title="";

		 document.getElementById('tdidunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').title="";

         document.getElementById('tdidunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').title="";			 
		
		 //
		
	   }
	  
	
	   
	    function habilitarEscola2(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
			tipoinscricao=<?php echo base64_decode($_GET['ti']);?>;
		
		if((segmento>6 && segmento<15 && tipo==1 && tipoinscricao==2) || (segmento>=2 && segmento<=5 && tipo==2 && tipoinscricao==2) || (tipo==4)){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').title="O campo unidade escolar é obrigatório";
		 
		 //ADRIANO
		 
		 document.getElementById('tdidunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').title="O campo unidade escolar é obrigatório";
		 //
		 
		 
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		  
		 //ADRIANO 
		 
		 document.getElementById('tdidunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').title="";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').title="";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').title="";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').title="";		 
		 
		 //
		  
		}
		}		
	   /*
	   function habilitarEscola(){
	    var segmento=document.form.idsegmento_escolar.value;
		    tipo = document.form.idtipo_segmento.value;
			tipoinscricao=document.form.idtipoinscricao.value;
		
		if(segmento>6 && segmento<15 && tipo==1 && tipoinscricao==2){
		 document.getElementById('tdidunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').style.visibility='visible';
		 document.getElementById('idunidade_escolar').title="O campo unidade escolar é obrigatório";
		  
		  //ADRIANO 
		 document.getElementById('tdidunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').style.visibility='visible';
		 document.getElementById('idunidade_escolar2').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').style.visibility='visible';
		 document.getElementById('idunidade_escolar3').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').style.visibility='visible';
		 document.getElementById('idunidade_escolar4').title="O campo unidade escolar é obrigatório";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').style.visibility='visible';
		 document.getElementById('idunidade_escolar5').title="O campo unidade escolar é obrigatório";
		 
		  //
		  
		}else{
		 document.getElementById('tdidunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').style.visibility='hidden';
		 document.getElementById('idunidade_escolar').title="";
		 
		 //ADRIANO 
		 document.getElementById('tdidunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').style.visibility='hidden';
		 document.getElementById('idunidade_escolar2').title="";
		 
		 document.getElementById('tdidunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').style.visibility='hidden';
		 document.getElementById('idunidade_escolar3').title="";
		 
		 document.getElementById('tdidunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').style.visibility='hidden';
		 document.getElementById('idunidade_escolar4').title="";
		 
		 document.getElementById('tdidunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').style.visibility='hidden';
		 document.getElementById('idunidade_escolar5').title="";
		 
		 //
		 
		}   
		
	   
	   } 
	  */
	   
	    $(document).ready(function(){
		$("#aceite").click(function(evento){
			if ($("#aceite").attr("checked")){
			$("#todos").css("display", "block");
			}else{
				$("#todos").css("display", "none");
			}
			});
		});
	   
</script>




<!--
<link href="../../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
-->

<!-- FIM DOS REQUISITOS DO MODELO ANTIGO -->



		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->	
        	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				
		<!-- datetimepicker -->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker.min.css">
		<!--
		<script type="text/javascript">
		      $('#sandbox-container input').datepicker({
              });
		</script>-->
		


 
	 
	 <body>
	   <div class="container">
       <div id="boxes">
 
		<!-- Janela Modal 
		<div id="dialog2" class="window">
			<div align="right">
            	<a href="" class="close" ></a>
			</div>
				
			<div id="termo-all">
				<div class="termo">
                
                <p align="center"><u><b>TERMO DE ACEITE</b></u></p>


<p align="justify">1.	 A pré-inscrição para educação infantil I somente  poderá ser realizada para crianças entre 01 (um) e 03 (três) anos de idade.</p>
<p align="justify">2.	A realização da pré-inscrição para Educação Infantil I não garante a efetivação da vaga.</p>
<p align="justify">3.	A vaga na Educação Infantil I será garantida apenas  aos contemplados no sorteio.</p>
<p align="justify">4.	O sorteio acontecerá na Unidade Escolar escolhida  nos dias 16 e 17 de dezembro de 2015. </p>
<p align="justify">5.	No dia 08 de dezembro de 2015 será publicado no  portal da SME – Duque de Caxias (<a href="http://www.smeduquedecaxias.rj.gov.br/" target="_blank">www.smeduquedecaxias.rj.gov.br</a>)  data e horário da realização do sorteio de cada Unidade Escolar.</p>
<p align="justify">6.	A pré-inscrição somente poderá ser realizada uma  única vez por candidato e em apenas uma unidade escolar.</p>
<p align="justify">7.	Caso o candidato tenha participado da primeira fase da pré-inscrição de matrícula, será desconsiderada a participação do  mesmo candidato na segunda fase.</p>
<p align="justify">8.	É fundamental a anotação do número de protocolo  para obtenção de informação da pré-matrícula do candidato.</p>
<p align="justify">9.	Ao se inscrever, o candidato declara estar ciente e  de acordo com as informações contidas neste Termo.</p>
                
                -->
                
                <!-- MODAL DA EDUCAÇÃO ESPECIAL
                
					<p align="center"><u><b>TERMO DE ACEITE - EDUCA&Ccedil;&Atilde;O ESPECIAL</b></u></p>

                    <p align="justify">1.	Os estudantes com defici&ecirc;ncias, transtornos globais do desenvolvimento e altas habilidades ou superdota&ccedil;&atilde;o, com laudo m&eacute;dico, ter&atilde;o a matr&iacute;cula priorit&aacute;ria na Rede Municipal de Ensino de Duque de Caxias.</p>
                    <p align="justify">2.	O laudo m&eacute;dico &eacute; condi&ccedil;&atilde;o indispens&aacute;vel para a confirma&ccedil;&atilde;o da matr&iacute;cula dos candidatos as vagas para estudantes com defici&ecirc;ncias, transtornos globais do desenvolvimento e altas habilidades ou superdota&ccedil;&atilde;o portanto, deve ser nominal, emitido por m&eacute;dico especialista e com data inferior a data da solicita&ccedil;&atilde;o da matr&iacute;cula.</p>
                    <p align="justify">3.	No ato da inscri&ccedil;&atilde;o o respons&aacute;vel pelo estudante com defici&ecirc;ncias, transtornos globais do desenvolvimento e altas habilidades ou superdota&ccedil;&atilde;o dever&aacute; marcar no campo apropriado qual a defici&ecirc;ncia especificada no  laudo m&eacute;dico, se houver.</p>
                    <p align="justify">4.	O respons&aacute;vel pelo estudante com defici&ecirc;ncias, transtornos globais do desenvolvimento e altas habilidades ou superdota&ccedil;&atilde;o dever&aacute; descrever no campo &ldquo;LAUDO&rdquo; todo o conte&uacute;do do laudo m&eacute;dico inclusive a especifica&ccedil;&atilde;o do tipo de defici&ecirc;ncia, a indica&ccedil;&atilde;o do c&oacute;digo correspondente da Classifica&ccedil;&atilde;o Internacional de Doen&ccedil;as (CID) e detalhes sobre as limita&ccedil;&otilde;es funcionais do candidato correlacionando-se a defici&ecirc;ncia e a consequente sequela, quando houver.</p>
                    <p align="justify">5.	O respons&aacute;vel pelo candidato a vaga de estudante com defici&ecirc;ncias, transtornos globais do desenvolvimento e altas habilidades ou superdota&ccedil;&atilde;o se compromete a comparecer na Secretaria Municipal de Educa&ccedil;&atilde;o em data pr&eacute;-agendada pela Coordenadoria de Educa&ccedil;&atilde;o Especial para a apresenta&ccedil;&atilde;o do laudo m&eacute;dico do candidato com vistas a melhor inser&ccedil;&atilde;o do estudante na Rede Municipal de Ensino. </p>
                    <p align="justify">6.	&Eacute; importante a anota&ccedil;&atilde;o do n&uacute;mero de protocolo para obten&ccedil;&atilde;o de informa&ccedil;&atilde;o da inscri&ccedil;&atilde;o do candidato.</p>
                    <p align="justify">7.	Ao se inscrever, o respons&aacute;vel e/ou candidato declara estar ciente e de acordo com as informa&ccedil;&otilde;es contidas neste Termo e Normativas da SME &ndash;DC.</p>
                    
                    
                    
				</div>
			</div>
			</div>-->
<!-- Fim Janela Modal-->
 		<!-- Máscara para cobrir a tela -->
		<div id="mask"></div>
 	</div>
       
		 <form class="form-horizontal"  id="form" name="form" method="post" >  
					<!--DADOS GERAIS -->				
					<center>									   
						<h3>
						  <legend>DADOS GERAIS </legend></h3>
					
                     <center>
                      &nbsp;
					</b></center>                         
			       <br />
		   <div class="form-group">							
						<div class="row-fluid">
							<!--<div class="col-md-4">    
									<label class="control-label" for="textinput" name=> PRÉ-INSCINCRIÇÃO DE MATRÍCULA:</label> 				
									<select class="form-control" name="idtipoinscricao" id="idtipoinscricao">
									<option value='1'  label=''>MATRÍCULA</option>
                                    </select>
									<br />							
							
							</div>-->
							<div class="col-md-6">	
									<label class=" control-label" for="textinput" > SEGMENTO:</label>
									<span style="margin-left:auto">
									<select name="idtipo_segmento" class="form-control" tabindex="1" id="idtipo_segmento" title="O campo tipo de segmento escolar &eacute; obrigat&oacute;rio" >
                                    <option value="">----------------------</option>									
                                    <!--<option value="4">EDUCAÇÃO INFANTIL</option> -->
                                    <option value="1">EDUCAÇÃO FUNDAMENTAL</option>
                                     <option value="2">EJA</option>
                                  
								    </select>
									</span><br />
							</div>
							<div class="col-md-6">	
									<label class=" control-label" for="textinput"> ANO:</label>
									<span style="margin-left:auto">
									<select name="idsegmento_escolar" class="form-control" tabindex="1" id="idsegmento_escolar" title="O campo segmento escolar &eacute; obrigat&oacute;rio" onChange="">
									  <option value="">Escolha o segmento escolar</option>
								    </select>
									</span><br />
							</div>
						</div>
                        
						<div class="row-fluid">
							<div class="col-md-4" id="escolha4">	 
									<label class="control-label" for="textinput">ESCOLA PRETENDIDA(1&deg; OP&Ccedil;&Atilde;O): </label> 
                                    
                              <select name="idunidade_escolar" class="form-control" id="idunidade_escolar" title="O campo unidade escolar &eacute; obrigat&oacute;rio" >
                                      
									  
									</select>
                         <br />           
							</div>	<!-- fim col -->
                            
                          
                          <div class="col-md-4"  style="display:none">	 
									<label class="control-label" for="textinput">ESCOLA PRETENDIDA(2&deg; OP&Ccedil;&Atilde;O): </label>
									  <select name="idunidade_escolar2" class="form-control" id="idunidade_escolar2" >
									    
										
										
										
								      </select>
									
								  <br />          
							</div>
                            
                            <div class="col-md-4" id="escolha3" style="display:none">	 	 
							  <label class="control-label" for="textinput">ESCOLA PRETENDIDA(3&deg; OP&Ccedil;&Atilde;O): </label>
									<select name="idunidade_escolar3" class="form-control" id="idunidade_escolar3" >
							      
								      
								  
								  
						        </select>
                                    <br />            
							</div>                            				
						</div><!-- fim row -->
                        
                      
                        
                        <div class="row-fluid" id="escolha4" style="display:none">
							<div class="col-md-4" >	 
							  <label class="control-label" for="textinput">ESCOLA PRETENDIDA(4&deg; OP&Ccedil;&Atilde;O): 
							    
							  </label>
									<select name="idunidade_escolar4" class="form-control" id="idunidade_escolar4" >
									 
							  </select>
									<br />            
						  </div>	<!-- fim col -->
                            
                            
                            <div class="col-md-4" id="escolha5" style="display:none">	 
									<label class="control-label" for="textinput">ESCOLA PRETENDIDA(5&deg; OP&Ccedil;&Atilde;O): </label>
							  <select name="idunidade_escolar5" class="form-control" id="idunidade_escolar5">
									 
									
							  </select>
									<br />           
							</div><!-- fim col -->
             </div><!-- fim ROW -->
                        </div>

		   <!-- DADOS DO ALUNO -->
                    <center>									   
						<h3><legend>DADOS DO ALUNO</legend></h3>
					</center>                    
			       
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class=" control-label" for="textinput"> Nº DA CERTIDÃO DE NASCIMENTO OU RG:</label> <input type="text" name="rg" id="rg"  value="<?php echo $_POST['rg']?>"/  class="form-control"><br />				
							</div>
							<div class="col-md-8">	
									<label class=" control-label" for="textinput"> NOME:</label> <input name="nome" type="text"  id="nome" placeholder="" value="<?php echo $_POST['nome']?>"   class="form-control" title="O campo nome &eacute; obrigat&oacute;rio"><br />
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	
									
									<label class="control-label" for="textinput">DATA DE NASCIMENTO: </label>									
									
										<input name="nascimento" type="text" class="form-control" id="nascimento" onKeyPress="return Mascaras_Format(document.form,'nascimento','99/99/9999',event);" size="20" maxlength="10" onBlur="return valida_data1(document.form.nascimento,5);" value="<?php echo $_POST['nascimento']; ?>"  title="O campo DATA DE NASCIMENTO &eacute; obrigat&oacute;rio" />
										<!-- <span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>-->
																		
									
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">IDADE: </label>
									<input type="text" name="idade" id="idade" class="form-control"  title="O campo idade &eacute; obrigat&oacute;rio" value="<?php echo $_POST['idade']?>"/>
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">SEXO: </label>
									<select name="sexo" id="sexo" class="form-control" title="O campo sexo &eacute; obrigat&oacute;rio">
									<option value="M">M</option>
									<option value="F">F</option>							
									</select>
									<br />
							</div>                            						
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">ENDEREÇO: </label>
									<input name="endereco" type="text" class="form-control" id="endereco" placeholder="" value="<?php echo $_POST['endereco']?>" title="O campo endereco &eacute; obrigat&oacute;rio"/>
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">NÚMERO: </label>
									<input name="numero" type="text" class="form-control" id="numero" placeholder="" value="<?php echo $_POST['numero']?>" title="O campo numero &eacute; obrigat&oacute;rio"/>
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">COMPLEMENTO: </label>
									<input name="complemento" type="text" class="form-control" id="complemento" placeholder="" value="<?php echo $_POST['complemento']?>" />
                            </div>                            							
						</div>
						<div class="row-fluid">
							<div class="col-md-3" >	 
									<label class="control-label" for="textinput">BAIRRO: </label>
									<input name="bairro" type="text" class="form-control" id="bairro" placeholder=""  value="<?php echo $_POST['bairro']?>" title="O campo bairro &eacute; obrigat&oacute;rio" />
							</div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">MUNICÍPIO: </label>
									<input name="cidade" type="text" class="form-control" id="cidade" placeholder="" value="<?php echo $_POST['cidade']?>" title="O campo municipio &eacute; obrigat&oacute;rio"/>
                            </div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">UF: </label>
									<input name="uf" type="text" class="form-control" id="uf" placeholder="" value="<?php echo $_POST['uf']?>" title="O campo uf &eacute; obrigat&oacute;rio" />
                            </div>
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">CEP: </label>
									<input name="cep" type="text" class="form-control" id="cep" onKeyPress="return Mascaras_Format(document.form,'cep','99999999',event);" value="<?php echo $_POST['cep']; ?>" maxlength="8" placeholder="" title="O campo cep &eacute; obrigat&oacute;rio"/>
                            </div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4" >	 
									<label class="control-label" for="textinput">TEL.: </label>
									<input name="telefone" type="text" class="form-control" id="telefone"  onKeyPress="return Mascaras_Format(document.form,'telefone','(99) 9999-9999',event);" value="<?php echo $_POST['telefone']; ?>" maxlength="15" placeholder="" />
							</div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">CEL.: </label>
									<input name="celular" type="text" class="form-control" id="celular"  onKeyPress="return Mascaras_Format(document.form,'celular','(99) 99999-9999',event);" value="<?php echo $_POST['celular']; ?>" maxlength="15" placeholder="" />
                            </div>
                            <div class="col-md-4" >	 
									<label class="control-label" for="textinput">EMAIL: </label>
									<input name="email" type="text" class="form-control" id="email" placeholder="" data-rule-email="true" data-rule-required="true" value="<?php echo $_POST['email']; ?>"  title=""/>
                            </div>							
						</div>
						<div class="row-fluid"></div>				
					</div>
                   <!-- FILIAÇÃO -->
                    <center>									   
						<h3><legend>FILIAÇÃO</legend></h3>
					</center> 
					<div class="form-group">							
						<div class="row-fluid">
							<div class="col-md-6">    
									 <label class="control-label" for="textinput"> PAI:</label>
									 <input name="pai" type="text" class="form-control" id="pai" placeholder="" value="<?php echo $_POST['pai']?>"/>
									 <br />				
							</div>
							<div class="col-md-6">	
									<label class="control-label" for="textinput"> MÃE:</label>
									<input name="mae" type="text" class="form-control" id="mae" placeholder="" value="<?php echo $_POST['mae']?>" title="O campo mae &eacute; obrigat&oacute;rio"/>
									<br />
							</div>							
						</div>
						<div class="row-fluid">
							<div class="col-md-4">    
									 <label class="control-label" for="textinput"> RESPONSÁVEL:</label>
									 <input name="responsavel" type="text" class="form-control" id="responsavel" placeholder="" value="<?php echo $_POST['responsavel']?>" title="O campo responsavel &eacute; obrigat&oacute;rio"/>
									 <br />				
							</div>
							<div class="col-md-4">	
									<label class="control-label" for="textinput"> CPF DO RESPONSÁVEL:</label>
									<input name="cpf" type="text" class="form-control" id="cpf" onKeyPress="return Mascaras_Format(document.form,'cpf','99999999999',event);" value="<?php echo $_SESSION['login'];?>" onBlur="TestaCPF(document.form.cpf.value);" maxlength="11" disabled="disabled"/>
									<br />
							</div>
                            <div class="col-md-4">	
									<label class="control-label" for="textinput"> RENDA:</label>
									<select name="idrendafamiliar" class="form-control" id="idrendafamiliar">
									  <option value="">--</option>
									  <?php for($i=0;$i<$linha3;$i++){?>
									  <option value="<?php echo mysql_result($rs3,$i,'idrendafamiliar');?>"><?php echo utf8_encode(mysql_result($rs3,$i,'descricao'));?></option>
									  <?php }?>
							  </select>
									<br />
							</div>								
						</div>
					</div>		
					<!-- UNIFORME -->
                    <center>									   
						<h3><legend>UNIFORME</legend></h3>
					</center> 
					<div class="form-group">							
						<div class="row-fluid">
						    <div class="col-md-3" >	 
									<label class="control-label" for="textinput">ALTURA DO ALUNO: </label> <input id="altura_aluno" name="altura_aluno" type='text'  class="form-control"/>
							</div>	
							<div class="col-md-3">    
									 <label class=" control-label" for="textinput"> CAMISA:</label> 
                                     <select name='camisa_aluno' id='camisa_aluno' class="form-control">
									<option value='2 ANOS'  label=''>2 ANOS</option>
									<option value='4 ANOS'  label=''>4 ANOS</option>
									<option value='6 ANOS'  label=''>6 ANOS</option>
									<option value='8 ANOS'  label=''>8 ANOS</option>
									<option value='10 ANOS'  label=''>10 ANOS</option>
									<option value='12 ANOS'  label=''>12 ANOS</option>
									<option value='14 ANOS'  label=''>14 ANOS</option>
									<option value='16 ANOS'  label=''>16 ANOS</option>
									<option value='P - ADULTO'  label=''>P - ADULTO</option>
									<option value='M - ADULTO'  label=''>M - ADULTO</option>
									<option value='G - ADULTO'  label=''>G - ADULTO</option>
									<option value='GG - ADULTO'  label=''>GG - ADULTO</option>
									<option value='EG - ADULTO'  label=''>EG - ADULTO</option>
									</select><br />				
							</div>
							<div class="col-md-3">	
									<label class=" control-label" for="textinput"> BERMUDA:</label> <select name='bermuda_aluno' id='bermuda_aluno' class="form-control">
									<option value='2 ANOS'  label=''>2 ANOS</option>
									<option value='4 ANOS'  label=''>4 ANOS</option>
									<option value='6 ANOS'  label=''>6 ANOS</option>
									<option value='8 ANOS'  label=''>8 ANOS</option>
									<option value='10 ANOS'  label=''>10 ANOS</option>
									<option value='12 ANOS'  label=''>12 ANOS</option>
									<option value='14 ANOS'  label=''>14 ANOS</option>
									<option value='16 ANOS'  label=''>16 ANOS</option>
									<option value='P - ADULTO'  label=''>P - ADULTO</option>
									<option value='M - ADULTO'  label=''>M - ADULTO</option>
									<option value='G - ADULTO'  label=''>G - ADULTO</option>
									<option value='GG - ADULTO'  label=''>GG - ADULTO</option>
									<option value='EG - ADULTO'  label=''>EG - ADULTO</option>
									
									
									</select><br />
							</div>
                            <div class="col-md-3">	
							
									
									<label class="control-label" for="textinput">PÉ (TÊNIS):</label>
									<input name="pe_aluno" type="text" class="form-control" id="pe_aluno" placeholder="" value="<?php echo $_POST['pe_aluno'];?>" />
									<br />	
									
									
							</div>							
						</div>						
					</div>
                    
                    
                    <!-- municipio e escola origem -->
                    <center>									   
						<h3><legend>DADOS DA TRANSFER&Ecirc;NCIA</legend></h3>
					</center> 
					<div class="form-group">							
						<div class="row-fluid">
						    <div class="col-md-3" >	 
									<label class="control-label" for="textinput">MUNIC&Iacute;PIO ORIGEM: </label> 
									<input id="municipio_origem" name="municipio_origem" type='text'  class="form-control"/>
							</div>	
                            
                            <div class="col-md-3" >	 
									<label class="control-label" for="textinput">ESCOLA ORIGEM: </label> 
									<input id="escola_origem" name="escola_origem" type='text'  class="form-control"/>
							</div>
														
						</div>						
					</div>
                    
                    
					<div class="form-group">
							<div style="text-align: center;">
							    <button type="button" class="btn btn-primary" onClick="validar(document.form);">
                                    </i> SALVAR</button>
                                    <button type="button" class="btn" onClick="javascript:history.back()" >CANCELAR</button>
                                    <input name="ok" type="hidden" id="ok"/>
			                  <input name="etapa" type="hidden" id="etapa" value="TRANSFERENCIA_SEGUNDA_FASE"/>
					          <input name="tipovaga" type="hidden" id="tipovaga" value="TRANSFERENCIA_SEGUNDA_FASE"/>
					</div>					
					
			
		 </form>
         
        
        
<script>
document.form.idtipoinscricao.value='<?php echo $_POST['idtipoinscricao']?>';
document.form.idtipo_segmento.value='<?php echo $_POST['idtipo_segmento']?>';
document.form.idsegmento_escolar.value='<?php echo $_POST['idsegmento_escolar']?>';
document.form.sexo.value='<?php echo $_POST['sexo']?>';
document.form.idrendafamiliar.value='<?php echo $_POST['idrendafamiliar']?>';
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>

        <script src="http://www.smeduquedecaxias.rj.gov.br/sgm/js/bootstrap-datepicker.min.js"></script><!---->
		
        <script type="text/javascript">            
            $(document).ready(function () {                
                $('#datepicker').datepicker({
                    format: "dd/mm/yyyy",
					language: "pt-BR
                });				
            });
        </script>
        	 	 
	 </body>
	 
 </html>