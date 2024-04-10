<?php
    echo "Hello, World!";

   //Comment
    /*Comment*/ 
    #Comment

    $str = "I will be back by ";
    $num = 5;

    echo $str;
    echo $num;

    //Arrays

    $foo = array(1, 2, 3);
    echo $foo[0];

    //Using Strings as index types
    $array = array();

    $array["foo"] = "bar";
    $array["bar"] = "quux";

    echo $array["bar"];

    //Arithmetic Operators
    //Expressions take one or more values and yield
    //a different one

    $a = 18;
    $b = 4;

    echo "\n";
    echo "$a + $b = " . ($a + $b); 
    echo "\n";
    echo PHP_EOL;
    echo "$a - $b = " . ($a - $b);
    echo PHP_EOL;
    echo "$a * $b = " . ($a * $b);
    echo PHP_EOL;
    echo "$a / $b = " . ($a / $b);
    echo "\r";
    echo "$a % $b = " . ($a % $b);
    echo "\r";

    //Comparison operators
    /*
    ==
    !=
    <
    >
    <=
    >=
    */

   if ($a > $b) {
    echo "$a is greater than $b";
   }
   else {
    echo "$a is less than $b";
   }

   $number = 21;
   $temp = $number / 2;

   if ($temp = 0) {
    echo "El número $number es par.";
   } else {
    echo "El número $number es impar.";
   }

   //while loop
   $x = 4;
   $y = 0;

   while($y <= 10){
    $y += $x;
    $x += 1;
   }

   echo "The value of x is $x";
   echo "The value of y is $y";

   $input = 2;
   $loops = 0;

   while ($input < 100) {
    $input = $input * $input;
    $loops = $loops + $input;
   }

   echo $loops;

   function myFirstFunction() {
     
    echo 2 + 7;

   }

   myFirstFunction();


   function suma1($num1, $num2) {
    return $num1+$num2;
   }

   echo suma1(4,5);

   class Shape{
    public $sides = 0;
    public $name = "";

    public function description() {
        echo "A $this->name with $this->sides sides.";
    }
   }

   $myShape1 = new Shape();
   $myShape1->sides = 3;
   $myShape1->name = "Triangle";
   $myShape1->description();

   $myShape2 = new Shape();
   $myShape2->sides = 4;
   $myShape2->name = "Rectangle";
   $myShape2->description();

   class Triangle{
    public $length = 0;
    public $height = 0;

    public function Area(){

        return 1/2*($this->length)*($this->height);
    }
}
    
    $myArea1 = new Triangle();
    
    $myArea1->length = 4;
    $myArea1->height = 5;

    $area = $myArea1->Area();

    echo $area;


   

?>

