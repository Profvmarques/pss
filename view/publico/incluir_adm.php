<?php

require_once('controles/publico.php');

Processo('publicoGestao');


						 ini_set("memory_limit","1200M");

						 		 

?>

   

       <meta content="text/html;  charset=UTF-8" http-equiv="content-type">

  

		<title>FORMULÁRIO</title>



		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">



		<!-- Latest compiled and minified JavaScript -->		

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

				

		<!-- datetimepicker -->

		

<script type="text/javascript">

$('#sandbox-container input').datepicker({

              });

function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}

function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}

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

        .B {
	font-weight: bold;
}
        NOVO {
	color: #090;
}
        .container-fluid .row .col-md-8 .panel.panel-success .panel-body .nav {
	color: #0F0;
	font-weight: bold;
}
        </style>





<body onLoad="MM_preloadImages('img/pre-inscricao.png','img/transferencia.png','img/quadro-vagas.png','img/atualizar-senha.png','img/1distrito.png','img/2distrito.png','img/3distrito.png','img/4distrito.png')">



         <div class="container-fluid">

		     <!---->

			 <form class="form-horizontal" role="form"> 

					

					<!--DADOS GERAIS -->

					

					 

				<div class="container-fluid">

                <center>

			   <div class="row">

			     <div class="col-md-8">

						  <div class="panel panel-success">

								<div class="panel-heading">

								  <h3 class="panel-title">Relat&oacute;rios (Planilhas do MS Excel)</h3>

								</div>

								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->

								<div class="panel-body"></a><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->

								</br>

								

							    <!-- incluirEd_infantil								

							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluirEd_infantil.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</a></br> -->	

                                

                                					

								<a href="view/relatorios/quadroVagas_CAMPO_EXCEL.php"> QUADRO DE VAGAS ESCOLAS DO CAMPO</a></br>

                                

                                								

							    <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_CCAIC_EXCEL.php"> QUADRO DE VAGAS CCAIC</a></br>

                                							    <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_Transferencia_Interna_EXCEL.php" target="_blank"> QUADRO DE VAGAS DE TRANSFERÊNCIAS INTERNAS</a></br>

                                

            

            <!-- incluir 1º ANO FUNDAMENTAL  -->						

                                <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_Ed_Infantil_Sorteio_EXCEL.php"> LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL(SORTEIO)</a></br>

                                

                                

                                <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_Ed_Infantil_fundamental_eja_EXCEL.php"> LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL, ED. FUNDAMENTAL E EJA(COM 5 OP&Ccedil;&Otilde;ES DE UNIDADES ESCOLARES)</a></br>

                                

                                <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_transferencia_interna_geral_EXCEL.php"> LISTA DE INSCRITOS DE TRANSFER&Ecirc;NCIA INTERNA</a></br>

            

            

            <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_transferencia_externa_geral_EXCEL.php"> LISTA DE INSCRITOS DE TRANSFER&Ecirc;NCIA EXTERNA</a></br>

            

            
