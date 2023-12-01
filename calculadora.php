<?php



$result = 0;
$number1 = 0;
$number2 = 0;
$calcular = 'somar';

if (isset($_GET['calc'])) {
  $number1 = $_GET['number1'];
  $number2 = $_GET['number2'];
  $calcular = $_GET['calcular'];

  if ($number1 === "" || $number2 === "") {
    $result = "Preencha os Campos";
  } else {

    switch ($calcular) {
      case 'somar':
        $result = $number1 + $number2;
        break;
      case 'subtrair':
        $result = $number1 - $number2;
        break;
      case 'multiplicar':
        $result = $number1 * $number2;
        break;
      case 'dividir':
        $result = $number1 / $number2;
        break;
    }
  }
}