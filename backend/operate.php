<?php
$input[pointslist] = $_POST['num'];
$input[visible] = filter_input(INPUT_POST,'visible');
$input[grade] = $_POST['grade'];

$output = file_get_contents("../scripts/points.json");
$output = json_decode($output,true);

for ($i=0; $i <52 ; $i++) { 
  if ($input[pointslist][$i]==0) {
    $input[pointslist][$i] = $output[pointslist][$i];
  } elseif ($input[pointslist][$i]==-1) {
    $input[pointslist][$i]=0;
    echo($input[pointslist][$i]);
  }
}
for ($i=0; $i < 4; $i++) { 
  if($input[grade][$i]=="0"){
    $input[grade][$i]=$output[grade][$i];
  } else if($input[grade][$i]=="-1"){
    $input[grade][$i]="";
  } else {
    echo($input[grade][$i]);
  }
}
if($input[visible]==null){
  $input[visible]=$output[visible]; 
}

$input = json_encode($input);
file_put_contents("../scripts/points.json",$input);
 ?>