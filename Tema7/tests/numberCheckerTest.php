<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'NumberChecker.php';

class NumberCheckerTest extends TestCase {

    public function testIsEven(): void {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven());
    }

    /*

    public function testIsEven_WithOddNumber_ReturnsFalse(): void
    {
        $numberChecker = new NumberChecker(5);
        $this->assertFalse($numberChecker->isEven());
    }

    public function testIsPositive_WithPositiveNumber_ReturnsTrue(): void
    {
        $numberChecker = new NumberChecker(3);
        $this->assertTrue($numberChecker->isPositive());
    }

    public function testIsPositive_WithZero_ReturnsFalse(): void
    {
        $numberChecker = new NumberChecker(0);
        $this->assertFalse($numberChecker->isPositive());
    }

    public function testIsPositive_WithNegativeNumber_ReturnsFalse(): void
    {
        $numberChecker = new NumberChecker(-2);
        $this->assertFalse($numberChecker->isPositive());
    }
    */
}

?>