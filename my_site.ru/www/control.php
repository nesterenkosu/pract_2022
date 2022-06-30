<?php
	$a = 20;
	$b = 21;
	//Условия
	if($a == 2) {
		echo "Условие выполнено<br/>";
		echo "Поздравляем!";
	}
	else {
		echo "Условие не выполнено<br/>";
		echo "Очень жаль ;(<br/>";
	}
	
	if($b == 2) 
		echo "Однострочное условие выполнено<br/>";	
	else 
		echo "Однострочное условие не выполнено<br/>";
	
	echo "<hr/>";
	
	//Оператор выбора
	$c=5;
	switch($c) {
		case 1: {
			echo "Один<br/>";
			break;
		}
		case 5: {
			echo "Пять<br/>";
			break;
		}
		case 7: {
			echo "Семь<br/>";
			break;
		}
		default: {
			echo "Неизвестный вариант<br/>";
		}
	}
	
	/*if($c==1) {
		echo "Один<br/>";
	}else if($c==5) {
		echo "Пять<br/>";
	}else if($c==7) {
		echo "Семь<br/>";
	}else{
		echo "Неизвестный вариант<br/>";
	}*/
	
	echo "<hr/>";
	
	$d = 100;
	//Тернарный оператор присваивания (условное присваивание)
	$result=($d<10)?"Условие выполнено":"Условие не выполнено";
	
	echo "result=".$result;
	
	echo "<hr/>";
	
	//Циклы
	//цикл со счётчиком
	/*for(
			$i=начальное_значение;
			условие_которое_пока_выполняется_работает_цикл;
			операция_над_переменной_выполняемая_после_каждой_итерации
		)	
	*/
	for($i=0;$i<10;$i+=2) {
		//if($i==2) continue;
		echo "Итерация номер ".$i."<br/>";
		echo "Действия данной итерации...<br/>";
	}
	
	echo "<hr/>";
	
	$j=0;
	//цикл с предусловием
	while($j<10) {
		//if($j==1) continue;
		echo "Цикл с предусловием j=".$j."<br/>";
		$j+=1;
	}
	
	echo "<hr/>";
	
	$j=0;
	//цикл с постусловием
	do {
		//if($j==1) continue;
		
		echo "Цикл с постусловием j=".$j."<br/>";
		$j+=1;
		if($j==3) break;
	}	
	while($j<10);
	
	echo "<hr/>";
	
	//Массивы php
	
	//объявление массива
	$arr=Array(1,2,11,42,12,"one",2.12,true);
	
	/*
		$arr=Array(
			индекс1 => значение1,
			индекс2 => значение2,
			...
			индексN => значениеN
		);
	*/
	
	$arr=Array(
		10=>1,
		"some_string"=>2,
		1000=>11,
		42,12,"one",2.12,true);
	
	//добавление элементов в массива
	$arr[100]="Новый элемент массива";
	$arr["string_index"]="Элемент со строковым индексом";
	
	//Просмотр массива с помощью отладочной функции
	//print_r - информация о индексах и значениях
	//var_dump содержит информацию о типах данных
	echo "<pre>";
	var_dump($arr);
	//print_r($arr);
	echo "</pre>";
	
	//Многомерные массивы
	$users=Array(
		Array("id"=>1,"name"=>"Василий","age"=>29),
		Array("id"=>2,"name"=>"Андрей","age"=>25),
		Array("id"=>3,"name"=>"Николай","age"=>40),
	);
	
	//$arr = [2,10,"Test"];
	
	//Цикл обхода массива
	/*
		foreach(массив As ключ_элемента=>значение_элемента){
		}
	*/
	foreach($arr As $k=>$v) {
		echo "<b>Ключ: $k</b><br/>";
		echo "<b>Значение: $v</b>";
		echo "<hr/>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			table, td, th {
				border-size: 1px; 
				border-style: solid;				
			}
			
			table {
				width: 100%;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>ID</th>
				<th>Имя</th>
				<th>Возраст</th>
			</tr>
			<?foreach($users As $user):?>
			<tr>
				<td><?=$user["id"]?></td>
				<td><?=$user["name"]?></td>
				<td><?=$user["age"]?></td>
			</tr>
			<?endforeach;?>
		</table>
	</body>
</html>	
	