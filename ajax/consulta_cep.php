<?php
require_once('../classes/logs.php');
$util = new Logs;
$util->consultar("select * from logradouro where cep='".$_POST['cep']."' order by cep;");
$linha=$util->Linha;
$resultado=$util->Result;

$xml = "<?xml version='1.0' encoding='iso-8859-1'?>\n";//cabeçalho do arquivo
       $xml .= "<webservicecep> \n";
 
       while($reg = mysql_fetch_object($resultado)){
               
    $xml .= "\t<resultado>$linha</resultado> \n";
    $xml .= "\t<resultado_txt>sucesso - cep único</resultado_txt> \n";
    $xml .= "\t<cep>$reg->cep</cep>\n";
    $xml .= "\t<endereco>$reg->endereco</endereco> \n";
    $xml .= "\t<bairro>$reg->bairro</bairro>\n";
    $xml .= "\t<municipio>$reg->municipio</municipio> \n";
    $xml .= "\t<uf>$reg->uf</uf> \n";
}
$xml .= "</webservicecep>";

$ponteiro = fopen('../xml/logradouro.xml', 'w'); //cria um arquivo com o nome backup.xml
fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo backup.xml

$ponteiro = fclose($ponteiro); //fecha o arquivo
//$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
$reg = simplexml_load_file("../xml/logradouro.xml");

$dados['sucesso'] = (string) $reg->resultado;
$dados['cep'] = (string) $reg->cep;
$dados['endereco'] = (string) $reg->endereco;
$dados['bairro'] = (string) $reg->bairro;
$dados['municipio'] = (string) $reg->municipio;
$dados['uf'] = (string) $reg->uf;

echo json_encode($dados);
 
?>