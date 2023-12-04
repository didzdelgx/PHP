<?php
class Automovil {
    public $color, $marca, $motor;
    public function obtener_color()
    {
        return $this->color;
    }
}
//crear 3 objetos de tipo Automovil
$auto1 = new Automovil();
$auto1->color = 'verde';
$auto1->marca = 'Toyota';
$auto1->motor = 2.0;

$auto2 = new Automovil();
$auto2->color = 'gris';
$auto2->marca = 'Ford';
$auto2->motor = 1.5;

//agregar un tercer auto
?>
<h3>Imprimir los colores de autos disponibles </h3>
<?php
    echo "Primer auto: ".$auto1->obtener_color();
    echo "<br>Segundo auto: ".$auto2->obtener_color();
    echo "<br>Tercer auto: ";

?>