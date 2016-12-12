<?php 
session_start();
ob_start();


$server	    = 'localhost';
$username	= 'root';
$password	= '';
$database	= 'dentist';
/* mysql_query ('SET NAMES utf8'); */
if(!mysql_connect($server, $username, $password))
{
 	exit('Ka problem gjate lidhjes me databaz');
}
if(!mysql_select_db($database))
{
 	exit('Nuk mund te selektohet databaza');
}
?>