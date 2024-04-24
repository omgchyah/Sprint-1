<?php declare(strict_types=1);

//EXERCICI 5

//Funcion que valora a los estudiantes de acuerdo a sus notas

class GradeChecker {

    public $nota;

    public function __construct(int $nota){
        $this->nota = $nota;
    }

    public function calificarEstudiante(): string {

        $resultado = "";

        if ($this->nota >= 60) {
            $resultado = "Enhorabuena. Estás en la primera división.";
        } else if ($this->nota < 60) {
            $resultado = "Muy bien. Estás en la Segunda División.";
        } else if ($this->nota < 45) {
            $resultado = "Estás en la Tercera División.";
        } else if ($this->nota < 33) {
            $resultado = "Lo siento. Has reprobado.";
        }

        return $resultado;
        
    
    }

}

    
?>