<?php
    class Persona{
        public $nombre, $telefono;

        public function __construct($nombre, $telefono){
            $this->nombre = $nombre;
            $this->telefono = $telefono;
        }

        public function obtener_datos(){
            return "Nombre: ".$this->nombre."<br>Telefono: ".$this->telefono;
        }
}

class Alumno extends Persona{
    private $grado;
    private $turno;
    
    public function __construct($nombre, $telefono, $grado, $turno){
        parent::__construct($nombre, $telefono);
        $this->turno = $turno;
        $this->grado = $grado;
    }

    public function obtener_datos(){
        return parent::obtener_datos() . " <br>Grado: ".$this->grado." <br>Turno: ".$this->turno;
    }
}
?>
<h3> Crear un objeto array de la clase alumno</h3>
<?php
    $alumno1 = new Alumno ("Diana", "0991588094","Universitaria", "Noche");
?>

<h3> Imprimir sus datos con foreach </h3>
<?php
    echo $alumno1->obtener_datos();
?>