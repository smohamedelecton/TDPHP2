<?php
session_start();
?>

<html>
<head> <link href="style.css" media="all" rel="stylesheet" type="text/css"/> </head>
<body> </html>
<?php
include '_conf.php';
if ($_SESSION["type"] ==1) //si connexion en prof
  {
    ?>
    <html>
    <ul class="nav">
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="perso.php">Profil</a></li>
    <li><a href="cr.php">Compte rendus</a></li>
    </ul> </html> <?php

if($connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD))
      {
        $id=$_SESSION["id"];     
        $requete="SELECT* FROM UTILISATEUR WHERE type=1"; //recupere tous les comptes rendus par date decroissante
        $resultat = mysqli_query($connexion, $requete);
        while($donnees = mysqli_fetch_assoc($resultat))
          {
            $num=$donnees['num'];
          $prenom=$donnees['prenom']; // Permet de récupérer les données de la bdd
          $nom=$donnees['nom'];
          $mail=$donnees['email'];
          $tel=$donnees['tel'];
          echo 'prénom:';
            echo $prenom;
            echo'<br>';
            echo 'nom: ';
            echo $nom;
            echo'<br>';
            echo 'mail:';
            echo $mail;
            echo'<br>';
            echo 'téléphone:';
            echo $tel;
            
}
 }
} 
else
  {
    ?>
    <html>
    <ul class="nav">
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="perso.php">Profil</a></li>
    <li><a href="cr.php">Compte rendus</a></li>
    <li><a href="ccr.php">Nouveau compte-rendu</a></li>
    </ul> </html> <?php

if($connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD))
      {
        $id=$_SESSION["id"];     
        $requete="SELECT* FROM UTILISATEUR WHERE type=0 AND UTILISATEUR.num=$_SESSION[id]"; //recupere tous les comptes rendus par date decroissante
        $resultat = mysqli_query($connexion, $requete);
        while($donnees = mysqli_fetch_assoc($resultat))
          {
            $num=$donnees['num'];
          $prenom=$donnees['prenom']; // Permet de récupérer les données de la bdd
          $nom=$donnees['nom'];
          $mail=$donnees['email'];
          $tel=$donnees['tel'];
          echo 'prénom:';
            echo $prenom;
            echo'<br>';
            echo 'nom: ';
            echo $nom;
            echo'<br>';
            echo 'mail:';
            echo $mail;
            echo'<br>';
            echo 'téléphone:';
            echo $tel;
            
}
 }
  }



  
?>


