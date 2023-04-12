<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>
<body class="tutoview">
<?php include "../include/menu.php"; ?>
<h1 class="tuto">Mon Tuto</h1>
<p class="textbur"> 1. Un menu burger CSS est lorsque vous cliquez sur une icône de menu à trois lignes.<br>
<br>Exemple ci-dessous :<br>
</p>
<img class="imgbur" src="../public/img/6499731.png"><br>

<br><p class="textbur"> 2. Nous avons besoin de deux éléments, un boutton pour l'icône et un nav pour le menu lui-même. La nav élément doit être imbriqué dans le bouton.</p><br>
<img class="imgbur1" src="../public/img/petit.png"><br>


<br><p class="textbur"> 3. Ensuite, vous devez remplir votre menu avec tout ce que vous voulez. </p><br>
<img class="imgbur1" src="../public//img/gr.png"><br>

<br><p class="textbur"> 4. Voici le résultat attendu pour l’instant :</p><br>
<img class="imgbur1" src="../public/img/menu.png">

<br><p class="textbur"> 5. Maintenant nous allons rendre notre menu burger cliquable.</p><br>
<img class="imgbur1" src="../public/img/tous.png">


<br><p class="textbur"> 6. On n’oublie pas le CSS, nous allons rajouter un menu lorsqu' on clique dessus et nos différente pages apparaitrons.</p><br>
<img class="imgbur1" src="../public/img/court.png">

<br><p class="textbur"> 7. Et aussi une transition (animation) qui fera apparaitre notre menu en venant du côté gauche. </p><br>
<img class="imgbur1" src="../public/img/mini.png">

<br><p class="textbur"> 8. Voici le résultat quand on clique sur notre  menu Burger. </p><br>
<img class="imgbur1" src="../public/img/fin.png">

<h1 class="tuto1">Rendre le menu hamburger responsif avec CSS</h1>
<br><p class="textbur"> 1. Nous devons choisir un point d'arrêt - une largeur d'écran qui fera basculer l'affichage entre le menu pleine largeur et le menu hamburger CSS. </p><br>
<p class="textbur">Lorsque l'écran est inférieur à 750px, ces styles seront appliqués.</p>
<img class="imgbur1" src="../public/img/resp.png">

<h1 class="tuto1">Le Choix du Tuto</h1>
<br><br><p class="textbur">J'ai choisi ce tuto car je trouve qu'il est assez complet concernant le language de php, moi-meme ayant des diffciultés en php, je me suis informé via ces videos. </p><br><iframe class="imgbur1" width="560" height="315" src="https://www.youtube.com/embed/CLJRUiajm8I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
 <button id="btdm" onClick="darkMode()"> Dark Mode </button><script src="./javascript/script.js"></script>
</body>
</html>