<?php
$num = array(7, 8, 9, 10, 11, 12, 13);
shuffle($num);
$tamanho = reset($num);
$rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $tamanho);
$smtp = array('gmail.com', 'hotmail.com', 'yahoo.com');
shuffle($smtp);
echo $email;
$email = "$rand@" .reset($smtp);
?>
