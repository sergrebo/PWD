<?php
echo 'for'."\n";
for ($i=1; $i < 11; $i++) { 
    echo '2 x '. $i. ' es '. $i*2 . "\n";   
}

echo "\n". 'while'. "\n";
$b = 1;
while ($b <= 10) {
    echo '2 x '. $b. ' es '. $b*2 . "\n";
    $b++;
}

echo "\n". 'do ... while'. "\n";
$a = 1;
do {
    echo '2 x '. $a. ' es '. $a*2 . "\n";
    $a++;
} while ($a <= 10);
?>