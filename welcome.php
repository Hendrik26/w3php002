<html>
	<body>

		 <?php 
			$nn = $_POST["name"];
			$em = $_POST["email"]; 
			$zahl01 = (int)$_POST["Zahl01"]; 
			$zahl02 = (int)$_POST["Zahl02"];
			$zahl03 = $zahl01 + $zahl02;
			$text = "PHPStorm Test004DB <br> Welcome $nn <br> Summe==$zahl03 <br> Your email address is: $em <br> <br>";
			echo $text;

         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "phpstorm001db";
         $tablename = "table001";

         try {
             $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
             // set the PDO error mode to exception
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "INSERT INTO $tablename (Nachname,eMail,Zahl01,Zahl02) VALUES ('$nn', '$em',$zahl01,$zahl02 )";
             $conn->exec($sql);
             echo "New record inserted successfully";
         } catch (PDOException $e) {
             echo $sql . "<br>" . $e->getMessage();
         }
         $conn = null;

         ?><br>
		________________________________________________

	</body>
</html>