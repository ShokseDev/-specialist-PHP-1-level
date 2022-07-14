<?php

$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'index.php?id=about'],
    ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
    ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
    ['link' => 'Калькулятор', 'href' => 'index.php?id=calc']
];

$months = array(1 => 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
date_default_timezone_set("Europe/Moscow");
$day = date("j");
$month = $months[date('n')];
$year = date("Y");

$hour = (int)date('H');
$welcome = '';

if ($hour > 0 && $hour < 6) {
    $welcome = "Доброй ночи";
} elseif ($hour >= 6 && $hour < 12) {
    $welcome = "Доброе утро";
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = "Добрый день";
} else {
    $welcome = "Добрый вечер";
}

