<?php
session_start();
?>
<html>
<body>
<h2> Partie élève </h2>
</body>
</html>
<?php
echo "Bienvenu ";
echo $_SESSION['login'];
?>
<html>
<body>
<br> <p align="right"> <form method="POST" action="logout.php"> <input type="submit" value= "logout"> </form></p>
<br> <br> <form method="POST" action="commentaire.php"> <input type="submit" value= "Commentaire"> </form>&nbsp; &nbsp; &nbsp;
<form method="POST" action="compterendu.php"> <input type="submit" value= "Créer compte rendus"> </form>&nbsp; &nbsp; &nbsp;
<form method="POST" action="renduliste.php"> <input type="submit" value= "Liste de compte rendu"> </form>
</body>


