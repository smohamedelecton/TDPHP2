<?php
session_start();
include '_conf.php';



if($connexion = mysqli_connect($serveurBDD,$userBDD,$mdpBDD,$nomBDD))
      {
        
        $id=$_SESSION["id"];     
        //recupere tous les comptes rendus par date decroissante
         $requete="SELECT CR.* FROM CR,UTILISATEUR WHERE UTILISATEUR.num = CR.num_utilisateur AND UTILISATEUR.type=0";
        $resultat = mysqli_query($connexion, $requete);
        while($donnees = mysqli_fetch_assoc($resultat))
          {
         
            $num=$donnees['num'];
            $contenu=$donnees['description'];
            $note=$donnees['note'];

            echo "<table border=2><thead> <tr> <th colspan=2> <u>n°$num</u> </th> </tr> </thead>
            <tbody> <tr> <td>  $contenu</td> </tr> <tr> <td> note:$note <td> </tbody> </table> <br>"; 
        
          }
     }

?>
