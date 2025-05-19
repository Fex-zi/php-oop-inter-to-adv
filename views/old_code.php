<?php

declare(strict_types=1);
error_reporting(E_ALL); // & ~E_WARNING
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
function sum(mixed ...$numbers): int|float|string //i added string cuz of the '<br>'
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

echo "</br>";
$xg = 4;
$sum2 = function (int|float ...$numbers) use (&$xg): int|float //you can use "use" to import variable only for function declarations and "&" changes the global scope of a vraiable uptop too 
{
    //var_dump(...$numbers);
    echo $xg = 15;
    return  array_sum($numbers);
};

echo "-The sum with use func is:" . $sum2(4, 2) . "and the xg variable is $xg <br>";


$array = [1, 2, 3, 4];

$y = 4;
$array2 = array_map(fn($number) => $number * $number + $y, $array); // arrow only works for single line expression

print_r($array2) . "array_map";
echo "</br></br>";

// date and time
$currentTime = time();

echo $currentTime + 5 * 24 * 60 * 60 . '<br>';

echo date('m/d/Y g:ia') . '<br>'; // the timezone is trash

date_default_timezone_set('America/Denver'); //now i'm setting my default time zone

echo date('m/d/Y g:ia') . '<br>'; // now the timezone chnges to mine

echo date_default_timezone_get();

$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];

$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price']);

echo "<br><br>" . $total;

//mkdir('foo');
//rmdir('foo');

if (file_exists('foo.txt')) {
    file_put_contents('foo.txt', 'Hello world');
} else {
    echo "<br>No file found";
}

$file = fopen('foo.txt', 'r'); // r means reading, o means open
var_dump("<br>" . $file);

while (($line = fgets($file)) !== false) { //fgetcsv for csv
    echo "<br>" . $line;
}
fclose($file);

file_put_contents('bar.txt', 'Hello dummy');
$content = file_get_contents('bar.txt'); // perfect
unlink('foo.txt'); //

echo "<br>" . $content;
//array_combine($array1, $array2);, array_filter(), array_map(), array_merge(, array_reduce(), array_search() or in_array(), array_diff() or _assoc(), asort(), usort(), ksort() by key, 

//error_handling

//function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null) {}
















//data types 
$heredoc = <<<TEXT
<br><br>
you can use int|float|array or mixed if you aren't sure of the data types
// to pass as many arguments as you want
function sum(...parameter): int|float|string //i added string cuz of the '<br>'
{
    return '<br>' . array_sum(parameter);
}

echo sum(5, 4, 0, 33, 4, 5, 2);

you can use "use" to import variable only for function declarations "&" changes the global scope of a vraiable too 

sleep(5);
mkdir('foo');
rmdir('foo');
ini_get()
ini_set()

array_combine(array1, array2);, array_filter(), array_map(), array_merge(, array_reduce(), array_search() or in_array(), array_diff() or _assoc(), asort(), usort(), ksort() by key
<br>

if (file_exists('foo.txt')) {
    file_put_contents('foo.txt', 'Hello world');
} else {
    echo "<br>No file found";
}

variable = fopen('foo.txt', 'r'); // r means reading, o means open
<br>
file_put_contents('bar.txt', 'Hello dummy');
$content = file_get_contents('bar.txt'); // perfect

echo "<br>" . $content;

$content = file_get_contents('bar.txt'); // perfect
unlink('foo.txt');//
<br>
TEXT;

echo $heredoc;
