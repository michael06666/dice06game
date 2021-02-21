<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/dados.css" type="text/css">
<head>
  <title>dados</title>
</head>

<div align="center" style="font-family: Candara; font-size: 20px;">
<h1 style="font-family: Consolas; font-size: 80px; text-shadow: black 0.1em 0.1em 0.2em; color: #ffffff; "><b>DICE</b></h1>
<body>
  <form action="da02.php" method="post">
    Número de dados:
      <select name="numeroDados" style="font-size: 15px;">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select><br><br>
    Número de caras:
      <select name="numeroCaras" style="font-size: 15px;">
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="20">20</option>
      </select><br><br>
    Puntos Oponente: <input type="text" name="puntosOponente"><br><br>
      <input type="submit" name="nombreBoton" value="¡Suerte!" style="font-size: 20px; font-family: Candara;   font-weight: bold;
">
  </form>
</div>
</body>
</html>