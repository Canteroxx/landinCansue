<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Lock</title>
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
            background: transparent;
            color: white;
            padding: 10px;
            font-size: 50px;
        }
        .welcome h2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -250%);
            background: transparent;
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
        <h1>Blue Lock</h1>
        <h2><a href="">Descarga Aqui</a></h2>
        <img src="gif/bluelock.gif" alt="">
    </div><br>
    <hr>
<?php
    include '../../bd.php';

    $gamesQuery = "SELECT * FROM juegos WHERE Nombre = 'Blue Lock'";
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