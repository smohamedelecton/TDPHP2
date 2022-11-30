<?php
session_start();
?>
<html>
<body>
<p align="center"> <h2> Affichage compte rendu </h2></p>
<br>
<form>
<input type="date" name="datetime"></form>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<form method="POST" action="enregistrer.php"><input type="submit" value= "insérer">
<br><br> <textarea name="description" value="description" rows=40 cols=100>
Compte rendu
</textarea>
</form>
<br><br><form method="POST" action="commentaire.php"> <input type="submit" value= "commentaire">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" value= "modifier"> </form>

