<?php

$Number1 = $_POST['Number1'];
$Number2 = $_POST['Number2'];
$Number3 = $_POST['Number3'];
$Medial=($Number1+$Number2+$Number3)/3;

echo "<input type='text' name='medial' value='{$Medial}'> ";
    
?>