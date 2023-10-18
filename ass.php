<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chapter 3 assgment</h1>
     <h3>Queation 1</h3>

<?php
 //Queation one
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        echo $number . " is even.";
    } else {
        echo $number . " is odd.";
    }
}

// Test the function
$number = readline("Enter a number: ");
checkEvenOdd(2);

?>




<h3>Queation 2</h3>
<?php
// Queation 2
$number = 1;

while ($number <= 50) {
    if ($number % 5 == 0) {
        echo $number . " ";
    }
    $number++;
}

?>



<h3>Queation 3</h3>

<?php
//Queation 3

for ($number = 35; $number >= 7; $number--) {
    if ($number % 2 == 0) {
        echo $number . " ";
    }
}

?>



<h3>Queation 4</h3>
<?php

function findPrimeFactors($number) {
    $factor = 2;
    
    echo "Prime factors of $number are: ";
    
    while ($factor <= $number) {
        if ($number % $factor == 0) {
            echo $factor . " ";
            $number /= $factor;
        } else {
            $factor++;
        }
    }
}

// Test the function
$number = readline("Enter a positive integer number: ");
findPrimeFactors(15);

?>



<h5>Queation 5</h5>


<?php

function isPrime($number) {
    $divisor = 2;

    if ($number < 2) {
        return false;
    }

    do {
        if ($number % $divisor == 0) {
            return false;
        }
        $divisor++;
    } while ($divisor <= sqrt($number));

    return true;
}

// Test the function
$number = readline("Enter a number: ");

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is a non-prime number.";
}

?>


<h5>Queation 6</h5>

<?php

$start = 2;
$end = 10;

echo "Factorials using do...while statement:\n";

do {
    $number = $start;
    $factorial = 1;

    do {
        $factorial *= $number;
        $number--;
    } while ($number >= 1);

    echo "Factorial of $start is: $factorial\n";

    $start++;
} while ($start <= $end);

?>

<h5>Queation 7</h5>
<?php

$start = 200;
$end = 80;

echo "Non-prime numbers using do...while statement:\n";

do {
    $number = $start;
    $isPrime = true;
    $divisor = 2;

    do {
        if ($number % $divisor == 0 && $number != $divisor) {
            $isPrime = false;
            break;
        }
        $divisor++;
    } while ($divisor <= sqrt($number));

    if (!$isPrime) {
        echo $number . " ";
    }

    $start--;
} while ($start >= $end);

?>

<h5>Queation 8</h5>

<?php

$limit = 10; // Set the limit for the number of Fibonacci numbers to be printed
$firstNumber = 0;
$secondNumber = 1;
$count = 0;

echo "Fibonacci series using while statement:\n";

while ($count < $limit) {
    echo $firstNumber . " ";

    $nextNumber = $firstNumber + $secondNumber;
    $firstNumber = $secondNumber;
    $secondNumber = $nextNumber;

    $count++;
}

?>
</body>
</html>