<?php

@session_start();
$login=$_POST['login'];
$password=$_POST['password'];
if ($login!="tfedwm14" || $password!="tfedwm14")
{
unset ($login, $password);
echo "<div align='center' class='Style2'>Le login et le mot de passe sont incorrects</div>";
include("index.html");
exit();
}
?>

<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />

    <title>Formulaire Newsletters | Mailing List | Gen C</title>

    <meta name="author" content="gen c">
    <meta name="description" content="Un webdocumentaire sur la génération C">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">

    <link rel="icon" type="image/png" href="img/favicon.png">
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    
  </head>

<body>
    <section class="presentation">
      <h1>Formulaire Newsletters</h1>
    </section>

    <form class="formnews" name="form1" method="POST" action="mailing.php">
      <ul>
        <li>
          <label>Message</label>
          <textarea name="texte" cols="100" rows="20" id="texte"></textarea>
        </li>

        <li>
          <input type="submit" name="Submit" value="Envoyer">
        </li>

      </ul>
    </form>

</body>
</html>