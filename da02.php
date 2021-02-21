<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<input type="button" onclick="history.back()" name="Volver Atrás" value="Volver Atrás" style="font-size: 20px; font-family: Candara;   font-weight: bold;"
>
<link rel="stylesheet" href="css/dados.css" type="text/css">
<head>
  <title>resultado</title>
</head>

<div align="center" style="font-family: Candara; font-size: 20px;">
<h1 style="font-family: Consolas; font-size: 80px; text-shadow: black 0.1em 0.1em 0.2em; color: #ffffff; "><b>SCORE</b></h1>
<body>

  <?php  

    $numeroDados = $_POST['numeroDados'];
    $numeroCaras = $_POST['numeroCaras'];
    $puntosOponente = $_POST['puntosOponente'];
    $sumaTotal = 0;

    function numAleatorio(){
      global $sumaTotal;
        
        $numeroCaras=$_POST['numeroCaras'];
        $numCarAle=rand(1, $numeroCaras);
        $sumaTotal+=$numCarAle;
        
        return $numCarAle;
      }

      if ($numeroDados == 1){
        echo "<img src='"."imgdado/".$numeroCaras.numAleatorio().".png'/>";
      }
      elseif ($numeroDados == 2){
        echo "<img src='"."imgdado/".$numeroCaras.numAleatorio().".png'/>";
        echo "<img src='"."imgdado/".$numeroCaras.numAleatorio().".png'/>";
      }
      elseif ($numeroDados== 3){
        echo "<img src='"."imgdado/".$numeroCaras.numAleatorio().".png'/>";
        echo "<img src='"."imgdado/".$numeroCaras.numAleatorio().".png'/>";
        echo "<img src='"."imgdado/".$numeroCaras.numAleatorio().".png'/>";
      }

  ?>

  <br></br>
      
    Puntos Obtenidos: <input value="<?php echo $sumaTotal;?>"><br>

      <?php 
        
        if ($puntosOponente>$sumaTotal){
          echo "<br><div style='font-family: Candara; font-size: 40px; font-weight: bold;
'>¡¡Pierdes!!</div>";
        }
        elseif ($puntosOponente<$sumaTotal){
          echo "<br><div style='font-family: Candara; font-size: 40px; font-weight: bold;
'>¡¡Ganas!!</div>";
        } 
        else{
          echo "<br><div style='font-family: Candara; font-size: 40px; font-weight: bold;
'>¡¡Empate!!</div>";
        }
      
      ?>
</div>      
</body>
</html>