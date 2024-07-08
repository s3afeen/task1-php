<?php 

//-----------1



$fruit = array("orang_","bnana_","apple_","mango_");
print_r($fruit);


echo "<hr>";


echo "Original array:\n";
foreach ($fruit as $x) {
    echo $x . "br";
}

echo "<hr>";

$fruit[] = "lemon";
echo "<br>";
foreach ($fruit as $x){
echo $x . "br";
}



echo "<hr>";



array_pop($fruit);
echo "<br>";
foreach ($fruit as $x){
echo $x . "br";
}


echo "<hr>";


$searchFruit = "apple";
if (in_array($searchFruit, $fruit)){
    echo "ok";
   } else {
    echo "not";
   }


   echo "<hr>";
   echo "<hr>";
   echo "<hr>";


//-----------2
//1

$names_age = array("zaid" => 20, "mohammad" => 30, "abdallah" => 22, "ali" => 18);
foreach($names_age as $name => $age){
echo " name : " . $name . " age : " . $age . "<br>";
}



echo "<hr>";
//2

var_dump($names_age);


echo "<hr>";
//3


$names_age["ahmad"] = 19;

foreach($names_age as $name => $age) {
    echo " name : " . $name . " age :" . $age . "<br>";
}


echo "<hr>";
//4

unset($names_age["ahmad"]);

foreach ($names_age as $name => $age){
    echo " name : " . $name . " age :" . $age . "<br>";
}

//5 = *************


echo "<hr>";
echo "<hr>";
echo "<hr>";

//-----------3

//1
$std = array(
    array(
        "name" => "ram",
        "age" => 10 , 
        "grad" => "A"
    ),
    array(
        "name" => "cpu",
        "age" => 12 , 
        "grad" => "D"
    ),
    array(
        "name" => "rom",
        "age" => 9 , 
        "grad" => "B"
    )
);

function printStd($std) {
    foreach($std as $stud) {
    echo " name : " . $stud["name"] . " age : " . $stud["age"] . " grad : " . $stud["grad"]  ."<br>";
    }
}




//2
echo "student informtion : <br>";
printStd($std);


echo "<hr>";

//3
$newStd = array(
    "name" => "tala",
    "age" => 11,
    "grad" => "A"
);

$std[] = $newStd;
printStd($std);


echo "<hr>";


//4
foreach ($std as &$stud){
    if ($stud["name"]=="tala"){
        $stud["grad"] = "B+";
    }
}
unset($stud);


echo "<hr>";

//5
foreach ($std as $key => $stud) {
    if ($stud["name"] == "tala") {
        unset($std[$key]);
    }
}

printStd($std);



echo "<hr>";
echo "<hr>";
echo "<hr>";
//-----------3


//1
$frut1 = array("orang", "banana", "apple", "mango");
array_push($frut1, "zaid","zaid2");
print_r($frut1);
echo "<hr>";
//2
$frut2 = array("orang", "banana", "apple", "mango", "zaid","zaid2");
array_pop($frut2);
print_r($frut2);
echo "<hr>";
//3
$frut3 = array("orang", "banana", "apple", "mango", "zaid");
$kays = array_keys($frut3);
print_r($kays);
echo "<hr>";
//4
$frut4 = array("orang", "banana", "apple", "mango", "zaid");
array_values($frut4);
print_r($frut4);
echo "<hr>";
//5
$frut5 = array("orang", "banana", "apple", "mango", "zaid");
echo count($frut5);
echo "<hr>";
//6
$frut6 = array("orang", "banana", "apple", "mango", "zaid");
$colrs = array("red", "blue", "black", "whit", "brown");
$plural = array_merge($frut6,$colrs);
print_r($plural);
echo "<hr>";
//7
$frut7 = array("orang", "banana", "apple", "mango", "zaid");
$search = array_search("zaid" ,$frut7);
echo $search;
echo "<hr>";
//8
$frut8 = array("orang", "banana", "apple", "mango", "zaid");
sort($frut8);
print_r($frut8);
echo "<hr>";
//9
$frut9 = array("orang", "banana", "apple", "mango", "zaid");
ksort($frut9);
print_r($frut9);
echo "<hr>";
//10
$frut9 = array("orang", "banana", "apple", "mango", "zaid");
asort($frut9);
print_r($frut9);
echo "<hr>";
?>
