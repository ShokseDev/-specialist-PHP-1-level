<?php

$cnt = 0;

function drawTable($cols = 10, $rows = 10, $color = "coral"): void
{
    global $cnt;
    $cnt++;
    echo "Таблица рисуется $cnt раз";
    echo "<table border='1'>";

    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == 1 || $td == 1) {
                echo "<th style='background-color: $color'>" . $tr * $td . "</th>";
            } else {
                echo "<td>" . $tr * $td . "</td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
}

function drawMenu($menu, $vertical = true): void
{
    $style = "";

    if (!$vertical) {
        $style = "style = 'display: inline; margin-right: 15px'";
    }

    echo "<ul>";

    foreach ($menu as $item) {
        echo "<li $style>";
        echo "<a href='$item[href]'>$item[link]</a>";
        echo "</li>";
    }

    echo "</ul>";
}

function calculator($num1, $num2, $operator): void {

    echo "<p>";

    switch ($operator) {
        case '+':
            $sum = $num1 + $num2;
            echo "Результат $num1 + $num2 = $sum";
            break;
        case '-':
            $sum = $num1 - $num2;
            echo "Результат $num1 - $num2 = $sum";
            break;
        case '*':
            $sum = $num1 * $num2;
            echo "Результат $num1 * $num2 = $sum";
            break;
        case '/':
            if ($num2 != 0) {
                $sum = $num1 / $num2;
                echo "Результат $num1 / $num2 = $sum";
                break;
            } else {
                echo "На ноль делить нельзя!";
            }
    }

    echo "</p>";
}