<a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_ed_infantil_fundmental_eja_com_ue_contemplada_EXCEL.php"> LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL, ED. FUNDAMENTAL E EJA - ALUNOS COM U.E. CONTEMPLADA(COM 5 OP&Ccedil;&Otilde;ES DE UNIDADES ESCOLARES)</a></br>
            

            

            

            <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_ed_infantil_fundmental_eja_sem_ue_contemplada_EXCEL.php"> LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL, ED. FUNDAMENTAL E EJA - ALUNOS SEM U.E. CONTEMPLADA(COM 5 OP&Ccedil;&Otilde;ES DE UNIDADES ESCOLARES)</a></br>

    

      <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_Inscritos_Fase2_EXCEL.php"> LISTA DE INSCRITOS DA<span class="B"> SEGUNDA FASE</span>(COM 5 OP&Ccedil;&Otilde;ES DE UNIDADES ESCOLARES)</a></br>                           

           

           <a href="view/relatorios/Lista_Ed_Infantil_fundamental_eja_sugestao_sem_unidade_contemplada_EXCEL.php"> LISTA DE INSCRITOS DA<span class="B"> PRIMEIRA FASE</span>(COM SUGEST&Atilde;O E SEM U.E CONTEMPLADA)</a><FONT color="#00CC00"><B> NOVO!</B></FONT> </br> 

                                

                                <a href="view/relatorios/Lista_Ed_Infantil_fundamental_eja_sem_ue_contemplada_nao_compareceu_EXCEL.php"> LISTA DE INSCRITOS DA<span class="B"> PRIMEIRA FASE</span>(COM SUGEST&Atilde;O E N&Atilde;O COMPARECEU)</a><FONT color="#00CC00"><B> NOVO!</B></FONT> </br>

                    <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_Ed_Infantil_fundamental_eja_fase3_EXCEL.php"> LISTA DE INSCRITOS DA<span class="B"> TERCEIRA FASE</span>(COM 5 OP&Ccedil;&Otilde;ES DE UNIDADES ESCOLARES)</a>
                    <FONT color="#990000"><B> (TERCEIRA FASE)</B></FONT>       <FONT color="#00CC00"><B> NOVO!</B></FONT></br>     
                    
                      <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/Lista_Ed_Infantil_fase3_EXCEL.php"> LISTA DE INSCRITOS DA ED. INFANTIL DA <span class="B"> TERCEIRA FASE</span>(COM 5 OP&Ccedil;&Otilde;ES DE UNIDADES ESCOLARES)</a>
                    <FONT color="#990000"><B> (TERCEIRA FASE)</B></FONT>       <FONT color="#00CC00"><B> NOVO!</B></FONT></br>           

                                

								<!--<font color="#C8C8C8"> EDUCAÇÃO INFANTIL II (4 a 5 anos)</font></br> 

								<font color="#C8C8C8"> EDUCAÇÃO FUNDAMENTAL</font></br>

								<font color="#C8C8C8"> EJA</font></br>

								<font color="#C8C8C8"> EDUCAÇÃO ESPECIAL</font></br>						

		-->														

								</div>

						  </div>
                          
						  <div class="panel panel-danger">

							<div class="panel-heading">

							  <h3 class="panel-title">Relat&oacute;rios (Documentos em PDF)</h3>

							</div>

								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->

								<div class="panel-body"></a><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->

								</br>

								

							    <p>

							      <!-- incluirEd_infantil								

							    <a href="default.php?pg=<?php echo base64_encode("http://192.95.8.218/~pmdcsmen/sgm/view/candidatos/incluirEd_infantil.php");?>&form=<?php echo base64_encode("Pr&eacute;-inscri&ccedil;&atilde;o de Candidato");?>&ti=<?php echo base64_encode("1");?>"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</a></br> -->						

							      <!--<font color="#C8C8C8"> EDUCAÇÃO INFANTIL I (1 a 3 anos)</font></br>

                                -->

							      <!-- incluir CACAICS -->								

							      <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_CAMPO.php" target="_blank">QUADRO DE VAGAS ESCOLA DO CAMPO</a></a></br>	

							      

							      <!-- incluir ESCOLA S DO CAMPO -->								

							      <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_CCAIC.php" target="_blank">QUADRO DE VAGAS CCAIC</a></br>

                                   <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_transferencia_interna.php" target="_blank">QUADRO DE VAGAS DE TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS INTERNAS</a>

                                   

                                   

                                   </br>

                                   <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_transferencia_externa.php" target="_blank">QUADRO DE VAGAS DE TRANSFER&Ecirc;NCIAS DE MATR&Iacute;CULAS EXTERNAS</a>

                                   

                                   

                                   </br>

                                   <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_sorteados.php" target="_blank">QUADRO DE VAGAS DE SORTEADOS</a>

                                   

                                   

                                   </a></br>

                                   <a href="http://192.95.8.218/~pmdcsmen/sgm/LISTA_FINAL_1_FASE_DA_MATRICULA_SEM_FILA_2016_ NOVOS_ALUNOS.pdf" target="_blank">

                    LISTA DE ESTUDANTES CONTEMPLADOS DA PR&Eacute;-ESCOLA, DO 1&deg; ANO DO ENSINO FUNDAMENTAL E DA ETAPA I DO EJA

                    

                     </a>

                    </br>
                    
                    <a href="http://192.95.8.218/~pmdcsmen/sgm/Classificacao_1_a_3_anos_8_de_marco.pdf" target="_blank">
                   
  CLASSIFICA&Ccedil;&Atilde;O DE A 3 ANOS - 08 DE MAR&Ccedil;O DE 2016.<FONT color="#00CC00"><B> NOVO!</B></FONT> 
                   </a>

                    

                    

                    

                    <!--<a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_geral_segmento.php" target="_blank">

                    QUADRO GERAL DE VAGAS POR SEGMENTO

                    

                     </a>

                     -->

                    </br>

                                   

                                   

                                   

                                   	

							    </p>

                                

                     

							    <table class="table-responsive table-hover"  width="97%">

							      <tr>

							        <td colspan="3"><B>LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL(SORTEIO)</B></td>

						          </tr>

                                  <?php for($i=0;$i<$linha4;$i++){?> 

							      <tr>

							       <td width="60%"><a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/ListaCandidatoSorteioAssinaturaCreche.php?idunidade_escolar=<?php echo mysql_result($rs4,$i,'ue.idunidade_escolar');?>" target="_blank"><?php echo mysql_result($rs4,$i,'ue.descricao');?></a></td>

							       <td width="20%">

                                   <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/ListaCandidatoSomente_Sorteados.php?idunidade_escolar=<?php echo mysql_result($rs4,$i,'ue.idunidade_escolar');?>" target="_blank"><B>Sorteados</B></a></td>
							       <td width="20%"><a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/ListaCandidatoSomente_Reclassificados.php?idunidade_escolar=<?php echo mysql_result($rs4,$i,'ue.idunidade_escolar');?>" target="_blank"><B>Reclassificados</B></a></td>

						          </tr>

                                  <? }?>

							      </table>

							</div></div>

							      <!-- incluir 1º ANO FUNDAMENTAL  -->

							      

							      <!--- <a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_Ed_Infantil_Sorteio.php" target="_blank">LISTA DE INSCRITOS DA EDUCA&Ccedil;&Atilde;O INFANTIL(SORTEIO)</a></br>--><!-- PAINEL QUADRO DE VAGAS

                          

						  <div class="panel panel-info">

							  <div class="panel-heading">

									<h3 class="panel-title">Quadro Vagas</h3>

							</div>

								

								<div class="panel-body"><a href="#" target="_blank">

                               

                                <img src="img/quadro-vagas.png" border="0" class="img-responsive" /></a><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> 

								</div>

								

						  </div>

                          -->

							      

							      

							      </p>

							    

