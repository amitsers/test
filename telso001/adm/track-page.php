


<?php
	include_once "connection.php";
?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<style type="text/css">
	.span60 {
		width: 60%;
	}

	.float-left {
		float: left;
	}

	.float-right {
		float: right;
	}

	.span30 {
		width: 30%;
	}
</style>
<meta name="robots" content="noindex,nofollow">
<form action="" method="GET">
	For Single Date:<br/> 
	<input type="date" placeholder='dd-mm-yyyy' name="date" value="<?php if(isset($_GET['date'])){echo $_GET['date'];} ?>"/><br/><br/>
	Date Range <br/>
	From:<br/>
	<input type="date" placeholder='dd-mm-yyyy' name="from_date" value="<?php if(isset($_GET['from_date'])){echo $_GET['from_date'];} ?>"/><br/>
	To:<br/>
	<input type="date" placeholder='dd-mm-yyyy' name="to_date" value="<?php if(isset($_GET['to_date'])){echo $_GET['to_date'];} ?>"/><br/><br/>
	<input type="checkbox" name="include_ref" value="true" checked> Calculate Reference Also<br/><br/>
	<button type="reset" value="Reset">Reset</button>&nbsp;&nbsp;<input type="submit" value="Submit" name="submit"/>
</form>
<br/><br/>

<?php

if(isset($_GET['submit'])){

?>
	<div class="span60 float-left">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Id</td>
				<td>IP</td>
				<td>Reference</td>
				<td>Views</td>
				<td>Page</td>
			</tr>
		</thead>
		<tbody>
<?php
		
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
		$all_ref = array(
			'goo',
			'kaa',
			'ema',
			'msg',
			'fac',
			'kaa-ad'
		);
		$ref = array();
		foreach ($all_ref as $key => $value) {
			$ref[$value]=0;
		}
		while($row = $result->fetch_assoc()) {
			$total_views = $total_views + $row['views'];

			if(isset($_GET['include_ref']) && $_GET['include_ref']='true'){
				foreach ($all_ref as $key => $value) {
					if ($row['reference'] == $value){
						$ref[$value] = $ref[$value] + $row['views'];
					}
				}
			}
			
?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['ip']; ?></td>
				<td><?php echo $row['reference']; ?></td>
				<td><?php echo $row['views']; ?></td>
				<td><?php echo $row['page']; ?></td>
			</tr>
<?php
		$i = $i+1;
	    }
?>
		</tbody>
	</table>
</div>
<div class="span30 float-right">
<?php
	echo "<br/>";
	echo "<br/>";
	echo "<b>Total Views: " . $total_views . "</b>";

	if(isset($_GET['include_ref']) && $_GET['include_ref']='true'){
		echo "<br/><b>References</b><br/>";
		foreach ($ref as $key => $value) {
			echo "Total " . $key . ": " . $value . "<br/>";
		}
	}
	echo "<br/>";	

	$page_list = "SELECT DISTINCT page FROM track_page";
	$page_list_result = $conn->query($page_list);
	$page_array = array();

	while($page_list_row = $page_list_result->fetch_assoc()) {
		if($page_list_row['page']) {
			$page_array[] = $page_list_row['page'];	
		}		
	}
	foreach ($page_array as $key => $value) {			
		$total_page_views = 0;
		$result = $conn->query($sql);
		while($row_page = $result->fetch_assoc()) {
			if($row_page['page']==$value) {
				$total_page_views = $total_page_views + $row_page['views'];
			}
		}
		echo "<b><i>".$value.":</i> ".$total_page_views."</b><br/>";
	}
	
?>
</div>
<div style="clear:both;"></div>
<br/><br/>
<div class="span60 float-left">
<?php
	
}
?>
</div>