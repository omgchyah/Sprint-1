<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "GradeChecker.php";

class GradeCheckerTest extends TestCase {

    public function testCalificarEstudiante(): void {
        $calificarEstudiante = new GradeChecker(80);
        $this->assertEquals("Enhorabuena. Estás en la primera división.", $calificarEstudiante->calificarEstudiante());
    }


}

?>