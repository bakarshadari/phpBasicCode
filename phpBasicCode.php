<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>conition</title>
</head>
<body>
    // this is html tag which displays the in the browsar 
    <h1>chapter three practics </h1>
    // php biggining 
    <?php
    //creating variabal for initializing
$marks = 51;
// this condition whill chech if the marks is greater then or equal 90 means 51 >=90 not true
if($marks >=90){
    // display the grade whether the condition is true atherwise will skipe
    echo "grade  A";

}
// this condition whill chech if the marks is greater then or equal 80 means 51 >=80 not true
elseif($marks >=80  ){
    // display the grade whether the condition is true atherwise will skipe
    echo " grade B";

}
// this condition whill chech if the marks is greater then or equal 70 means 51 >=70 not true
elseif ($marks >=70) {
    // display the grade whether the condition is true atherwise will skipe
    echo ("grade C");
        
}
// this condition whill chech if the marks is greater then or equal 60 means 51 >=9600 not true
elseif ($marks >=60) {
    // display the grade whether the condition is true atherwise will skipe
    echo ("grade D");

}
// this condition whill chech if the marks is greater then or equal 50 means 51 >=9500 true 
elseif ($marks >=50) {
    // display the grade whether the condition is true atherwise will skipe
    echo ("grade F");
    // display the grade whether the condition is true atherwise will skipe
    echo '<br>waad dhacday';
    # code...
}
// else {
//     echo "waa baasatay";
// }
//for loop     ,   while loop    ,   do while loop
// first for loop
// syntex for loop for (intialize ; end ; increment/decrement )
for($i = 1 ; $i <= 10; $i++)
echo("<br> the values are$i");

// while loop 
//1 initialize 2 while (end  ) 3 echo 4 increment
echo "<br>.................................................";
$j = 1;
while($j <= 10){
    echo("<br> the values are$j");
    $j++;
}
// do while
echo "<br>.................................................";

$k = 1;
do {
    echo("<br> the values are$k");
    $k++;

}while($k <= 10);
// creating array
$arr = [1,2,3,4,5,6,6,7,8,8,8,9,9];
// foreach we pass three variable  , AS , varibale
foreach ($arr as $ar ){
    // display the array
    echo ("<br> foreach loop $arr[5]");
}
//gacanta ka qor kuna celceli
?>
</body>
</html>