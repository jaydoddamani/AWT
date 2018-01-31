<?php
$host = 'localhost';
$username="root";
$pswd="";
$con = mysql_connect($host);
$sql="CREATE DATABASE myDB";
mysql_query($sql,$con);

mysql_query("")
echo "Hello";
?>