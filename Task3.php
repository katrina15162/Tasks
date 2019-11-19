<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Странный Калькулятор</title>
</head>
<body>
	
</body>
</html>


<?php 
$n = $_POST['n']; //принимаем значение N из формы
$k = $_POST['k']; //принимаем значение K из формы
$i = 1; //так как массивы в php нумеруются с 0, то примем начало как 1
$array = []; //инициализируем массив
if ($_POST['button']) //обработчик события нажатия кнопки
{
    for($i; $i <= $n; $i++){ //цикл генерации массива
        $array[$i-1] = "$i"; //запись значения в массив, -1 т.к. i=1
        }
        sort($array, SORT_STRING); //сортировка цифр как текста
        $ans = array_search($k, $array)+1; //поиск K в массиве, +1 т.к. массивы нумеруются в php с 0
}
        echo $ans; //вывод ответа
?>
 <form method="POST" action=""> <!--Посылка запроса из формы-->
               <input type="text" placeholder="n" name="n" required><br>
               <input type="text" placeholder="k" name="k" required><br>
<input type="submit" name="button" value="Считать">
</form>
