<?php
echo "<pre>";

// $cities = array("aqaba", "amman", "maan", "tfila");
// print_r($cities);
// echo "<hr>";
// for ($i = count($cities) - 1; $i >= 0; $i--) {
//     echo $cities[$i] . '<br>';
// }

// echo array_search('aqaba', $cities);

// unset($cities[array_search('maan', $cities)]);
// print_r($cities);
// //////////
// $firstThree = array_slice($cities, 0, 3);
// print_r($firstThree);
// echo "<hr>";

///////////////////////////////////////////////

// $arms = array("AKM" => 20 , "RPG" => 100 , "AW50" => 80, "SVD" => 50);
// ksort($arms);
// print_r($arms);

// asort($arms);
// print_r($arms);

// $total = array_sum($arms);
// print_r($total / 4);

// arsort($arms);
// print_r(array_slice($arms , 0 , 1));

///////////////////////////////////////////////


$books = array(
    array(
        "title" => "alsaafeen",
        "author" => "zaid",
        "year" => "2004"
    ),

    array(
        "title" => "alseerah",
        "author" => "mohammad",
        "year" => "1900"
    ),

    array(
        "title" => "twenty",
        "author" => "gost",
        "year" => "2024"
    )
);

// foreach ($books as $onebook) {
//     if ($onebook['year'] > 2010) {
//         print_r($onebook);
//     }
// }

$books[] = array(
    "title" => "andalus",
    "author" => "tareq",
    "year" => "711"
);
// print_r($books);

// $books[1]['author'] = 'ahmad';
// print_r($books);




// دالة مقارنة مخصصة لترتيب المصفوفة حسب العنوان
function compareByTitle($a, $b) {
    return strcmp($a['title'], $b['title']);
}

// استخدام usort لترتيب المصفوفة حسب العنوان
usort($books, 'compareByTitle');

// طباعة المصفوفة المرتبة
print_r($books);








echo "<pre>";
?>