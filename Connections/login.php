<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_login = "localhost";
$database_login = "login_id";
$username_login = "root";
$password_login = "";
$login = mysql_pconnect($hostname_login, $username_login, $password_login) or trigger_error(mysql_error(),E_USER_ERROR); 
?>