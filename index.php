<?php

include_once "calculadora.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/Css//stylce.css">
</head>

<body>

  <header class="header">
    <h1>Calculadora</h1>
  </header>
  <!--header-->

  <form class="form" action="" method="get">
    <input required type="number" name="number1" placeholder="Digite Um Valor">
    <input required type="number" name="number2" placeholder="Digite Um Valor">
    <select name="calcular">
      <option value="somar">Somar</option>
      <option value="subtrair">Subtrair</option>
      <option value="multiplicar">Multiplicar</option>
      <option value="dividir">Dividir</option>
    </select>
    <input id="btn" type="submit" name="calc" value="Calcular">
    <p><?php echo $result ?></p>
  </form>
  <!--form-->

</body>

</html>