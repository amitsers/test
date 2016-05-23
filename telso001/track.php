
<?php
	include_once "adm/connection.php";
	if(isset($_POST['page']) && $_POST['page']=='index'){

		$ip = "";
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		$sql="SELECT * FROM track_page WHERE ip ='$ip' &&  visit_date='" .date("Y-m-d"). "' && reference='$_POST[ref]'";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			$conn->query("UPDATE track_page SET views = views + 1 WHERE ip ='$ip' &&  visit_date='" .date("Y-m-d"). "' && reference='$_POST[ref]'");
		} else {
			$conn->query("INSERT INTO track_page (ip, visit_date, views, reference) VALUES ('$ip', '".date("Y-m-d")."', '1', '$_POST[ref]')");
		}
		mysqli_free_result($result);
		mysqli_close($con);
	}
?>