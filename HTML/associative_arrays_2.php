<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Learn PHP</h1>
          
          <div class="code">
              <?php
              $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

              echo $car["brand"];

              echo "<hr>";

              echo $car[0]; //Not working

              var_dump($car);     
              ?>
          </div>
    </div>
    
  </body>
</html>