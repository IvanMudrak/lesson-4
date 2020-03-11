<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Занятие 4</title>

</head>
<body>

<!--<h3 style="color:#678cff">10.3.  Определить  значение z=max (a,2b)*max (2a-b,b), где max(x,y) —  максимальное из чисел х, у.<br/>
    Задачу решить двумя способами:<br/>
    1) не используя функцию max;<br/>
    2) определив и использовав функцию max.<br/></h3>

<form method="POST">
    <input type=""  name="a"/>
    <input type="" name="b"/>
    <button type="submit">send </button>
</form>

--><?php
/*
$a = $_POST['a'];
$b = $_POST['b'];
$z = 0;

if ($a == 0 or $a == null or $b == 0 or $b == null) {
    echo 'Введите числовые значения кроме нуля!';
} else {
    $max1 = 0;
    if ($a > $b * 2) {
        $max1 = $a;
    } else {
        $max1 = $b;
    }

    $max2 = 0;
    if (($a * 2) - $b > $b) {
        $max2 = $a;
    } else {
        $max2 = $b;
    }

    $z = $max1 * $max2;
    echo 'Значение z = ' . $z . '<br/>';

//----  функция  -------------

    function z($x, $y)
    {
        return $x > $y ? $x : $y;
    }
    echo 'Значение z в функции  = ' . z($a, 2 * $b) * z($a * 2 - $b, $b) . '<br/>';
}
*/?>

//    ------------------------------------------------------------------------------------------------------------

<h3 style="color:#678cff">10.4.  Определить  значение z=min (a,3b)*min (2a-b,2b), где min(x,y) —  минимальное  из чисел х, у.<br/>
    Задачу решить двумя способами:<br/>
    1) не используя функцию min;<br/>
    2) определив и использовав функцию min.<br/><br/></h3>

<form method="POST">
    <p>Введите значение х </p><input type="" name="a"/>
    <p>Введите значение у </p><input type="" name="b"/>
    <button type="submit">click here</button>
</form>

<?php

$a = $_POST['a'];
$b = $_POST['b'];
$z = 0;

if (empty($a) or empty($b)) {
    echo '<br/>Введите числовые значения кроме нуля!';
} else {
    $min1 = 0;
    if ($a < ($b * 3)) {
        $min1 = $a;
    } else {
        $min1 = $b;
    }

    $min2 = 0;
    if (($a * 2) - $b < $b * 2) {
        $min2 = $a;
    } else {
        $min2 = $b;
    }

    $z = $min1 * $min2;
    echo 'Значение z = ' . $z . '<br/>';
//-----    функция  -----------------------
    function z($x, $y)
    {
        return $x < $y ? $x : $y;
    }
    echo 'Значение z в функции  = ' . z($a, 3 * $b) * z($a * 2 - $b, $b * 2) . '<br/>';
}
?>



</body>
</html>