<?php
$a = 5;
$b = 4;
$obdelnikobsah = $a * $b;

echo "<p>Obsah obdelníku o stranách {$a}cm, {$b}cm je {$obdelnikobsah}cm<sup>2</sup></p>";

$strana = 6;
$uhel = 60;
$obsahTrojuhelnika = round($strana * $strana * sin(deg2rad($uhel)) / 2);

echo "<p>Rovnostranný trojúhelník o straně délky {$strana}cm a úhlu {$uhel} stupňů je {$obsahTrojuhelnika}cm<sup>2</sup></p>";