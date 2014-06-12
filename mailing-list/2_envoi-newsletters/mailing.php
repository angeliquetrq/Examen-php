<?php

if ($_POST) {
	extract($_POST);
}

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
    }
catch(PDOException $e)
    {
    echo "erreur : ".$e->getMessage();
    }

//récupération des données
$sql="SELECT * FROM newsletters";
$result=mysql_query($sql,$connect); 

//récupération du message dans le formulaire
$texte=$_POST['texte'];     
$sujet="La Gen C est en ligne";     //mise en forme du message

$entete="FROM: angelique.turquin0@gmail.com\n";
$entete .="MIME-Version: 1.0\n";
$entete .= 'Content-Type : text/html; charset="utf8"' ."\r\n";

$message .= $texte;

while($email=mysql_fetch_row($result))     //envoi du message à tous les emails de la base de données
{
$res=mail($email[1],$sujet,$message,$entete);
}
header ("Location: confirm.html");
?>

<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />

    <title>Login | Mailing List | Gen C</title>

    <meta name="author" content="gen c">
    <meta name="description" content="Un webdocumentaire sur la génération C">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="icon" type="image/png" href="img/favicon.png">
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

  </head>

	<body>

	</body>
</html>