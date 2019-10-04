<?php

$name = $_POST["playername"];
$speciality = $_POST["playerspec"];
$team = $_POST["playerteam"];

$dbconnection = pg_connect("host=localhost port=5432 dbname=Teams user=admin password=admin");

pg_query($dbconnection, "INSERT INTO jogadores(nomejogador, especialidade, timecod) VALUES ('$name', '$speciality', '$team')");

header("Location: index.php");