</div>

              

      

              <!-- consulta protocolo -->
              
              
               <div class="col-md-4">
               
               <!-- SEGUNDA FASE
               <?php if($_SESSION['idusuarios']=='18946'){?>								
							  
                 <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluirInfantil_Fundamental_Eja_Etapa2(manutencao-05-02-16-17-11).php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("1");?>"><div class="alert alert-info" role="alert">
  <B>
  <H2 align="center">MATR&Iacute;CULA DE SEGUNDA FASE<br>(FORA DO PRAZO) </H2></B></div></a>
                                
          -->
          
          
          <!-- TERCEIRA FASE (CRECHE)   -->
          <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluirEd_infantil_fora_do_prazo_MP.php");?>&form=<?php echo base64_encode("");?>&ti=<?php echo base64_encode("1");?>"><div class="alert alert-info" role="alert">
  <B>
  <H2 align="center">MATR&Iacute;CULA DE CRECHE<br>
  (TERCEIRA FASE) </H2></B></div></a>
          
            
               
               <!-- MAT TERCEIRA FASE   -->
                                         <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluirInfantil_Fundamental_Eja_Etapa3.php");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>"><div class="alert alert-info" role="alert">
  <B><H2 align="center"><B>MATR&Iacute;CULADE TERCEIRA FASE</B> </H2></B>
</div></a>
          		<?php }?>
                
             
            
                <div class="panel panel-info">

								<div class="panel-heading">

									<h3 class="panel-title">Pesquisar Protocolos</h3>

								</div>

								

								<div class="panel-body"><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->

							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/consulta_adm_protocolo.php");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>">CONSULTAR FICHAS</a></div>

								

	 

                <!--

        <div class="panel panel-info">

								<div class="panel-heading">

									<h3 class="panel-title">Inscrições fora do prazo</h3>

								</div>

								

								<div class="panel-body"><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> 

							    <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_transferencia_internaGestao.php");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>">TRANSFERÊNCIA INTERNA</a>

                          </br>      

                                <a href="default.php?pg=<?php echo base64_encode("view/candidatos/incluir_transferencia_externaGestao.php");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>">TRANSFERÊNCIA EXTERNA</a>

                                

                            -->    

                                

                                

                 </div>

								
  <!-- atualizar senha -->

              

             

      <div class="panel panel-info">

								<div class="panel-heading">

									<h3 class="panel-title">Atualiza&ccedil;&atilde;o de senha</h3>

								</div>

								

								<div class="panel-body"><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->

							    <a href="default.php?pg=<?php echo base64_encode("view/usuarios/alterar_senha.php");?>&amp;form=<?php echo base64_encode("Atualiza&ccedil;&atilde;o de senha");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/atualizar-senha.png" border="0" class="img-responsive" /></a></div> </div> 
                                
                                
                          
                                
                 </div>
                                


               <!-- PAINEL COM NOMES DAS ESCOLAS
               <div class="row-fluid"> 
               <div class="col-md-12">          
                <div class="panel panel-warning">

							<div class="panel-heading">

							  <h3 class="panel-title">Acesso direto &agrave;s Unidades Escolares</h3>

							</div>

								<!-- <img src="imagens/INSCRICAO.png" alt="100%"  class="img-responsive center-block" />-->

							<div class="panel-body"></a><!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> -->

								</br>

							  <!--<a href="http://192.95.8.218/~pmdcsmen/sgm/view/relatorios/quadroVagas_geral_segmento.php" target="_blank">

                    QUADRO GERAL DE VAGAS POR SEGMENTO

                    

                     </a>



                    </br>
			        
			        <table class="table-responsive table-hover"  width="97%">
			         
			          <tr>
			            <td >1</td>
			            <td>CCAIC - JARDIM GRAMACHO</td>
			            <td >91</td>
			            <td >EM JOSE CAMILO DOS SANTOS</td>
		              </tr>
			          <tr>
			            <td >2</td>
			            <td>CCAIC - OLAVO BILAC</td>
			            <td >92</td>
			            <td>EM MARCILIO DIAS</td>
		              </tr>
			          <tr>
			            <td >3</td>
			            <td>CRECHE ABNER MARQUES DE ABREU</td>
			            <td>93</td>
			            <td>EM MARECHAL MASCARENHAS DE MORAES</td>
		              </tr>
			          <tr>
			            <td >4</td>
			            <td>CRECHE COMUNITARIA SAO SEBASTIAO</td>
			            <td>94</td>
			            <td>EM MARIA CLARA MACHADO</td>
		              </tr>
			          <tr>
			            <td>5</td>
			            <td>CRECHE E PRE-ESC ELISA MATHIAS DE 
			              ARAUJO</td>
			            <td>95</td>
			            <td>EM MARILA?NDIA</td>
		              </tr>
			          <tr>
			            <td>6</td>
			            <td>CRECHE GANDUR ASSED</td>
			            <td>96</td>
			            <td>EM MINAS GERAIS</td>
		              </tr>
			          <tr>
			            <td>7</td>
			            <td>CRECHE GRACIESSE LUIZA DA SILVA 
			              LOURENCO</td>
			            <td>97</td>
			            <td>EM MONTEIRO LOBATO</td>
		              </tr>
			          <tr>
			            <td>8</td>
			            <td>CRECHE IRACY MOREIRA THEODORO</td>
			            <td>98</td>
			            <td>EM NISIA VILELA FERNANDES</td>
		              </tr>
			          <tr>
			            <td>9</td>
			            <td>CRECHE LAURA MENEZES DE FREITAS 
			              LIMA</td>
			            <td>99</td>
			            <td>EM NOSSA SENHORA APARECIDA</td>
		              </tr>
			          <tr>
			            <td>10</td>
			            <td>CRECHE e PRE-ESC MARIA JOSE 
			              DA CONCEICAO</td>
			            <td>100</td>
			            <td>EM NOSSA SENHORA DO PILAR</td>
		              </tr>
			          <tr>
			            <td>11</td>
			            <td>CRECHE PARTEIRA ODETE MARIA 
			              DE OLIVEIRA</td>
			            <td>101</td>
			            <td>EM PAULO ROBERTO DE MORAES LOUREIRO</td>
		              </tr>
			          <tr>
			            <td>12</td>
			            <td>CRECHE e EM BEN?SIO JOSE DA SILVA</td>
			            <td>102</td>
			            <td>EM PEDRO RODRIGUES DO CARMO</td>
		              </tr>
			          <tr>
			            <td>13</td>
			            <td>CRECHE e EM Dr ALVARO ALBERTO</td>
			            <td>103</td>
			            <td>EM PRESIDENTE COSTA E SILVA</td>
		              </tr>
			          <tr>
			            <td>14</td>
			            <td>CRECHE e EM POETISA CECILIA 
			              MEIRELES</td>
			            <td>104</td>
			            <td>EM PROF ALBERTO RIBEIRO VASCONCELLOS</td>
		              </tr>
			          <tr>
			            <td>15</td>
			            <td>CRECHE PROF LAURA DAQUINO 
			              LONGO</td>
			            <td>105</td>
			            <td>EM PROF JOAO FAUSTINO DE FRANCA SOBRINHO</td>
		              </tr>
			          <tr>
			            <td>16</td>
			            <td>CRECHE TEREZA DE LISIEUX</td>
			            <td>106</td>
			            <td>EM PROF PAULO FREIRE</td>
		              </tr>
			          <tr>
			            <td>17</td>
			            <td>CRECHE UBALDINA ALVES DA SILVA</td>
			            <td>107</td>
			            <td>EM PROF VILMAR BASTOS FURTADO</td>
		              </tr>
			          <tr>
			            <td>18</td>
			            <td>CRECHE PROF JOAO DE OLIVEIRA</td>
			            <td>108</td>
			            <td>EM PROF WALTER RUSSO DE SOUZA</td>
		              </tr>
			          <tr>
			            <td>19</td>
			            <td>CIEP 097 - CARLOS CHAGAS</td>
			            <td>109</td>
			            <td>EM PROF AMELIA CAMARA DOS SANTOS</td>
		              </tr>
			          <tr>
			            <td>20</td>
			            <td>CIEP 405 - MINISTRO SANTIAGO DANTAS</td>
			            <td>110</td>
			            <td>EM PROF ELIZABETH LOPES CABRAL</td>
		              </tr>
			          <tr>
			            <td>21</td>
			            <td>EM ALINE GONCALVES DE LIMA</td>
			            <td>111</td>
			            <td>EM PROF MARIA ANGER DIAS GUARINO</td>
		              </tr>
			          <tr>
			            <td>22</td>
			            <td>EM ALTO DA BOA VISTA</td>
			            <td>112</td>
			            <td>EM PROF MARIA DAS GRACAS CARDOSO BIGHI</td>
		              </tr>
			          <tr>
			            <td>23</td>
			            <td>EM ANA DE SOUZA HERDY</td>
			            <td>113</td>
			            <td>EM PROF SONIA REGINA SCUDESE DESSEMONE PINTO</td>
		              </tr>
			          <tr>
			            <td>24</td>
			            <td>EM ANA NERY</td>
			            <td>114</td>
			            <td>EM SETE DE SETEMBRO</td>
		              </tr>
			          <tr>
			            <td>25</td>
			            <td>EM ANISIO SPINOLA TEIXEIRA</td>
			            <td>115</td>
			            <td>EM TANCREDO NEVES</td>
		              </tr>
			          <tr>
			            <td>26</td>
			            <td>EM BARAO DO RIO BRANCO</td>
			            <td>116</td>
			            <td>CRECHE E PRE-ESC PROF ARMANDA A?LVARO ALBERTO</td>
		              </tr>
			          <tr>
			            <td>27</td>
			            <td>EM CARLOTA MACHADO</td>
			            <td>117</td>
			            <td>CIEP 227 - PROCOPIO FERREIRA</td>
		              </tr>
			          <tr>
			            <td>28</td>
			            <td>EEM CASTRO ALVES (PQ FELICIDADE)</td>
			            <td>118</td>
			            <td>EM ALMIRANTE TAMANDARE</td>
		              </tr>
			          <tr>
			            <td>29</td>
			            <td>EM CORA CORALINA</td>
			            <td>119</td>
			            <td>EM CARLOS DRUMMOND DE ANDRADE</td>
		              </tr>
			          <tr>
			            <td>30</td>
			            <td>EM DARCY RIBEIRO</td>
			            <td>120</td>
			            <td>EM MARCIO FIAT</td>
		              </tr>
			          <tr>
			            <td>31</td>
			            <td>EM DARCY VARGAS</td>
			            <td>121</td>
			            <td>EM PEDRO PAULO DA SILVA</td>
		              </tr>
			          <tr>
			            <td>32</td>
			            <td>EM Dr GASTAO REIS</td>
			            <td>122</td>
			            <td>EM PROF MARIA DE ARAUJO DA SILVA</td>
		              </tr>
			          <tr>
			            <td>33</td>
			            <td>EM Dr RICARDO AUGUSTO DE AZEREDO 
			              VIANNA</td>
			            <td>123</td>
			            <td>EM SENADOR AFONSO ARINOS</td>
		              </tr>
			          <tr>
			            <td>34</td>
			            <td>EM EXPEDICIONARIO AQUINO DE ARAUJO</td>
			            <td>124</td>
			            <td>CCAIC - XEREM</td>
		              </tr>
			          <tr>
			            <td>35</td>
			            <td>EM GENERAL SAMPAIO</td>
			            <td>125</td>
			            <td>CRECHE E PRE-ESC PROF MARi?LIA DA SILVA SIQUEIRA</td>
		              </tr>
			          <tr>
			            <td>36</td>
			            <td>EM GENERAL TIBURCIO</td>
			            <td>126</td>
			            <td>EM BRASI?LIA</td>
		              </tr>
			          <tr>
			            <td>37</td>
			            <td>EM GUSTAVO ARMBRUST</td>
			            <td>127</td>
			            <td>EM DR ELY COMBAT</td>
		              </tr>
			          <tr>
			            <td>38</td>
			            <td>EM HELENA AGUIAR MEDEIROS</td>
			            <td>128</td>
			            <td>EM LENI FERNANDES DO NASCIMENTO</td>
		              </tr>
			          <tr>
			            <td>39</td>
			            <td>EM HERMINIA CALDAS DA SILVA</td>
			            <td>129</td>
			            <td>EM PARQUE CAPIVARI</td>
		              </tr>
			          <tr>
			            <td>40</td>
			            <td>EM JARDIM GRAMACHO</td>
			            <td>130</td>
			            <td>EM PROF RAUL DE OLIVEIRA</td>
		              </tr>
			          <tr>
			            <td>41</td>
			            <td>EM JOAQUIM DA SILVA PECANHA</td>
			            <td>131</td>
			            <td>EM PROF MARIANA NUNES PASSOS</td>
		              </tr>
			          <tr>
			            <td>42</td>
			            <td>EM JOSE MEDEIROS CABRAL</td>
			            <td>132</td>
			            <td>EM SANTO AGOSTINHO</td>
		              </tr>
			          <tr>
			            <td>43</td>
			            <td>EM LAURENTINA CARDOSO DUARTE</td>
			            <td>133</td>
			            <td>EM SANTO IZIDRO</td>
		              </tr>
			          <tr>
			            <td>44</td>
			            <td>EM LIONS</td>
			            <td>134</td>
			            <td>EM SARGENTO JOAO DELIO DOS     SANTOS</td>
		              </tr>
			          <tr>
			            <td>45</td>
			            <td>EM MANOEL JOAQUIM SALGUEIRO</td>
			            <td>135</td>
			            <td>EM SERGIPE</td>
		              </tr>
			          <tr>
			            <td>46</td>
			            <td>EM MARECHAL MALLET</td>
			            <td>136</td>
			            <td>ADM - SME</td>
		              </tr>
			          <tr>
			            <td>47</td>
			            <td>EM MARIA JOSE DE OLIVEIRA</td>
			            <td>137</td>
			            <td>CIEP HENFIL 015</td>
		              </tr>
			          <tr>
			            <td>48</td>
			            <td>EM MAURO DE CASTRO</td>
			            <td>138</td>
			            <td>EM SANTO AMARO</td>
		              </tr>
			          <tr>
			            <td>49</td>
			            <td>EM OSWALDO CRUZ</td>
			            <td>139</td>
			            <td>CIEP 338- CELIA RABELO</td>
		              </tr>
			          <tr>
			            <td>50</td>
			            <td>EM PROF JAIR ALVES DE FREITAS</td>
			            <td>140</td>
			            <td>EM WANDA GOMES SOARES</td>
		              </tr>
			          <tr>
			            <td>51</td>
			            <td>EM PROF JOSE DE SOUZA HERDY</td>
			            <td>141</td>
			            <td>EM BARRO BRANCO</td>
		              </tr>
			          <tr>
			            <td>52</td>
			            <td>EM PROF MOTTA SOBRINHO</td>
			            <td>142</td>
			            <td>EM ROBERTO WEGUELIN DE ABREU</td>
		              </tr>
			          <tr>
			            <td>53</td>
			            <td>EM PROF ONERES NUNES OLIVEIRA</td>
			            <td>143</td>
			            <td>EM ROTARY</td>
		              </tr>
			          <tr>
			            <td>54</td>
			            <td>EM PROF ROMEU MENEZES DOS SANTOS</td>
			            <td>144</td>
			            <td>EM MONTESE</td>
		              </tr>
			          <tr>
			            <td>55</td>
			            <td>EM PROF HILDA DO CARMO SIQUEIRA</td>
			            <td>145</td>
			            <td>CIEP 407 - NEUSA GOULART BRIZOLA</td>
		              </tr>
			          <tr>
			            <td>56</td>
			            <td>EM PROF OLGA TEIXEIRA DE OLIVEIRA</td>
			            <td>146</td>
			            <td>EM NOVA CAMPINAS</td>
		              </tr>
			          <tr>
			            <td>57</td>
			            <td>EM PROF ZILLA JUNGER DA SILVA</td>
			            <td>147</td>
			            <td>CIEP 319 - ODUVALDO VIANA FILHO</td>
		              </tr>
			          <tr>
			            <td>58</td>
			            <td>EM RUY BARBOSA</td>
			            <td>148</td>
			            <td>EM LUIZ GAMA BORGES</td>
		              </tr>
			          <tr>
			            <td>59</td>
			            <td>EM SANTA TEREZINHA</td>
			            <td>149</td>
			            <td>EM PROF NILCELINA DOS SANTOS FERREIRA</td>
		              </tr>
			          <tr>
			            <td>60</td>
			            <td>EM SERGIPE (DOUTOR LAUREANO)</td>
			            <td>150</td>
			            <td>EM BARAO DA TAQUARA</td>
		              </tr>
			          <tr>
			            <td>61</td>
			            <td>EM TODOS OS SANTOS</td>
			            <td>151</td>
			            <td>EM EMBAIXADOR OSVALDO ARANHA</td>
		              </tr>
			          <tr>
			            <td>62</td>
			            <td>EM VILA OPERARIA</td>
			            <td>152</td>
			            <td>EM SOLANO TRINDADE</td>
		              </tr>
			          <tr>
			            <td>63</td>
			            <td>EM VINTE E UM DE ABRIL</td>
			            <td>153</td>
			            <td>EM MARECHAL FLORIANO PEIXOTO</td>
		              </tr>
			          <tr>
			            <td>64</td>
			            <td>EM VISCONDE DE ITABORAI</td>
			            <td>154</td>
			            <td>EM PROF AILA SALDANHA DO COUTO</td>
		              </tr>
			          <tr>
			            <td>65</td>
			            <td>EM WILSON DE OLIVEIRA SIMOES</td>
			            <td>155</td>
			            <td>CRECHE IRMA ARNALDA DA SILVA NEVES</td>
		              </tr>
			          <tr>
			            <td>66</td>
			            <td>CCAIC - CAMPOS ELISEOS</td>
			            <td>156</td>
			            <td>EM PROF CARMEM CORREA DE CARVALHO REIS BRAZ</td>
		              </tr>
			          <tr>
			            <td>67</td>
			            <td>CCAIC - PARQUE MUI?SA</td>
			            <td>157</td>
			            <td>EM PAULO RODRIGUES</td>
		              </tr>
			          <tr>
			            <td>68</td>
			            <td>CRECHE AYRTON SENNA</td>
			            <td>158</td>
			            <td>EM FRANCISCO BARBOZA LEITE</td>
		              </tr>
			          <tr>
			            <td>69</td>
			            <td>CRECHE E PRE-ESC PROF MARIA LUCIA ANDRADE RIBEIRO</td>
			            <td>159</td>
			            <td>CIEP 330 MARIA DA GLORIA CORREIA LEMOS</td>
		              </tr>
			          <tr>
			            <td>70</td>
			            <td>CRECHE PROF JESUI?NA FATIMA DE ANDRADE</td>
			            <td>160</td>
			            <td>CRECHE MONSENHOR LIBRELOTTO</td>
		              </tr>
			          <tr>
			            <td>71</td>
			            <td>CRECHE PROF ROSA ANGELICA FONSECA DE OLIVEIRA</td>
			            <td>161</td>
			            <td>EM PROF CARMEN LUCIA RESENDE ALVIM DA SILVA</td>
		              </tr>
			          <tr>
			            <td>72</td>
			            <td>CRECHE E PRE-ESC SEVERINA DOS RAMOS DA SILVA</td>
			            <td>162</td>
			            <td>EM SERGIPE (XEREM)</td>
		              </tr>
			          <tr>
			            <td>73</td>
			            <td>CRECHE VEREADOR JOSE CARLOSTHEODORO</td>
			            <td>163</td>
			            <td>CCAIC - JARDIM ANHANGA</td>
		              </tr>
			          <tr>
			            <td>74</td>
			            <td>CIEP 120 - MONTEIRO LOBATO</td>
			            <td>164</td>
			            <td>EM C.F.N EDUARDO GOMES DE OLIVEIRA</td>
		              </tr>
			          <tr>
			            <td>75</td>
			            <td>CIEP 220 - YOLANDA BORGES</td>
			            <td>165</td>
			            <td>EM GENERAL MOURAO FILHO</td>
		              </tr>
			          <tr>
			            <td>76</td>
			            <td>CIEP 318 - PAULO MENDES CAMPOS</td>
			            <td>166</td>
			            <td>EM SANTA LUZIA</td>
		              </tr>
			          <tr>
			            <td>77</td>
			            <td>CIEP 328 - MARIE CURIE</td>
			            <td>167</td>
			            <td>EM CAMPOS ELI?SEOS</td>
		              </tr>
			          <tr>
			            <td>78</td>
			            <td>EM ALBERTO SANTOS DUMONT</td>
			            <td>168</td>
			            <td>EM REGINA CELI DA SILVA CERDEIRA</td>
		              </tr>
			          <tr>
			            <td>79</td>
			            <td>EM ALBERT SABIN</td>
			            <td>169</td>
			            <td>EM JARDIM ANHANGA</td>
		              </tr>
			          <tr>
			            <td>80</td>
			            <td>EM ANTON DWORSAK</td>
			            <td>170</td>
			            <td>EM CARMEM LUCIA RESENDE ALVIN DA SILVA</td>
		              </tr>
			          <tr>
			            <td>81</td>
			            <td>EM BAIRRO CALIFORNIA</td>
			            <td>171</td>
			            <td>EM PROF DALVA BORGES DA CUNHA</td>
		              </tr>
			          <tr>
			            <td>82</td>
			            <td>EM BOM RETIRO</td>
			            <td>172</td>
			            <td>EM BAIRRO TABULEIRO</td>
		              </tr>
			          <tr>
			            <td>83</td>
			            <td>EM CORONEL ELISEU</td>
			            <td>173</td>
			            <td>EM BARAO DO AMAPA</td>
		              </tr>
			          <tr>
			            <td>84</td>
			            <td>EM DR MANOEL REIS</td>
			            <td>174</td>
			            <td>EM BRASIL ITALIA</td>
		              </tr>
			          <tr>
			            <td>85</td>
			            <td>EM DRA ZILDA ARMS NEUMANN</td>
			            <td>175</td>
			            <td>EM CORACAO DE JESUS</td>
		              </tr>
			          <tr>
			            <td>86</td>
			            <td>EM EULINA PINTO DE BARROS</td>
			            <td>176</td>
			            <td>EM PRESIDENTE VARGAS</td>
		              </tr>
			          <tr>
			            <td>87</td>
			            <td>EM GOVERNADOR MARIO COVAS JUNIOR</td>
			            <td>177</td>
			            <td>EM SANTA RITA</td>
		              </tr>
			          <tr>
			            <td>88</td>
			            <td>EM IMACULADA CONCEICAO</td>
			            <td>178</td>
			            <td>CCAIC AMAPA</td>
		              </tr>
			          <tr>
			            <td>89</td>
			            <td>EM JAYME FICHMAN</td>
			            <td>179</td>
			            <td>EM CASTRO ALVES (JARDIM OLIMPO)</td>
		              </tr>
			          <tr>
			            <td>90</td>
			            <td>EM JORNALISTA MOACYR PADILHA</td>
			            <td>180</td>
			            <td>EM ANEXO DARCY VARGAS</td>
		              </tr>
			          <tr>
			            <td></td>
			            <td></td>
			            <td>181</td>
			            <td>EM ANEXO WANDA GOMES</td>
		              </tr>
			          </table>
				  </div></div></div>
                
                
                
                </div></div>
                
                -->
                
                <!-- fim linha e coluna>
      </div>

      

      	  		

				 </div>

              

              

              

              

                        

                        <!-- PAINEL RELATÓRIOS E INSCRIÇÕES REALIZADAS 

