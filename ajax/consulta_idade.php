<?php
require_once('../classes/util.php');
$util = new Util();
$idade= $util->obterIdade($_POST['nascimento']);

$xml = "<?xml version='1.0' encoding='iso-8859-1'?>\n";//cabeçalho do arquivo
       $xml .= "<webserviceidade> \n";
 
      
               
    $xml .= "\t<resultado>1</resultado> \n";
    $xml .= "\t<resultado_txt>sucesso - idade</resultado_txt> \n";;
    $xml .= "\t<idade>$idade</idade> \n";

$xml .= "</webserviceidade>";

$ponteiro = fopen('../xml/idade.xml', 'w'); //cria um arquivo com o nome backup.xml
fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo backup.xml

$ponteiro = fclose($ponteiro); //fecha o arquivo
//$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
$reg = simplexml_load_file("../xml/idade.xml");

$dados['sucesso'] = (string) $reg->resultado;
$dados['idade'] = (string) $reg->idade;
$dados['endereco'] = (string) $reg->endereco;

echo json_encode($dados);
 
?>