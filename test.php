<?php

declare(strict_types=1);

require_once __DIR__ . '/fonctions.php';

echo "===== ÉTAPE 1 : OPÉRATIONS =====" . PHP_EOL;

echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;
echo "12 × 8 = " . multiplier(12, 8) . PHP_EOL;
echo "12 ÷ 8 = " . diviser(12, 8) . PHP_EOL;

try {
    echo diviser(10, 0) . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}