<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
require 'NumberChecker.php';

class DataProviderNumberchecker extends TestCase {

    public static function evenDataProvider(): array {

        return [
            [0, true], //even
            [5, false], //odd
        ];
     }

     public static function positiveDataProvider(): array {

        return [
            [3, true], //Positive
            [-5, false], //Negative
        ];
    }

    #[DataProvider('evenDataProvider')]

    public function testIsEven(int $number, bool $expectedEven): void {
        $numberChecker = new NumberChecker($number);
        $this->assertSame($expectedEven, $numberChecker->isEven());
    }


    #[dataProvider('positiveDataProvider')]
    
    public function testIsPositive(int $number, bool $expectedPositive): void {
        $numberChecker = new NumberChecker($number);
        $this->assertSame($expectedPositive, $numberChecker->isPositive());
    }



}

?>