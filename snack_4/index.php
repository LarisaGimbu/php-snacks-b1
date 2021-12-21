<?php 

var_dump(randomnumberArray(1, 20, 15));

function randomnumberArray($min, $max, $nItems){
  $newArray = [];

  if($min > $max){
    $tempMin = $min;
    $min = $max;
    $max = $tempMin;
  };

  if(($max - $min) < $nItems){
    $nItems = $max - $min;
  };

  while(count($newArray) < $nItems){
    $number = rand($min, $max);
    if(!in_array($number, $newArray)){
      $newArray[] = $number;
    }
  };

  return $newArray;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>