<h1>Задание 1</h1>
<?
$a = rand(-1000,1000);
$b = rand(-1000,1000);
?>
<?=$a;?> <br> <?=$b;?>
<?if($a >= 0 && $b >= 0):?><p>оба числа положительные или больше ноля</p>
<p>Делаем вычитание:</p><?echo ($a - $b);?>
<?elseif($a < 0  && $b < 0):?><p>оба числа отрицательные</p>
 <p>Делаем умножение:</p><?echo ($a * $b);?> 
 <?elseif($a >= 0  && $b < 0 || $a < 0  && $b >= 0):?><p>а и b разных знаков</p>
 <p>Делаем сложение:</p><?echo ($a + $b);?> 
<?endif;?>
<h1>Задание 2 (1 вариант)</h1>
<?
function v($a){
    if($a==16){
        return;
    }
    echo$a." ";
    v($a+1);
}
v(rand(0,15));?>
<h1>Задание 2 (2 вариант)</h1>
<?
$a = rand(0,15);
switch($a){
    case 0:
        echo "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
	break;
	case 1:
        echo "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
	break;
    case 2:
        echo "2 3 4 5 6 7 8 9 10 11 12 13 14 15";
	break;
    case 3:
        echo "3 4 5 6 7 8 9 10 11 12 13 14 15";
	break;
    case 4:
        echo "4 5 6 7 8 9 10 11 12 13 14 15";
	break;
    case 5:
        echo "5 6 7 8 9 10 11 12 13 14 15";
	break;	
    case 6:
        echo "6 7 8 9 10 11 12 13 14 15";
	break;	
    case 7:
        echo "7 8 9 10 11 12 13 14 15";
	break;
    case 8:
        echo "8 9 10 11 12 13 14 15";
	break;	
    case 9:
        echo "9 10 11 12 13 14 15";
	break;
    case 10:
        echo "10 11 12 13 14 15";
	break;
    case 11:
        echo "11 12 13 14 15";
	break;
    case 12:
        echo "12 13 14 15";
	break;
    case 13:
        echo "13 14 15";
	break;
    case 14:
        echo "14 15";
	break;
    case 15:
        echo "15";
	break;		
}?>
<h1>Задание 3</h1>
<p>Функция сложения</p>
<?
function sum($a,$b){
echo $a+$b;
return $a+$b;
    }
sum(20,10);
?>
<p>Функция вычитания</p>
<?
function raz($a,$b){
echo $a-$b;
return $a-$b;
    }
raz(20,10);
?>
<p>Функция умножения</p>
<?
function pro($a,$b){
echo $a*$b;
return $a*$b;
    }
pro(20,10);
?>
<p>Функция деления</p>
<?
function del($a,$b){
echo $a/$b;
return $a/$b;
    }
del(20,10);
?>
<h1>Задание 4</h1>
<?
function mathOperation($arg1, $arg2, $operation){
	switch($operation){
    case "+":
        echo "Функция сложения";?><br><?
		sum($arg1, $arg2);break;
    case "-":
        echo "Функция вычитания";?><br><?
		raz($arg1, $arg2);break;
	case "*":
        echo "Функция умножения";?><br><?
		pro($arg1, $arg2);break;
	case "/":
        echo "Функция деления";?><br><?
		del($arg1, $arg2);break;
	}
	}
mathOperation(6,2,"-");?>
<h1>Задание 5</h1>
<p>Выполнил на прошлом уроке, шаблон в Git</p>
<h1>Задание 6</h1>
<?
function power($val, $pow) {
  if ($pow == 0) {
    return 1;
  }
  if ($pow < 0) {
    return power(1/$val, -$pow);
  }
  return $val * power($val, $pow-1);
}
echo(power(3, 3)); 
?>
<h1>Задание 7</h1>
<?
/* Изначально пробовал выяснять часы и минуты на предмет четности, но получилось коряво. Сделал используя swith */
$hour = date ("H");
$min = date ("i");

switch($hour){
    case 01:
        $hs = "час";
		break;
	case 02:
        $hs = "часа";
		break;
	case 03:
        $hs = "часа";
		break;
	case 04:
        $hs = "часа";
		break;
	case 21:
        $hs = "час";
		break;
	case 22:
        $hs = "часа";
		break;
	case 23:
        $hs = "часа";
		break;
	case 24:
        $hs = "часа";
		break;
   default:
        $hs = "часов";
		break;
	
	}
	switch($min){
    case 01:
        $ms = "минута";
		break;
	case 02:
        $ms = "минуты";
		break;
	case 03:
        $ms = "минуты";
		break;
	case 04:
        $ms = "минуты";
		break;
	case 21:
        $ms = "минута";
		break;
	case 22:
        $ms = "минуты";
		break;
	case 23:
        $ms = "минуты";
		break;
	case 24:
        $ms = "минуты";
		break;
	case 31:
        $ms = "минута";
		break;
	case 32:
        $ms = "минуты";
		break;
	case 33:
        $ms = "минуты";
		break;
	case 34:
        $ms = "минуты";
		break;
	case 41:
        $ms = "минута";
		break;
	case 42:
        $ms = "минуты";
		break;
	case 43:
        $ms = "минуты";
		break;
	case 44:
        $ms = "минуты";
		break;
	case 51:
        $ms = "минута";
		break;
	case 52:
        $ms = "минуты";
		break;
	case 53:
        $ms = "минуты";
		break;
	case 54:
        $ms = "минуты";
		break;
   default:
        $ms = "минут";
		break;
	
	}?>
<p>Текущее время: <?=$hour?> <?=$hs?> <?=$min?> <?=$ms?></p>
