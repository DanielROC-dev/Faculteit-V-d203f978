<?php
echo "> van welk getal wil je de faculteit weten" . PHP_EOL;
$aantal = readline("> ");
$totaal = 1;
if (is_numeric($aantal)) {
    $tell = 1;
    while ($tell <= $aantal) 
    { 
        $totaal = $totaal * $tell;
        $tell++;
    }
}
else
{
    exit("> je moeder");
}
echo "> " . ($totaal);