<?php
$host="localhost";
$username="root";
$password="";
$con=mysql_connect($host,"root","");
if(!$con){
    die("could not connect".mysql_error());
}
MySql_select_db("MyDB",$con);
$sql="CREATE TABLE person (Fname varchar(15), Lname varchar(15),Age int)";
MySql_query($sql,$con);
MySql_query("INSERT INTO person (Fname,Lname,Age)Values ('jay','D',21)");
mysql_close($con);
?>
