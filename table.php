<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols = abs((int)$_POST['cols']);
    $rows = abs((int)$_POST['rows']);
    $color = strip_tags($_POST['color']);
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';
?>

<!-- Область основного контента -->
<form action='<?= $_SERVER['REQUEST_URI'] ?>' method="post">
    <label>Количество колонок: </label>
    <br/>
    <input name='cols' type='text' value=""/>
    <br/>
    <label>Количество строк: </label>
    <br/>
    <input name='rows' type='text' value=""/>
    <br/>
    <label>Цвет: </label>
    <br/>
    <input name='color' type='text' value=""/>
    <br/>
    <br/>
    <input type='submit' value='Создать'/>
</form>
<!-- Таблица -->
<?php
drawTable($cols, $rows, $color);
echo "Таблица отрисована $cnt раз(а)";
?>
<!-- Таблица -->
<!-- Область основного контента -->