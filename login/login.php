<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
if(isset($_SESSION['nombre'])){
    $usuario = $_SESSION['nombre'];
    echo "<p>Bienvenido $usuario !";
}else{
    echo "Acceder";
    echo "<form action='dashboard.php' method='POST'>";
    echo "<input type='text' name= 'nombre'>";
    echo "<button type ='submit'>Acceder</button>";
    echo "</form>";
}
?>
</body>
</html>