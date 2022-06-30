<?php
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
	
	if(isset($_POST["btn_go"])) {
		echo "Здравствуй, $_POST[txt_username], житель города с кодом $_POST[sel_city] !";
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action="" method="POST">
			Введите ваше имя: <br/>
			<input id="txt_username" name="txt_username" type="text"/><br/>
			Выберите ваш город:<br/>
			<select name="sel_city">
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
