<?php

$fio = $_POST['name'];
$email = $_POST['phone'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);

$fio = urldecode($fio);
$email = urldecode($email);

$fio = trim($fio);
$email = trim($email);
$headers = 'Content-type: text/html; charset=utf-8';

//echo $fio;
//echo "<br>";
//echo $email;

mail("psopt2013@mail.ru", "Заявка с сайта", "Имя: ".$fio.". Телефон: ".$email ,$headers);

header("Location: http://www.kudryash.ru/form.html");

?>
