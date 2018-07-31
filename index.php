<?php
$number = 1; // définition de la variable de départ
  ?>
  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8" />
      <title>Exercice 4</title>
    </head>
    <body>
      <p>
        <?php
        //défintion de la boucle
          while ($number <= 10 ){ //tant que $number est inférieur ou égale à 10
          echo $number . ' '; // afichage des résultats
          $number += $number / 2; // ajout de la moitié de sa valeur
          }
//variante avec une boucle for
          for($number = 1; $number <= 10; $number += $number / 2){ // pour $number est égale à 1, inférieur ou égale à 10, et ajout de la moité de sa valeur
          echo $number . ' '; // affichage des résultats
          }
         ?>
      </p>
    </body>
  </html>
