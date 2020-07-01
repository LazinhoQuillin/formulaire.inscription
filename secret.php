<!DOCTYPE html>
<html>
  <head>
    <title>Hello!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
  </head>  
  <body>

  <?php
    $good_email = 'lazinho@gmail.com';
    $good_password = 'test';
  ?>

<?php
    if(isset($_POST["email"], $_POST["password"])) {

        if($_POST["email"] == $good_email && $_POST["password"] == $good_password) {
          echo "bonjour " . $_POST["email"];
          echo "<div class='secret'>
          <h1>Contenu hyper secret</h1> 
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique iaculis lorem. Sed dapibus posuere eros, tincidunt vehicula diam tempor id. In hac habitasse platea dictumst. Pellentesque vestibulum ante sit amet tempor hendrerit. Duis pulvinar porttitor tempor. Nullam nec neque non ex ultrices posuere. Aliquam sagittis risus nibh, a ultricies erat efficitur vel. Phasellus ac aliquam dolor, nec commodo tortor. Duis et nisl sapien. Duis at molestie dolor. Donec varius elit magna, eu mollis ante consequat nec. Sed mollis, urna vitae bibendum convallis, nibh est posuere leo, vitae venenatis nunc erat sit amet magna. 
          </p>
        <br></div>";
        }
        else {
            echo "email ou mot de passe erroné";
        }
      }


?>

<?php 

?>


    


    
    <script src="script.js"></script>
  </body>
</html>
