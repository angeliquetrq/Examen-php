<?php

//connexion à mysql
$hostname="localhost";
$account="angeliqueturquin";
$password="4iT4kKteZoBbKi7w";
$dbname="angeliqueturquin";
$connect=mysql_connect($host,$account,$password);
$db=mysql_select_db($dbname,$connect);

try {
    $bdd = new PDO("mysql:host=$hostname;dbname=angeliqueturquin", $username,$password);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	include "config.inc.php";
    }
catch(PDOException $e)
    {
    echo "erreur : ".$e->getMessage();
    }

?>