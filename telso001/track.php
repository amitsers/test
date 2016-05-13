<?php
	include_once "connection.php";
	if(isset($_POST['page']) && $_POST['page']=='index'){

		$ip = "";
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		$sql="SELECT * FROM track_page WHERE ip ='$ip' &&  visit_date='" .date("Y-m-d"). "'";
		$result=mysqli_query($con,$sql);
		echo mysqli_num_rows($result);
		if(mysqli_num_rows($result) > 0) {
			mysqli_query($con,"UPDATE track_page SET views = views + 1 WHERE ip ='$ip' &&  visit_date='" .date("Y-m-d"). "'");
		} else {
			mysqli_query($con,"INSERT INTO track_page (ip, visit_date, views) VALUES ('$ip', '".date("Y-m-d")."', '1')");
		}
		mysqli_free_result($result);
		mysqli_close($con);
	}
?>