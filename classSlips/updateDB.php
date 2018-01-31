<?php
$host="localhost";
$con=mysql_connect($host,"root","");
if(!$con){
    die("could not connect".mysql_error());
}
MySql_select_db("MyDB",$con);
$sql="Update person SET Age='100' WHERE Fname='jay'";
Mysql_query($sql,$con);
echo "Record  Updated";
mysql_close($con);
?>