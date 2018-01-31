<?php
$host="localhost";
$username="root";
$password="";
$con=mysql_connect($host,"root","");
if(!$con){
    die("could not connect".mysql_error());
}
$sql="CREATE DATABASE MyDB";
MySql_query ($sql,$con);
MySql_close($con);
?>