<!DOCTYPE html>
<html>
	<head>
		<title>Наш первый пример</title>
		<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
				//Главная функция jquery-программы
				$("#btn_go").click(function(){
					//Функция, которая будет вызвана 
					//при нажатии на кнопку
										
					var a = 20;
					
					//Условия
					if(a == 2) {
						document.write("Условие выполнено. Поздравляем!");	
					}
					else {
						document.write("Условие не выполнено. Очень жаль ;(");						
					}
				
					document.write("<hr/>");
					
					var b = 21;
					if(b == 2) 
						document.write("Однострочное условие выполнено<br/>");	
					else 
						document.write("Однострочное условие не выполнено<br/>");;
	
					document.write("<hr/>");
					
					//Оператор выбора
					var c=5;
					switch(c) {
						case 1: {
							document.write("Один<br/>");
							break;
						}
						case 5: {
							document.write("Пять<br/>");
							//break;
						}
						case 7: {
							document.write("Семь<br/>");
							break;
						}
						default: {
							document.write("Неизвестный вариант<br/>");
						}
					}
					
					document.write("<hr/>");
	
					var d = 100;
					//Тернарный оператор присваивания (условное присваивание)
					var result=(d<10)?"Условие выполнено":"Условие не выполнено";
					
					document.write("result="+result);
					
					document.write("<hr/>");
					
					//Циклы
					//цикл со счётчиком
					/*for(
							$i=начальное_значение;
							условие_которое_пока_выполняется_работает_цикл;
							операция_над_переменной_выполняемая_после_каждой_итерации
						)	
					*/
					var i;
					for(i=0;i<10;i+=2) {
						if(i==2) continue;
						document.write("Итерация номер "+i+"<br/>");
						document.write("Действия данной итерации...<br/>");
					}
					
					document.write("<hr/>");
					
					var j=0;
					//цикл с предусловием
					while(j<10) {
						//if($j==1) continue;
						document.write("Цикл с предусловием j="+j+"<br/>");
						j+=1;
					}
					
					document.write("<hr/>");
					
					var j=0;
					//цикл с постусловием
					do {
						//if($j==1) continue;
						
						document.write("Цикл с постусловием j="+j+"<br/>");
						j+=1;
						if(j==3) break;
					}	
					while(j<10);
					
					document.write("<hr/>");
					
					var arr = [1,2,11,42,12,"one",2.12,true];
					
					arr[1000]="Тысячный элемент";
					
					for(i=0;i<arr.length;i++)
						document.write(arr[i]+"<br/>");
					
					document.write("<hr/>");
					
					for(var key in arr) {
						document.write(arr[key]+"<br/>");
					}
				});
			});
		</script>
	</head>
	<body>
		
		<input id="btn_go" type="button" value="Нажать!"/>
	</body>
</html>
