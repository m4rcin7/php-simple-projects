<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //get input values
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = null;
    //pergorm calculation based on operation
    switch ($operation) {
        case "add":
            $result = $number1 + $number2;
            break;
        case "subtract":
            $result = $number1 - $number2;
            break;
        case "multiply":
            $result = $number1 * $number2;
            break;
        case "divide":
            if ($number2 == 0) {
                $result = "Error: Divsion by zero!";
            } else {
                $result = $number1 / $number2;
            }
            break;
        default:
            $result = "Invalid operation!";
            break;
    }
    //display the result
    echo "<h1>PHP Calculator</h1>";
    echo "<h2>Result: $result</h2>";
}
