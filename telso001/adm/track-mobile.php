<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<meta name="robots" content="noindex,nofollow">
<table class="table table-bordered">
	<thead>
		<tr>
			<td>Id</td>
			<td>Mobile</td>
			<td>IP</td>
		</tr>
	</thead>
	<tbody>
<?php
	include_once "connection.php";
	$sql = "SELECT * FROM track_mobile ORDER BY id DESC";
	$result = $conn->query($sql);
	$i = 1;
	while($row = $result->fetch_assoc()) {
?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['mobile']; ?></td>
			<td><?php echo $row['ip']; ?></td>
		</tr>
<?php
	$i = $i+1;
    }
?>
	</tbody>
</table>