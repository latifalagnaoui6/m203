<?php
declare(strict_types=1);

$notes = [12, 15, 8, 17, 9, 14, 11];
$prenoms = ['nadia', 'loza', 'salma', 'janat', 'nour'];

// Question 1 : Premier et dernier
echo "Premier : " . $notes[0] . "\n";
echo "Dernier avec count : " . $notes[count($notes) - 1] . "\n";
echo "Dernier avec array_key_last : " . $notes[array_key_last($notes)] . "\n";?>