<div class="col-md-6">

							<div class="panel panel-primary">

								<div class="panel-heading">

									<h3 class="panel-title">Relatórios</h3>

								</div>

								

								<div class="panel-body">

                                

                                

                                <div class="container-fluid">

                                <div class="row-fluid centered">

                                <div class="centered">

                                <div class="col-md-6">

                                

                                 <center> <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 1° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/1distrito.png" border="0" class="img-responsive" /></a> </center></div>

                                

                                

                                <div class="col-md-6">

                                

                                  <center><a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 2° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/2distrito.png" border="0" class="img-responsive"/></a> </center></div>

                              </div></div></div>

                                

                                 <div class="container-fluid">

                                <div class="row-fluid centered">

                                <div class="centered">

                                <div class="col-md-6">

                                

                                 <center> <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 3° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/3distrito.png" border="0" class="img-responsive"/></a></center> </div>

                                

                                <div class="col-md-6">

                                

                                <center>  <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/4distrito.png" border="0" class="img-responsive"/></a></center> </div>

                                

                              

                                

                                <div class="col-md-6">

                                

                                <center>  <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/relatorio_ed_especial.png" border="0" class="img-responsive"/></a></center> </div>

                                

                                

                                

                                <div class="col-md-6">

                                

                                <center>  <a href="default.php?pg=<?php echo base64_encode("");?>&amp;form=<?php echo base64_encode("Gráfico de Inscrição do 4° Distrito (2° Etapa)");?>&amp;ti=<?php echo base64_encode("2");?>"><img src="img/relatorio_ed_infantil.png" border="0" class="img-responsive"/></a></center> </div>

                                

                              FIM RELATÓRIOS NOVOS -->

                                 

                                 

                  </div> 

                  

                  

                  

                  </div>

				<!-- fim container-->

						

				

               <!-- INSCRIÇÕES REALIZADAS

               					

  <div class="row-fluid">

                               

								<div class="panel panel-primary">

								<div class="panel-heading">

									<h3 class="panel-title">Inscri&ccedil;&otilde;es Realizadas</h3>

								</div>

								

								<div class="panel-body">

								  <div class="panel-body">

								    <p><?php echo $linha4;?></a>

								      <!--								

									<img src="imagens/INSCRICAO.png" alt="" class="img-responsive img-rounded"> 

							        </p>

								    <p>

								      <?php if($linha4>0){?>

							        </p>

								    <div class="table-responsive">

                                   

								      <table class="table table-hover">

								        <tr class="active">

								          <td width="11%"><label class=" control-label" for="textinput">Protocolo</label></td>

								          <td><label class=" control-label" for="textinput">Nome</label></td>

								          <td><span class=" control-label">

								            <label class=" control-label" for="textinput">Unidade</label>

								            </span></td>

								          <td><label class=" control-label" for="textinput">Segmento</label></td>

								          <td><label class=" control-label" for="textinput">Ficha</label></td>

							            </tr>

								        <?php for($i=0;$i<$linha3;$i++){?>

								        <tr>

								          <td><?php echo @mysql_result($rs4,$i,'i.idinscricao');?></td>

								          <td width="22%"><?php echo @mysql_result($rs4,$i,'c.nome');?></td>

								          <td width="29%"><?php echo @mysql_result($rs4,$i,'ue.descricao');?></td>

								          <td width="23%"><?php echo @mysql_result($rs4,$i,'se.descricao');?></td>

								          <td width="15%"><a href="view/candidatos/ficha.php?&amp;id=<?php echo @mysql_result($rs3,$i,'c.idcandidatos');?>" target="_blank"><img src="img/imprimir.png" width="101" height="21" border="0" /></a></td>

							            </tr>

								        <?php }?>

							          </table>

							        </div>

								    <?php }else{



     echo "<b> Nenhuma inscrição realizada</b>";



    }



   ?>

							      </div>

                                  

                                 --><!-- fim container-->



                          
                          
                          

               </div>
				</div>

				<!--

					<div class="form-group">

			 			 

			        

					 <table align="center" border="0" cellpadding="0" cellspacing="0" width="943">

							<tbody><tr>

								<th rowspan="2" scope="col" width="28">

									&nbsp;

								</th>

								<th scope="col" height="133" width="226">

									<a href="Inscricao.aspx?acao=1" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','imagens/OVER/INSCRICAO_over.png',1)">

										<img style="border: none" src="imagens/INSCRICAO.png" id="Image6" height="133" width="226"></a>

								</th>

								<th scope="col" width="219">

									<a href="Consulta.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','imagens/OVER/CONSULTE_over.png',1)">

										<img style="border: none" src="imagens/CONSULTE.png" id="Image7" height="133" width="219"></a>

								</th>

								<th scope="col" width="220">

									<a href="Inscricao.aspx?acao=3" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image','','imagens/OVER/ALTERE_over.png',1)">

										<img style="border: none" src="imagens/ALTERE.png" id="Image" height="133" width="220"></a>

								</th>

								<th scope="col" width="222">

									<a href="Duvidas.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','imagens/OVER/DUVIDAS_over.png',1)">

										<img style="border: none" src="imagens/DUVIDAS.png" id="Image9" height="133" width="222"></a>

								</th>

								<th rowspan="2" scope="col" width="28">

									&nbsp;

								</th>

							</tr>

							<tr>

								<td height="130" width="226">

									<a href="ListaDeEscolas.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','imagens/OVER/LISTA_over.png',1)">

										<img style="border: none" src="imagens/LISTA.png" id="Image10" height="130" width="226"></a>

								</td>

								<td width="219">

									<a href="Resolucao.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','imagens/OVER/REGRAS_over.png',1)">

										<img style="border: none" src="imagens/REGRAS.png" id="Image11" height="130" width="219"></a>

								</td>

								<td width="220">

									<a href="ProximasFases.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','imagens/OVER/FASES_over.png',1)">

										<img style="border: none" src="imagens/FASES.png" id="Image12" height="130" width="220"></a>

								</td>

								<td width="222">

									<a href="Calendario.aspx" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','imagens/OVER/CALENDARIO_over.png',1)">

										<img style="border: none" src="imagens/CALENDARIO.png" id="Image13" height="130" width="222"></a>

								</td>

							</tr>

						</tbody>

					</table>

		 

		 </div> 

</form>-->

