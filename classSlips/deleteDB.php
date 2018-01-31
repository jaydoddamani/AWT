<?php
$host="localhost";
$con=mysql_connect($host,"root","");
if(!$con){
    die("could not connect".mysql_error());
}
MySql_select_db("MyDB",$con);
$sql="delete from person WHERE Fname='jay'";
Mysql_query($sql,$con);
echo "Record Delete";
mysql_close($con);
?>