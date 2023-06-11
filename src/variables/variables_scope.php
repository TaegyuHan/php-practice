<?php

$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


$x = 5;
$y = 10;

function myTest1() {
    global $x, $y; // 글로벌 변수 사용 방법
    $y = $x + $y;
}

myTest1();
echo "$y\n"; // outputs 15


$x = 5;
$y = 10;

function myTest2() {
    // 직접 엑세스 하는 방법
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];  // 또한 이렇게 사용하는 방법도 있다.
}

myTest2();
echo "$y\n"; // outputs 15

function myTest3() {
    static $x = 0;
    echo "$x\n";
    $x++;
}

myTest3();
myTest3();
myTest3();

?>