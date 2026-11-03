<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php



echo "=== SEKCJA 1: Podstawowe operacje na tablicach (tab1, tab2, tab3) ===\n";


$tab1 = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];


echo "5. element tablicy (indeks 4): " . $tab1[4] . "\n";


$tab1[6] = 12;
echo "Po zmianie 7. elementu (indeks 6) na 12: " . implode(", ", $tab1) . "\n";


$tab2 = [];
foreach ($tab1 as $val) {
    $tab2[] = $val;
}


$tab3 = [];
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
echo "Tablica tab3 (suma tab1 + tab2): " . implode(", ", $tab3) . "\n";


$tab2 = [];
for ($i = count($tab1) - 1; $i >= 0; $i--) {
    $tab2[] = $tab1[$i];
}
echo "Tablica tab2 w odwrotnej kolejności: " . implode(", ", $tab2) . "\n\n";

echo "<br><br>";

echo "=== SEKCJA 2: Analiza i modyfikacja tablicy liczbowej (dane użytkownika) ===\n";


$user_numbers = [5, 3, 8, 3, 12, 1, 3, 9, 4, 7]; 
echo "Wczytana tablica użytkownika: " . implode(", ", $user_numbers) . "\n";


$min_val = min($user_numbers);
$max_val = max($user_numbers);
echo "Najmniejszy element: $min_val, Największy element: $max_val\n";


$average = array_sum($user_numbers) / count($user_numbers);
echo "Średnia wartość: $average\n";


$count_threes = 0;
foreach ($user_numbers as $num) {
    if ($num == 3) $count_threes++;
}
echo "Ilość wystąpień liczby 3: $count_threes\n";


$sorted_asc = $user_numbers;
$n = count($sorted_asc);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($sorted_asc[$j] > $sorted_asc[$j + 1]) {
            $temp = $sorted_asc[$j];
            $sorted_asc[$j] = $sorted_asc[$j + 1];
            $sorted_asc[$j + 1] = $temp;
        }
    }
}
echo "Posortowana tablica rosnąco: " . implode(", ", $sorted_asc) . "\n";


if ($n % 2 == 0) {
    $median = ($sorted_asc[($n / 2) - 1] + $sorted_asc[$n / 2]) / 2;
} else {
    $median = $sorted_asc[floor($n / 2)];
}
echo "Mediana elementów: $median\n";


$three_min = array_slice($sorted_asc, 0, 3);
$three_max = array_slice($sorted_asc, -3);
echo "3 najmniejsze elementy: " . implode(", ", $three_min) . "\n";
echo "3 największe elementy: " . implode(", ", $three_max) . "\n";


$even_count = 0;
$odd_count = 0;
foreach ($user_numbers as $num) {
    if ($num % 2 == 0) $even_count++;
    else $odd_count++;
}
echo "Liczby parzyste: $even_count, nieparzyste: $odd_count\n";

$div_by_three = 0;
foreach ($user_numbers as $num) {
    if ($num % 3 == 0) $div_by_three++;
}
echo "Liczby podzielne przez 3: $div_by_three\n";


$squared_numbers = [];
foreach ($user_numbers as $num) {
    $squared_numbers[] = $num * $num;
}
echo "Tablica po podniesieniu elementów do kwadratu: " . implode(", ", $squared_numbers) . "\n\n";

echo "<br><br>";

echo "=== SEKCJA 3: Operacje na znakach i wyrazach ===\n";


$user_word = "ProgramISTA";
$char_array = str_split(substr($user_word, 0, 10));
echo "Tablica znaków: " . implode(", ", $char_array) . "\n";


$swapped_chars = [];
foreach ($char_array as $char) {
    if (ctype_upper($char)) {
        $swapped_chars[] = strtolower($char);
    } else {
        $swapped_chars[] = strtoupper($char);
    }
}
echo "Po zamianie wielkości liter: " . implode(", ", $swapped_chars) . "\n";


$shuffled_chars = $char_array;
shuffle($shuffled_chars);
echo "Zawartość w losowej kolejności: " . implode(", ", $shuffled_chars) . "\n\n";

echo "<br><br>";

