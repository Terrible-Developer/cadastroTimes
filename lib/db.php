<?php

function getTime($codTime){
  $dbconnection = pg_connect("host=#### port=#### dbname=Teams user=#### password=####");
      $result = pg_query($dbconnection, "SELECT nomejogador, especialidade, timecod FROM jogadores WHERE timecod = $codTime");
      while ($linha = pg_fetch_row($result)) {
        echo " Jogador: $linha[0] <br> Especialidade: $linha[1]      <button type='button' >:</button>";
        echo "<p>";
      }
}
