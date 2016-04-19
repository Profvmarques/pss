<?php 
ob_start();  //inicia o buffer

$arquivo = 'planilha_'.date('Y-m-d_H:i:s').'.xls';

// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );

?>
<table width="200" border="0" align="center">
  <tr>
    <td bgcolor="#999999"><center>aaa</center></td>
    <td bgcolor="#999999"><center>bbb</center></td>
    <td bgcolor="#999999"><center>ccc</center></td>
  </tr>
  <tr>
    <td><center>111</center></td>
    <td><center>333</center></td>
    <td><center>555</center></td>
  </tr>
  <tr>
    <td><center>222</center></td>
    <td><center>444</center></td>
    <td><center>555</center></td>
  </tr>
</table>

<?php 
    $html = ob_get_clean();	 
	$html = utf8_encode($html);
	echo $html;
exit;
?>
