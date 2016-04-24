<?php
ob_start();  //inicia o buffer
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!--Load the AJAX API-->
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <script type="text/javascript">
 // Carregue o API Visualization e o pacote piechart.
 google.load('visualization', '1', {'packages':['corechart']});
 
 // Defina um callback a ser executado quando o API de visualização do Google é carregado.
 google.setOnLoadCallback(drawChart);
 
 function drawChart() {
 var jsonData = $.ajax({
 url: "http://faeterj-caxias.net/sgm2/json/geraDadosDistritoEnsino.php",
 dataType:"json",
 async: false
 }).responseText;
 
 // Coloque aqui as configurações do gráfico, acesse a documentação para mais opções
 var options = {'title':'<?php echo utf8_encode("Gráfico de Pré-inscrição do 1° Distrito (2° Etapa)");?>',
 'width':1000,
 'height':680};
 
 // Create our data table out of JSON data loaded from server.
 var data = new google.visualization.DataTable(jsonData);
 
// Instancia o gráfico com as opções definida na function drawChart() lá em cima
 var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
 
 //Desenha o gráfico
 chart.draw(data, options);
 }
 
</script>

</head>

  <center>
    <div id="chart_div"></div>
	</center>

</body>
</html>