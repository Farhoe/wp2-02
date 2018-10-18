<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Potvrzení věku zatím</h1>

      <?php
      $submit=filter_input(INPUT_POST,'submit');
      $age=filter_input(INPUT_POST,'age');
      $gender=filter_input(INPUT_POST,'gender');
      ?>

      <?php

      if ($age>=18)
      {
        if ($gender=="male") {
          echo "Bude tě to jako stát stovku";
        }
        else {
          echo "Tak slečno. To bude zadarmo.";
        }
      }
      else {
        echo "Takže ti jako není osmntáct? Tak si ještě počkej. ";
      }

      ?>

  </body>
</html>
