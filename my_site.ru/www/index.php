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
					alert("Привет, "+$("#txt_username").val()+"!");
					
					var a = 2;
					var b = 21;
					//Условия
					if(a == 2) {
						alert("Условие выполнено. Поздравляем!");						
					}
					else {
						alert("Условие не выполнено. Очень жаль ;(");						
					}
				
				});
			});
		</script>
	</head>
	<body>
		<?
			for($i=0;$i<10;$i++) {
				echo "Hello, PHP!<br/>";
			}
		?>	
		<b>Hello</b>, <i>world</i>! <br/>
		<hr/>
		Введите ваше имя: <br/>
		<input id="txt_username" type="text"/><br/>
		Выберите ваш город:<br/>
		<select>
		  <option>Челябинск</option>
		  <option>Москва</option>
		</select><br/>
		<input id="btn_go" type="button" value="Нажать!"/>
	</body>
</html>
