<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require "GradeChecker.php";

class DataProviderGradeChecker extends TestCase {

    public static function calificarDataProvider(): array {

        return [
            [75, "Enhorabuena. Estás en la primera división."], //Mayor a 60
            [55, "Muy bien. Estás en la Segunda División."], //Menor a 60 y mayor a 45
            [40, "Muy bien. Estás en la Segunda División."], //Menor a 45 y mayor a 30
            [30,  "Lo siento. Has reprobado."], //Menor a 33
        ];
     }


    #[DataProvider('calificarDataProvider')]
    public function testCalificarEstudiante(int $nota, string $expectedCalificacion): void {
        $calificarEstudiante = new GradeChecker($nota);
        $this->assertSame($expectedCalificacion, $calificarEstudiante->calificarEstudiante());
    }

}


?>