<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'NumberChecker.php';

class dataProviderNumberChecker extends TestCase {

    /**
     * @dataProvider evenDataProvider
     */

    public function testIsEven(int $number, bool $expectedEven): void {
        $numberChecker = new NumberChecker($number);
        $this->assertEquals($expectedEven, $numberChecker->isEven());
    }

    /**
     * @dataProvider positiveDataProvider
     */

     public function testIsPositive(int $number, bool $expectedPositive): void {
        $numberChecker = new NumberChecker($number);
        $this->assertEquals($expectedPositive, $numberChecker->isPositive());
     }

     public function evenDataProvider(): array {

        return array(
            array(0, true), //Even
            array(5, false), //Odd
        );
     }

     public function positiveDataProvider(): array {

        return array(
            array(3, positive), //Positive
            array(-5, false), //Negative

        );
     }



}

?>