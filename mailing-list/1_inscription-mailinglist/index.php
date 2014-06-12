<?php
if ($_POST) {
	extract($_POST);

	$erreur = array();

    if(empty($email)){

        $erreur['email'] = "* Tu as oublié de mentionner ton adresse email";

    }else{

    	$isValidEmail = preg_match("/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+.)+[a-zA-Z]{2,4}$/", $email)?$email:null;

        if(empty($isValidEmail)){

        	$erreur['email'] = "* Petite erreur, ton adresse e-mail n'est pas valide";
        }

    }

	if(empty($erreur)){
        include("login-bdd.php");
    }

}

?>
<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />

    <title>Mailing List | Gen C</title>

    <meta name="author" content="gen c">
    <meta name="description" content="Un webdocumentaire sur la génération C">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/main.css">

    <link rel="icon" type="image/png" href="img/favicon.png">
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

  </head>

<body>

	<header>
      <section class="genc">
       
          <h1><span class="intro_titre">Mailing List<br/>Rencontre la Gen <span class="red">C</span></span></h1>
            

			<form class="formulaire" method="post" action="index.php">
				<ol class="form-list">
					<li>
						<span class="emailContact"><?php if(isset($erreur) && array_key_exists('email', $erreur)) { echo $erreur['email'];} ?></span>
						<input name="email" id="email" placeholder="Ton email">
					</li>
					<li>
						<input type="radio" name="newsletters" value="inscription" id="inscription" checked="checked"/> 
						<label for="inscription">inscription</label>
					</li>
					<li> 
						<input type="radio" name="newsletters" value="desinscription" id="desinscription" /> 
						<label for="desinscription">desinscription</label>
					</li>
					<li>
						<input id="submit" name="submit" type="submit" value="Confirmer">
					</li>
				</ol>
			</form>
      </section>
      <section class="under-promo">
        <p class="vertical-align">Qui sont ces personnes toujours connectées ?</p>
      </section>
    </header>



</body>
</html>