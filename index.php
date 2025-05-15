<?php

declare(strict_types=1);
/*

$x = ceil((0.1 + 0.2) * 10); // rounds up while floor doesn't
echo "<br> $x <br>";
var_dump($x);
$y = $z = 3;
//Heredoc
$text = <<<TEXT
<br>
Line $x 
Line $y
Line $z

TEXT;

echo nl2br($text);

$x = null;

if ($x) {
    var_dump($x . "Its true");
} else {
    var_dump('its sucks');
}

//NOwdoc
//arrrays

$programmingLan = ['php', 'java', 'Python'];
$programmingLan[] = 'C++';

foreach ($programmingLan as $p) {

    echo "<pre>$p</pre>";
}

echo $programmingLan[2];

echo "<br> HOW MANY ARRAYS"  . count($programmingLan);
array_push($programmingLan, 'Javascript', 'Rust', 'React');

var_dump($programmingLan);

$programmingLan = [
    'php' => '8.0',
    'java' => '3.8'
];
unset($programmingLan['php']);

$programmingLan['go'] = '1.2';
echo "<br>";
echo "<pre>" . print_r($programmingLan) . "</pre>";
var_dump(array_key_exists('java', $programmingLan));


//expression 

$x = 5;
$y = $x;

$j = $k = 3;
function sum($y, $i)
{
    return $y + $i;
}
$z = sum($x, $y);
$u = sum($j, $k);

echo $z;
echo "<br>" . $u;

// IT COMBINE THE OPERATOR AS FAR AS ITS THE SAME VARIABLE
$x = 5;
$x *= 3; //$x +=3, $x /=2

echo $x . "<br>";

//CONCATINATE
$hey = 'Hello';

$hey .= ' World';

echo $hey; // hELLO WORLD

//ERROR CONTROL- @ REMOVES ERRORS
$X = @FILE('FOOT.TXT');

//INCREMENT 
$x = 5;
$x++; // adds =5 then if you echo x again it becomes 6 cuz ++ starts from 0
$x--; // minus=5 then if you echo x again it becomes 4
++$x; //6 works immediately cuz it starts from 1
--$x; //4

//bitwise (it flips)

//while
$i = 0;
while ($i <= 15) {
    if ($i <= 2) {
        $i++;
        continue;
    }
    echo $i++;
}
//do-while

//for

$programs = ['php', 'java', 'Python'];
$lenght = count($programs); //this is better for performance issues for all loops

for ($i = 0; $i < $lenght; $i++) {
    echo "<br/>" . $i + 1 . "] " . $programs[$i] . "<br/>";
}

//foreach //works for arrays only 
$programs = ['php', 'java', 'Python'];
foreach ($programs as $key => $p) {
    echo "<br/>" . $key + 1 . "] " . $p;
}

$user = [
    'name' => 'Ifeanyi',
    'email' => 'Fexzi@gmail.com',
    'skills' => ['php', 'mysql', 'js'], // use json_encode or implode

];

foreach ($user as $key => $value) {
    echo "<br/>" . $key . ": " . json_encode($value);
}
*/

$paymentstatus = 'paid'; // it does loose comparison though

switch ($paymentstatus) {
    case 'paid':
        echo 'paid';
        //sleep(3);
        break;

    case 'rejected':
    case 'declined':
        echo 'payment Declined';
        break;

    case 'pending':
        echo 'Pending payment';
        break;

    default:
        echo 'Unknown payment status';
}
// match expression uses strict  just like switch or if/else

$paymentStat = 2;

$paymentDisplay = match ($paymentStat) {
    1 => 'Paid, Yes',
    2, 3 => 'Payment Declined',
    0 => 'Pending Payment',
    default => 'Unknown Payment Staus',
};

echo "</br>" . $paymentDisplay;
//declare(strict_types=1); // needs to be applied to all files because it doesn't inlude

//require_once ''; //is better

echo "</br>";


function foo(): mixed
{
    return 1;
}

var_dump(foo());

function foo2(int|float $x, int|float $y): int|float|string //i added string cuz of the '<br>'
{
    return '<br>' . $x * $y;
}

echo foo2(5, 4);

// to pass as many arguments as you want
function sum(...$numbers): int|float|string //i added string cuz of the '<br>'
{
    //var_dump(...$numbers);
    return '<br>' . array_sum($numbers);
}

echo sum(5, 4, 0, 33, 4, 5, 2);

$jj = [0, 33, 4, 5, 2];
echo sum(5, 4, ...$jj);

$xx = 4;
$yy = 3;

echo "</br>";
var_dump(sum(xx: $yy, yy: $xx));




















//data types 
$heredoc = <<<TEXT
<br>
you can use int|float|array or mixed if you aren't sure of the data types
// to pass as many arguments as you want
function sum(...parameter): int|float|string //i added string cuz of the '<br>'
{
    return '<br>' . array_sum(parameter);
}

echo sum(5, 4, 0, 33, 4, 5, 2);
<br>
TEXT;

echo $heredoc;