echo "=== SEKCJA 4: Tablica 100-elementowa z losowymi liczbami (Tablica A) ===\n";

$A = [];
for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 50);
}


$max_A = max($A);
$max_count = 0;
foreach ($A as $num) {
    if ($num == $max_A) $max_count++;
}
echo "Największa liczba w tablicy 100-elementowej: $max_A (występuje $max_count razy)\n";


$odds = [];
foreach ($A as $num) {
    if ($num % 2 != 0) $odds[] = $num;
}
echo "Liczby nieparzyste (pierwsze 15): " . implode(", ", array_slice($odds, 0, 15)) . "...\n";


$odd_indices = [];
for ($i = 1; $i < 100; $i += 2) {
    $odd_indices[] = $A[$i];
}
echo "Liczby na nieparzystych indeksach (pierwsze 15): " . implode(", ", array_slice($odd_indices, 0, 15)) . "...\n";


$range_numbers = [];
foreach ($A as $num) {
    if ($num >= 5 && $num < 15) {
        $range_numbers[] = $num;
    }
}
echo "Liczby w przedziale <5, 15): Ilosć = " . count($range_numbers) . "; Elementy: " . implode(", ", $range_numbers) . "\n";


$a = 23; 
$closest = $A[0];
$min_diff = abs($A[0] - $a);
foreach ($A as $num) {
    $diff = abs($num - $a);
    if ($diff < $min_diff) {
        $min_diff = $diff;
        $closest = $num;
    }
}
echo "Element najbliższy wartości 'a' ($a): $closest\n";


$min_A_val = min($A);
$min_index = array_search($min_A_val, $A);
$predecessor = ($min_index > 0) ? $A[$min_index - 1] : "Brak (indeks 0)";
$successor = ($min_index < 99) ? $A[$min_index + 1] : "Brak (indeks 99)";
echo "Minimum tablicy to $min_A_val na indeksie $min_index. Poprzednik: $predecessor, Następnik: $successor\n";


$elements_gt_10 = [];
foreach ($A as $num) {
    if ($num > 10) {
        $elements_gt_10[] = $num;
    }
}
echo "Rozmiar nowej tablicy (elementy > 10): " . count($elements_gt_10) . "\n";


$B = [];
$current_sum = 0;
for ($i = 0; $i < 100; $i++) {
    $current_sum += $A[$i];
    $B[$i] = $current_sum;
}
echo "Tablica B (sumy skumulowane) - pierwsze 5 elementów: " . implode(", ", array_slice($B, 0, 5)) . "...\n";


$A_desc = $A;
rsort($A_desc);
echo "Tablica A posortowana malejąco (pierwsze 10): " . implode(", ", array_slice($A_desc, 0, 10)) . "...\n";


$counts = array_count_values($A);
$frequent_elements = [];
foreach ($counts as $val => $freq) {
    if ($freq >= 3) {
        $frequent_elements[] = $val;
    }
}
echo "Elementy występujące min. 3 razy: " . implode(", ", $frequent_elements) . "\n\n";

echo "<br><br>";

echo "=== SEKCJA 5: Generowanie ciągów w pustych tablicach ===\n";




$fib = [0, 1];
for ($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}
echo "Fibonacci (pierwsze 10): " . implode(", ", array_slice($fib, 0, 10)) . "...\n";


$powers_of_2 = [];
for ($i = 0; $i < 100; $i++) {
   
    $powers_of_2[$i] = pow(2, $i);
}
echo "Potęgi 2 (pierwsze 10): " . implode(", ", array_slice($powers_of_2, 0, 10)) . "...\n";


$seq_three = [];
for ($i = 0; $i < 100; $i++) {
    $seq_three[$i] = ($i + 1) * 3;
}
echo "Ciąg wielokrotności 3 (pierwsze 10): " . implode(", ", array_slice($seq_three, 0, 10)) . "...\n";


$seq_two_powers = [];
for ($i = 0; $i < 100; $i++) {
    $seq_two_powers[$i] = pow(2, $i + 1);
}
echo "Ciąg 2, 4, 8... (pierwsze 10): " . implode(", ", array_slice($seq_two_powers, 0, 10)) . "...\n";

?>