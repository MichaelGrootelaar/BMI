<?php
  session_start();
  $weight = $_POST['weight'];
  $length = $_POST['length'];
  $result = $weight / ($length * $length);

  if(count($_SESSION['BMI']) > 0) {
    echo "SESSION!!!";
    $array = $_SESSION['BMI'];
  } else {
    $array = array();
  }

  array_push($array, array($weight, $length, $result));

  $_SESSION['BMI'] = $array;

  setcookie('BMI', serialize(array($weight, $length, $result)));

  header('Location: index.php');
?>
