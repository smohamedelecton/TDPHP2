<?php
if(isset($_POST ["bouton"]))
{
$email= $_POST ['email'];
$objet= $_POST ['objet'];
$message= $_POST ['message'];
echo "email: $email <br> objet:$objet <br> message:$message"
if email('son email' , $objet , $message)
{
echo "votre mail a bien été envoyé"
}
else
{
echo "erreur"
}
else
{
echo "erreur, veuillez retourner à la page d'index"
?>
