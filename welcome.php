<html>
	<body>

		 <?php 
			$nn = $_POST["name"];
			$em = $_POST["email"]; 
			$zahl01 = (int)$_POST["Zahl01"]; 
			$zahl02 = (int)$_POST["Zahl02"];
			$zahl03 = $zahl01 + $zahl02;
			$text = "Welcome $nn <br> Summe==$zahl03 <br> Your email address is: $em";
			echo $text; 
		?><br>
		________________________________________________

	</body>
</html>