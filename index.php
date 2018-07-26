<?php
$number = 1;
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
while ($number <= 10 )
{
  echo $number . ' ';
  $number = $number + ($number / 2);
}
 ?>
      </p>
    </body>
  </html>
