<?php 
header('Content-type: application/json; charset=utf-8');
$data = filter_input(INPUT_POST,'gmail');
$array = preg_split("/@/",$data);
if (session_status() == PHP_SESSION_NONE) {
  // セッションは有効で、開始していないとき
  session_start();
}
if($array[1]=='stg.nada.ac.jp'){
  $param = 'true';
  $_SESSION['loginauth'] = 'true';
} else{
  $param = 'false';
  $_SESSION['loginauth'] = 'false';
}
echo json_encode($param);
 ?>