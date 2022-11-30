    <html>
   
    <body>
   

<?php

session_start(); 
include '_confI.php';

if (isset($_POST['deco'])) //reçois données rentrée lors de la connexion
{
   
    $login = $_POST['login'];
    $password= md5($_POST['password']);

    $bdd = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD);
    $requete="Select * from UTILISATEUR WHERE login = 'test' AND motdepasse= '5f4dcc3b5aa765d61d8327deb882cf99'"; //recupere données utilisateur 
    //echo "<br> ma req SQL : $requete <br>";
    $resultat = mysqli_query($bdd, $requete);
    $trouve=0;
    while($donnees = mysqli_fetch_assoc($resultat))
      {
   
        $trouve=1;
        $type=$donnees['type'];
        $login=$donnees['login'];
        $id=$donnees['num'];
     // echo "je créé mes sessions !!!";
        $_SESSION["id"]=$id; //relie variable avec session
        $_SESSION["login"]=$login;
        $_SESSION["type"]=$type;
    
      }

    if($trouve==0)
    {
        echo "erreur de connexion";
    }
}
if (isset($_SESSION["login"]))
 
    {
        if($_SESSION["type"]==0)
        {
          ?>
         <ul class="nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="perso.php">Profil</a></li>
        <li><a href="compterendu.php">Compte rendus</a></li>
        <li><a href="ccr.php">Nouveau compte-rendu</a></li>
        </ul>
 
            <?php
            echo "bienvenue sur le compte élève <br> <br>";
            echo "Vous êtes connecté en tant que ".$_SESSION["login"]."<br> <br>";
           echo "<FORM method='post' action='index.php'> <button type=submit name='deco'> DECONNEXION </button> </form>";
        }
        else
        {
?>
              <ul class="nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="perso.php">Profil</a></li>
        <li><a href="compterendu.php">Compte rendus</a></li>
        </ul> </html
<?php
            echo "vous êtes un prof<br>";
            echo "<FORM method='post' action='index.php'> <button type=submit name='deco'> DECONNEXION </button> </form>";
        }
    }

    





?>

</html>










