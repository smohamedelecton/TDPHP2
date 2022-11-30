<html>
<body>
<form method="POST" action="accueil.php">
<P align=center>
Login:
<input name='login'>
<br><br>
Mot de passe:
<input name="password">
<br>
<br>
<br>
<input type="submit" name="send_con" value="OK">
</form>
<a href= oubli.php > mdp oublié </a> 
</body>
<?php 
if (isset($_POST['send_con']))
{
$Login=$_POST['login'];
$password=$_POST['password'];
}
?>
<?php
include '_confI.php';

if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
{
  echo "connexion BDD a réussi !";
}
else
{
  echo "Erreur";
}
?>

