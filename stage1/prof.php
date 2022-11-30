<?php
session_start();
?>
<html>
<body>
<h2> Partie Professeur </h2>
</body>
</html>
<?php
echo "Bienvenu ";
echo $_SESSION['login'];
?>
<html>
<body>
<br> <p align="right"> <form method="POST" action="logout.php"> <input type="submit" value= "logout"> </form></p>
<br> <br> <form method="POST" action="liste.php"> <input type="submit" value= "liste eleve"> </form>&nbsp; &nbsp; &nbsp;
<form method="POST" action="renduliste.php"> <input type="submit" value= "Liste de compte rendu"> </form>&nbsp; &nbsp; &nbsp;
