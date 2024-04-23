<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "GradeCheck.php";

class GradeCheckerTest extends TestCase {

    public function testCalificarEstudiante(): void {
        $calificarEstudiante = new GradeChecker(80);
        $this->assertTrue($calificarEstudiante->calificarEstudiante());
    }


}

?>