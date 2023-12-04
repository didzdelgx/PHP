<?php
if (isset($_REQUEST['valor1'])) {
    $num1 = $_REQUEST['valor1'];
    $num2 = $_REQUEST['valor2'];
    $op = $_REQUEST['operacion'];

    #validar si no estan vacios
    if(validar($num1, $num2)) {
        $res = 0;
        if($op == "suma") {
            $res = sumar($num1, $num2);
            print ("El resultado es: $res");
        }
        else if($op == "resta") {
            $res = restar($num1, $num2);
            print ("El resultado es: $res");
        }
        else if($op == "multiplicacion") {
            $res = multiplicar($num1, $num2);
            print ("El resultado es: $res");
        }
        else if($op == "dividir") {
            $res = dividir($num1, $num2);
            print ("El resultado es: $res");
        }
    } else {
        header("Location: index.php");
        exit();
    }
}

function validar($x, $y) {
    if(empty($x) || empty($y)) {
        return ""; #retornamos falso si estan vacios
    }else{
        return "1"; #no estan vacios
    }
}

function sumar($s1, $s2) {
    return $s1 + $s2;
}
function restar($r1, $r2) {
    return $r1 - $r2;
}
function multiplicar($m1, $m2) {
    return $m1 * $m2;
}
function dividir($d1, $d2) {
    return $d1 / $d2;
}
?>