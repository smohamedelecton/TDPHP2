<html>
<head>
<title> Mot de passe oublié </title>
</head>
<body>
<h2>
<p align="center"><font face="Vendera"> RETROUVER MDP</p></font>
</h2>
<br>
<?php 
if (isset($_POST['email']))
{
     $lemail=$_POST['email'];
   //  echo "le formulaire a été envoyé avec comme email la valeur :".$lemail;

//se connecter à la BDD
    include '_conf.php';
    if($bdd=mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD))
    {

    //A faire après la sélection BDD
$requete="Select * from UTILISATEUR WHERE email='$lemail'";
$resultat = mysqli_query($bdd, $requete);
$etat=0;
	while($donnees = mysqli_fetch_assoc($resultat))
	{
		$login =$donnees['login']; //mettre le nom du champ dans la table
		$mdp =$donnees['motdepasse'];
	    $etat=1;
	}

function motDePasse($longueur=5) {
$Chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$Chaine = str_shuffle($Chaine);
$Chaine = substr($Chaine,0,$longueur);
return $Chaine;
}

if ($etat==0)
{
echo "erreur: l'adresse mail n'appartient à aucun utilisateur";
}
else
{
echo "l'adresse email existe bien: nous allons vous envoyer votre mot de passe: <br>", motDepasse(32);
$mdp=motDepasse(32);
ini_set( 'display_errors', 1);
$to =$lemail;
$subject = "sioreport : mot de passe oublié";
$message = "Bonjour, voici votre mot de passe =$mdp";
$result=mail($to,$subject,$message);
if( !$result ){
    echo "L'envoi du mail a échoué";

}
}
}
else
{
echo "erreur connexion";
}
}
else
{
?>
<form method= "POST" action="oubli.php">
<p align="center">
Saisir email:
<input name="email">
<br><br>
<input type="submit" value="Confirmer">
</p>
<?php
}
?>



