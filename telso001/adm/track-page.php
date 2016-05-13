<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<meta name="robots" content="noindex,nofollow">
<form action="" method="GET">
	For Single Date:<br/> 
	<input type="date" placeholder='dd-mm-yyyy' name="date" /><br/><br/>
	Date Range <br/>
	From:<br/>
	<input type="date" placeholder='dd-mm-yyyy' name="from_date" /><br/>
	To:<br/>
	<input type="date" placeholder='dd-mm-yyyy' name="to_date" /><br/>
	<input type="submit" value="Submit" name="submit"/>
</form>
<br/><br/>
<?php
if(isset($_GET['submit'])){

?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Id</td>
				<td>IP</td>
				<td>Views</td>
			</tr>
		</thead>
		<tbody>
<?php
		include_once "connection.php";
		if (($_GET['from_date'] != '') && ($_GET['to_date'] != '')) {
			$from_date = $_GET['from_date'];
			$to_date = $_GET['to_date'];
			$sql = "SELECT * FROM track_page WHERE visit_date>='$from_date' && visit_date<='$to_date'  ORDER BY id ASC";
		} elseif (isset($_GET['date'])) {
			$date = $_GET['date'];
			$sql = "SELECT * FROM track_page WHERE visit_date='$date' ORDER BY id DESC";
		}
		$result = $conn->query($sql);
		$i = 1;
		$total_views = 0;
		while($row = $result->fetch_assoc()) {
			$total_views = $total_views + $row['views']
?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['ip']; ?></td>
				<td><?php echo $row['views']; ?></td>
			</tr>
<?php
		$i = $i+1;
	    }			
?>
		</tbody>
	</table>
<?php
	echo "<br/>";
	echo "<br/>";
	echo "<b>Total Views: " . $total_views . "</b>";
}
?>