<?php
require_once './question-1-logic.php';
require_once './question-2-logic.php';


echo "Question 1" . PHP_EOL;
// A
// Input: [10 20 20 10 10 30 50 10 20]
// Output: 3
// Answer:
echo 'A:' . countCouple([10, 20, 20, 10, 10, 30, 50, 10, 20]) . PHP_EOL;

// B
// Input: [6 5 2 3 5 2 2 1 1 5 1 3 3 3 5]
// Output: 6
// Answer:
echo 'B:' . countCouple([6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5]) . PHP_EOL;

// C
// Input: [1 1 3 1 2 1 3 3 3 3]
// Output: 4
// Answer:
echo 'C:' . countCouple([6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5]) . PHP_EOL;

echo "Question 2" . PHP_EOL;

// A
// Input: Saat meng*ecat tembok, Agung dib_antu oleh Raihan.
// Output: 5
// Answer:
echo 'A:' . countWords("Saat meng*ecat tembok, Agung dib_antu oleh Raihan.") . PHP_EOL;

// B
// Input: Berapa u(mur minimal[ untuk !mengurus ktp?
// Output: 3
// Answer:
echo 'B:' . countWords("Berapa u(mur minimal[ untuk !mengurus ktp?") . PHP_EOL;

// C
// Input: Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.
// Output: 4
// Answer:
echo 'C:' . countWords("Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.") . PHP_EOL;