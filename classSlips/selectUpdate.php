<?php
$host="localhost";
$con=mysql_connect($host,"root","");
if(!$con){
    die("could not connect".mysql_error());
}
MySql_select_db("MyDB",$con);
$q=mysql_query("select * from person");
while($row=Mysql_fetch_array($q)){
    echo $row[0];
    echo $row[1];
    echo "<br>";
}
mysql_close($con);
?>