<?php

session_start();

// Cr�er les variables de tous les input
if($_POST)
	{
	extract($_POST);

$_SESSION['email'];

// Insertion des donn�es dans la base 'membres'
try{

	if($newsletters=='inscription'){
		$requete = "INSERT INTO newsletters (email) VALUES (:email)";
		$stmt = $bdd->prepare($requete);
		$stmt->execute(array(
            ':email' =>$email,
            ));
		$result=mysql_query($sql,$connect);
		$disconnect=mysql_close($connect); 
		header ("Location: confirm.html");

	} else if($newsletters== 'desinscription'){
		$sql = "DELETE FROM newsletters WHERE email ='$email'";
		$result=mysql_query($sql,$connect);
		$disconnect=mysql_close($connect); 
		header ("Location: confirm-desinscription.html");
	}
}

catch(PDOException $e)
	{
		echo 'Erreur : '.$e->getMessage();
	}

}

?>

