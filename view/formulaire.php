<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>
<body>
<?php include "../include/menu.php"; ?>
<form class="formg" method="POST" action="#">
  <ul>
    <li><label for=name>Name:</label>

        <input name="nom" id=name ></li>

    <li><label for=email>Email:</label>

        <input name="email" id=email  type=email></li>

        <li><label for=message>Message</label>

        <textarea name="message" class="mess"></textarea>

     <input type="submit" name="submit" value="Envoyer">
    
    </li>
    

   
    
  </ul>
</body>
</html>