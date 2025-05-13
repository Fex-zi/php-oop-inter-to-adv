<?php

declare(strict_types=1);

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