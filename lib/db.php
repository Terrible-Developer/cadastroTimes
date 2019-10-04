<?php

function getTime($codTime){
  $dbconnection = pg_connect("host=localhost port=5432 dbname=Teams user=admin password=admin");
      $result = pg_query($dbconnection, "SELECT nomejogador, especialidade, timecod FROM jogadores WHERE timecod = $codTime");
      while ($linha = pg_fetch_row($result)) {
        echo " Player: $linha[0] <br> Specialty: $linha[1]      <button type='button' >:</button>";
        echo "<p>";
      }
}
