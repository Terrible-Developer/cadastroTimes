<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="container">
      <div id="insidious">
        <form action="backend.php" method="POST">
          Cadastrar Jogador <br />
          Nome: <input type="text" name="playername" /> <br />
          Especialidade:<input type="text" name="playerspec" /> <br />
          Time:<select name="playerteam">
            <option value="1">Azul</option>
            <option value="2">Vermelho</option>
            <option value="3">Preto</option>
            <option value="4">Amarelo</option>
          </select>
          <br />
          <input type="submit" value="Cadastrar" />
        </form>
      </div>
    </div>
    <div class="timesesquerda" id="timeazul">
      <span class="title">Blue Team</span> <br>
      <?php 
      include 'lib/db.php';
      getTime(1);
      ?>
      
    </div>
    <div class="timesesquerda" id="timevermelho">
      <span class="title">Red Team</span> <br>
      <?php
      getTime(2);
      ?>
    </div>
    <div class="timesdireita" id="timepreto">
      <span class="title">Black Team</span> <br>
      <?php
      getTime(3);
      ?>
    </div>
    <div class="timesdireita" id="timeamarelo">
      <span class="title">Yellow Team</span> <br>
      <?php
      getTime(4);
      ?>
    </div>
  </body>
</html>
