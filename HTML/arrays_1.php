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
              $fruits = array("Apple", "Banana", "Cherry");
              array_push($fruits, "Orange");

              echo "<pre>";
              print_r($fruits);
              echo "</pre>";   
              
              ?>
          </div>
    </div>
    
  </body>
</html>