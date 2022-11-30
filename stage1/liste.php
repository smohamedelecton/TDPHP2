<?php
  session_start();
  include('_confI.php');
 
  if (!isset($_SESSION['id'])){
    header('Location: index.php');
    exit;
  }
   if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
    {
  // On récupère tous les utilisateurs sauf l'utilisateur en cours
  $afficher_profil = $bdd->query("SELECT * 
    FROM utilisateur 
    WHERE id <> ?",
    array($_SESSION['login']));
  $afficher_profil = $afficher_profil->fetchAll(); 
?>
<html lang="fr">
  <head>
    <title>Utilisateurs du site</title>
  </head>
  <body>      
    <div>Utilisateurs</div>
    <table>
      <tr>
        <th>Nom</th> 
        <th>Prénom</th>
        <th>Voir le profil</th>
      </tr>
      <?php
       foreach($afficher_profil as $ap){
        ?>
          <tr>          
            <td><?= $ap['nom'] ?></td>
            <td><?= $ap['prenom'] ?></td>
            <td><a href="voir_profil.php?id=<?= $ap['login'] ?>">Aller au profil</a></td>
          </tr>
        <?php
        }
}
      ?>
    </table>
  </body>
</html>
