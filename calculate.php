<?php

$op = $_GET["operation"];
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$result;

if ($op == "add") {
  $result = $num1 + $num2;
  echo $result;
}else if ($op == "subtract") {
  $result = $num1 - $num2;
  echo $result;
}else if ($op == "divide") {
  $result = $num1 / $num2;
  echo $result;
}else if ($op == "multiply") {
  $result = $num1 * $num2;
  echo $result;
}else if ($op == "power") {
  $result = $num1 ** $num2;
  echo $result;
}else {
  echo "Error !";
}