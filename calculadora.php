<?php
 function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero";
    }
    return $a / $b;
}
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    switch ($operacion)
     {
        case "suma":
            $resultado = suma($num1, $num2);
            break;
        case "resta":
            $resultado = resta($num1, $num2);
            break;
        case "multiplicacion":
            $resultado = multiplicacion($num1, $num2);
            break;
        case "division":
            $resultado = division($num1, $num2);
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }
    echo "<h2>Resultado: $resultado</h2>";
}
?>
?>