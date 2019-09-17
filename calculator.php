<?php

echo "Welke operatie wil je uitvoeren? (+, - of %) \n";

$MathSymbol = readline();

$plus = "+";

$minus = "-";

$modulo = "%";

if ($MathSymbol == $plus) {


    echo "Eerste getal: \n";

    $firstval = readline();

    echo "Tweede getal: \n";

    $secondval = readline();

    echo "Uw resultaat is: ";
    echo $firstval + $secondval;

    die();
} else if ($MathSymbol == $minus) {

    $firstval = readline("Eerste getal:");

    $secondval = readline("Tweede getal:");

    echo "Uw resultaat is: ";
    echo $firstval - $secondval;

    die();
}
if ($MathSymbol == $modulo)
{
    $firstval = readline("getal:");

    echo "Uw resultaat is: ";
    echo $firstval % 2;

    die();
}

echo "je hebt geen + , - of % gekozen";

