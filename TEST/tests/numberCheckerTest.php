<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'NumberChecker.php';

class NumberCheckerTest extends TestCase {

    //Para probar que es true
    public function testIsEven_True(): void {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven());
    }

    //Para probar que es false
    public function testIsEven_False(): void {
        $numberChecker = new NumberChecker(5);
        $this->assertTrue($numberChecker->isEven());
    }

    //Provar método isPositive con número positivo
    public function testIsPositive_true(): void {
        $numberChecker = new NumberChecker(2);
        $this->assertTrue($numberChecker->isPositive());
    }
    
    //para probar que da error con números no positivos
    public function testIsPositive_False(): void {
        $numberChecker = new NumberChecker(-1);
        $this->assertTrue($numberChecker->isPositive());
    }


    



}

?>