<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przepis na pizzę</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #000000; /* жёлтый цвет фона */
            color: #27e900; /* коричневый цвет текста */
        }
        h1, h2, p {
            margin-bottom: 10px;
        }
        #ingredients, #instructions {
            margin-bottom: 20px;
        }
        img {
            float: left; /* Размещаем картинку слева */
            margin-right: 20px; /* Расстояние между картинкой и текстом */
        }
    </style>
</head>
<body>
    <h1>Przepis na pizzę</h1>

    <img src="https://th.bing.com/th/id/OIP.VCQQ1ZvdoxmewQHMn1s5vgHaE7?w=236&h=180&c=7&r=0&o=5&pid=1.7" alt="Przygotowana pizza">

    <h2>Składniki:</h2>
    <ul id="ingredients">
        <li>Ciasto na pizzę</li>
        <li>Sos pomidorowy</li>
        <li>Pomidory</li>
        <li>Ser mozzarella</li>
        <li>Pepperoni</li>
        <li>Oliwki</li>
        <li>Papryka</li>
        <li>Pieczarki</li>
    </ul>

    <h2>Instrukcje:</h2>
    <ol id="instructions">
        <li>Podgrzej piekarnik do 220°C.</li>
        <li>Rozwałkuj ciasto na pizzy na blasze do pieczenia.</li>
        <li>Nałóż sos pomidorowy na ciasto.</li>
        <li>Ułóż na cieście pomidory, pepperoni, oliwki, paprykę i pieczarki.</li>
        <li>Posyp pizzę startym serem mozzarella.</li>
        <li>Piecz pizzę w rozgrzanym piekarniku przez 15-20 minut lub aż do zrumienienia się ciasta.</li>
        <li>Po wyjęciu z piekarnika pozostaw pizzę na chwilę, aby przestygła, a następnie pokrój i podawaj.</li>
    </ol>
    <p>Chcesz zobaczyć przepis na <a href="soup_recipe.html">zupę</a>? Kliknij tutaj!</p>
</body>
</html>


<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "platforma_kulinarna_1k";
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("połąnczenie nieudane:".$conn->connect_error);
}
?>

