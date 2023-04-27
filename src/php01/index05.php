<?php
$num = 1;

for ($num = 1; $num <= 50; $num ++) {
    if ($num % 3 === 0 and $num % 5 === 0) {
        echo "FizzBuzz" . "<br>";
    } elseif ($num % 3 === 0) {
        echo "Fizz" . "<br>";
        continue;
    } elseif ($num % 5 === 0) {
        echo "Buzz" . "<br>";
        continue;
    } else {
        echo $num . "<br>";
    }
}
echo "<br>";

for ($a = 0; $a < 25; $a ++) {
    if ($a % 5 === 0) {
        echo "<br>" . "●";
        continue;
    }
    echo "●";
}
echo "<br>";
echo "<br>";

for ($a = 1; $a <= 5; $a ++) {
    for ($b = 1; $b <= 5; $b ++) {
        echo "●";
    }
    echo "<br>";
}