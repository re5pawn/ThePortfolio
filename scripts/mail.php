<?php

$recepient = "chichulin-sv@mail.ru";
$sitename = "ThePortfolio";

$name = trim($_POST["user-name"]);
$email = trim($_POST["user-email"]);
$text = trim($_POST["user-massage"]);
$message = "Имя: $name \nE-mail: $email \nСообщение: $text";

$pagetitle = "Новый отзыв с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");