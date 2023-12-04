<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Una calculadora simple</title>
</head>
<body>
    <form action="operar1.php" method="post">
        Ingrese primer valor:
        <input type="text" name="valor1">
        <br>
        Ingrese segundo valor:
        <input type="text" name="valor2">
        <br>
        <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br>
        <input type="submit" name="Calcular">
    </form>
</body>
</html>