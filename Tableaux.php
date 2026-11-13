<?php
declare(strict_types=1);

$notes = [12, 15, 8, 17, 9, 14, 11];
$prenoms = ['nadia', 'loza', 'salma', 'janat', 'nour'];

// Question 1 : Afficher le Premier et le dernier
echo "Premier : " . $notes[0] . "\n";
echo "Dernier avec count : " . $notes[count($notes) - 1] . "\n";
echo "Dernier avec array_key_last : " . $notes[array_key_last($notes)] . "\n";

// Question 2 : Nombre de notes
echo "Nombre de notes : " . count($notes) . "\n";

// Question 3 : Moyenne des notes
echo "Moyenne : " . (array_sum($notes) / count($notes)) . "\n";

// Question 4 : Note max et note min
echo "Max : " . max($notes) . "\n";
echo "Min : " . min($notes) . "\n";
?>