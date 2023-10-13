<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Piece</title>
    <style>
        body {
            font-family: Georgia, serif;
            background-color: #f4f4f4;
            padding: 0;
            margin: 0;
        }
        .juego{
            padding: 50px;
            margin: 20px;
            columns: 2;
        }
        .juego img{
            height: 640px;
            width: 960;
            margin: 20px;
        }
        .info {
            flex: 2;
            text-align: center;
        }
        .info p{
            text-align: justify;
            word-spacing: 5px;
            font-size: 20px;
        }
        .welcome{
            position: relative;
            text-align: center;
        }
        .welcome img{
            width: 100%;
        }
        .welcome h1{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -300%);
            border-radius: 20px;
            color: black;
            padding: 10px;
            font-size: 50px;
        }
        .welcome h2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -250%);
            border-radius: 10px;
            color: white;
            font-size: 30px;
            padding: 10px;
        }
        hr{
            color: red;
            border: 1px solid;
            margin: 70px;
        }
    </style>
</head>
<body>
<div class="welcome">
        <h1>One Piece</h1>
        <h2><a href="">Descarga Aqui</a></h2>
        <img src="gif/onePiece.gif" alt="">
    </div><br>
    <hr>
<?php
    include '../../bd.php';

    $gamesQuery = "SELECT * FROM juegos WHERE Nombre = 'One Piece'";
    $gamesResult = $conn->query($gamesQuery);
    while ($games = $gamesResult->fetch_assoc()) {
        echo "<div class='juego'>";
        echo '<img src="' . $games['Imagen'] .'">';
        echo "<div class='info'>";
        echo '<h1>'. $games['Nombre']. '</h1>';
        echo '<h2>'. $games['Categoria']. '</h2>'. '<br>';
        echo '<p>'. $games['Descripcion']. '</p>';
        echo "</div>";
        echo "</div>";
    }
?>
</body>
</html>