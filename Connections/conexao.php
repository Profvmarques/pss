<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexao = " cdsesgm.cyqzmrzakx2i.us-west-2.rds.amazonaws.com";
$database_conexao = "sgm";
$username_conexao = "cdsesgm";
$password_conexao = "cdsek8r8s8n8a8";
$conexao = mysql_pconnect($hostname_conexao, $username_conexao, $password_conexao) or trigger_error(mysql_error(),E_USER_ERROR); 
?>