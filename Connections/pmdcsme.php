<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_pmdcsme = "localhost";
$database_pmdcsme = "pmdcsme";
$username_pmdcsme = "root";
$password_pmdcsme = "";
$pmdcsme = mysql_pconnect($hostname_pmdcsme, $username_pmdcsme, $password_pmdcsme) or trigger_error(mysql_error(),E_USER_ERROR); 
?>