<?php
session_start();
$description = !empty($_POST['description']) ? $_POST['description'] : NULL;

$description=$_POST['description'];
include '_conf.php';
if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD)){
echo "Felicitation, vous êtes connecté à la BDD";
$requete= "INSERT INTO CR (description) VALUES ('$description')";
echo "<hr>$requete<hr>";
if (!mysqli_query($bdd,$requete)){
echo"<br>Erreur : " .mysqli_error($bdd)."<br>";
mysqli_close($bdd);
}
}
?>

