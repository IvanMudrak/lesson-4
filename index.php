<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Занятие 4</title>

</head>
<body><h3 style="color:#678cff">10.3.  Определить  значение z=max (a,2b)*max (2a-b,b), где max(x,y) —  максимальное из чисел х, у.<br/>
    Задачу решить двумя способами:<br/>
    1) не используя функцию max;<br/>
    2) определив и использовав функцию max.<br/></h3>



<form method="POST">
    <input type="" name="a"/>
    <input type="" name="b"/>
    <button type="submit">send </button>
</form>

<?php


$a = $_POST['a'];
$b = $_POST['b'];
$z = 0;

$max1 = 0;
if($a > $b*2){
    $max1 = $a;
}else{
    $max1 = $b;
}

$max2 = 0;
if(($a*2)-$b > $b){
    $max2 = $a;
}else{
    $max2 = $b;
}

$z = $max1 * $max2;
echo 'Значение z = '.$z.'<br/>';
//-------------------------------------

function z($x,$y){
    return  $x > $y?$x:$y;
}

echo 'Значение z в функции  = '.z($a,2*$b)*z($a*2-$b,$b).'<br/>';
?>



</body>
</html>