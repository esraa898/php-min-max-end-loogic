<?php






// echo(max(2,5,8)."<br>");

$numbers=[0,1,18,800,300,100];
$numbers_length=count($numbers)-1;
$min=$numbers[0];
$max=$numbers[0];
for($i=0;$i<=$numbers_length;$i++){


if ($numbers[$i] > $max){

   $max=$numbers[$i];

 }elseif($numbers[$i] < $min){
    $min=$numbers[$i];

 }

};
for($i=0;$i<=$numbers_length;$i++){


    if($i =$numbers_length ){
  $last=$numbers[$i];
    };
}
echo"max value is :". $max."<br>";
echo "min value is :". $min."<br>";
echo "last number is :".$last;
