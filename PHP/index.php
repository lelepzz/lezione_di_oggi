<?php
// Questo è un commento
# Anche questo è un commento
/*
Anche questo
è un commento
*/ 

// Dichiarazione di variabili
$numero = 0;
$decimale = 1.2;
$testo = "PhP è veloce";
$booleano = true;
$array = [1, 2, 3];

// Stampare il type della variabile
var_dump($numero);
var_dump($decimale);
var_dump($testo);
var_dump($booleano);
var_dump($array);

// Data Types & Casting
$stringaNumero = "123";
$intero = (int) $stringaNumero;
$float = (float) $stringaNumero;
var_dump($intero, $float);

// Math Operations
$somma = 5 + 3;
$prodotto = 5 * 3;
$divisione = 10 / 2;
$modulo = 10 % 3;
echo "Somma: $somma, Prodotto: $prodotto, Divisione: $divisione, Modulo: $modulo\n";

// Constants
define("PI", 3.1416);
echo "Il valore di PI è: " . PI . "\n";

// Operators
$a = 10;
$b = 20;
echo ($a > $b) ? "A è maggiore di B\n" : "B è maggiore di A\n";

// If-Else
if ($a > $b) {
    echo "A è maggiore di B\n";
} elseif ($a == $b) {
    echo "A e B sono uguali\n";
} else {
    echo "B è maggiore di A\n";
}

// Switch
$giorno = "Lunedì";
switch ($giorno) {
    case "Lunedì":
        echo "Oggi è Lunedì\n";
        break;
    case "Martedì":
        echo "Oggi è Martedì\n";
        break;
    default:
        echo "Giorno non riconosciuto\n";
}

// Loops
for ($i = 0; $i < 5; $i++) {
    echo "Iterazione for: $i\n";
}

$i = 0;
while ($i < 5) {
    echo "Iterazione while: $i\n";
    $i++;
}

// Functions
function saluta($nome) {
    return "Ciao, $nome!\n";
}
echo saluta("Mario");

// Arrays
$frutta = ["Mela", "Banana", "Ciliegia"];
echo "Frutta preferita: " . $frutta[0] . "\n";

// Regex
$pattern = "/^Ciao/";
$stringa = "Ciao mondo!";
echo (preg_match($pattern, $stringa)) ? "Match trovato!\n" : "Nessun match.\n";

$email = "test@example.com";
if (preg_match("/^[\w.-]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Email valida!";
} else {
    echo "Email non valida!";
}
?>
