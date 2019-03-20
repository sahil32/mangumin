<?php
$name=$_POST['name'];
$request= $_POST['request'];

$tc="sahilsubnani49@gmail.com";
$subject="Request"
$body="THis is an auto mated message please dont reply to this\n\n\n";
mail($tc,$subject,$body);
echo "lol"
?>