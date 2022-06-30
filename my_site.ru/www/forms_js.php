<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#btn_go").click(function(){
					var username=$("#txt_username").val();
					var city=$("#sel_city").val();
					
					alert(
						"Здравствуйте, "+username+"! \n"+
						"Вы проживаете в городе с кодом "+city
					);
				});
			});
		</script>
	</head>
	<body>
		<form action="" method="POST">
			Введите ваше имя: <br/>
			<input id="txt_username" name="txt_username" type="text"/><br/>
			Выберите ваш город:<br/>
			<select id="sel_city" name="sel_city">
			  <option value="74">Челябинск</option>
			  <option value="80">Москва</option>
			  <option value="90">London</option>
			</select><br/>
			<input id="btn_go" 
					name="btn_go" 
					type="submit" 
					value="Нажать!"/>
		</form>
	</body>
</html>
