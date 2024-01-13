<?php 
session_start();
$connect=mysql_connect("localhost",'root',"123");
if($connect==0)
{
echo "connection failed";
}
$database=mysql_select_db("medical_new",$connect);

if($database==0)
{
echo "database  cant select";
}

$path="http://localhost/deendayal/project1/medical/";
?>