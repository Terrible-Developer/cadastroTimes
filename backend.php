<?php

$name = $_POST["playername"];
$speciality = $_POST["playerspec"];
$team = $_POST["playerteam"];

$dbconnection = pg_connect("host=#### port=#### dbname=Teams user=#### password=####");

pg_query($dbconnection, "INSERT INTO jogadores(nomejogador, especialidade, timecod) VALUES ('$name', '$speciality', '$team')");

header("Location: index.php");
