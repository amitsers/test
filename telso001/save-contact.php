<?php
	if(isset($_POST['mobile_no'])) {

		$mobile_no = $_POST['mobile_no'];
		$ip = "";
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "myDB";

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$sql = "INSERT IGNORE INTO track_mobile (mobile, ip) VALUES ('$mobile_no', '$ip')";
		$conn->query($sql);
		if ($conn->query($sql) === TRUE) {
		    echo 1;
		} else {
		    echo 2;
		}

		$conn->close();
	}
?>