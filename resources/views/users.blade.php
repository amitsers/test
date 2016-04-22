<!DOCTYPE html>
<html lang="en">
	<head>
		<title> User Details </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
	</head>
	<body>
		<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Sl No.</th>
						<th>User Id</th>
						<th>Name</th>
						<th>User Name</th>
						<th>Email</th>
						<th>Age</th>
						<th>Regd. Dt.</th>
						<th>Track</th>
						<th>Season Name</th>
						<th>Payment Status</th>
						<th>Audio Track</th>
					</tr>
				</thead>
				<tbody>
					{{ $i = 1}}
					@foreach ($users as $key => $user)
					
					    <tr>
							<td>{{ $i }}</td>
							<td>{{ $user['id'] }}</td>
							<td>
								{{ $user['name'] }}								
							</td>
							<td>{{ $user['username'] }}</td>
							<td>{{ $user['email'] }}</td>
							<td>{{ $user['age'] }}</td>
							<td>{{ $user['created_at'] }}</td>
							<td>
								@if(isset($users[$key]['upload_detail'][0]))
									@foreach ($users[$key]['upload_detail'] as $details)
										<b>-</b> {{ $details['file_name'] }} <br/>										
									@endforeach
								@endif
							</td>
							<td>
								@if(isset($users[$key]['upload_detail'][0]))
									@foreach ($users[$key]['upload_detail'] as $details)
										<b>-</b> {{ $details['season_name'] }} <br/>
									@endforeach
								@endif
							</td>
							<td>
								@if(isset($users[$key]['upload_detail'][0]))
									@foreach ($users[$key]['upload_detail'] as $details)
										<b>-</b> {{ $details['payment_status'] }} <br/>
									@endforeach
								@endif
							</td>
							<td>
								@if(isset($users[$key]['upload_detail'][0]))
									@foreach ($users[$key]['upload_detail'] as $details)

										@if ($details['is_selected']==0)
											<a href="#" onClick="selectUnselect({{ $user['id'] }}, 1, 1, {{ $details['id'] }})">Not Selected</a>
										@else
											<a href="#" onClick="selectUnselect({{ $user['id'] }}, 1, 0, {{ $details['id'] }})">Selected</a>
										@endif

										- {{ $details['created_at'] }} <br/>



										<audio controls class="player">
						                  	<source src="../{{ $details['file_destination'] }}/{{ $details['file_name'] }}" type="audio/mpeg">
						                  	Your browser does not support the audio element.
						                </audio>
									@endforeach
								@endif
							</td>
						</tr>
						{{ $i = $i+1}}
					@endforeach					
				</tbody>

			</table>
		</div>
		<script type="text/javascript">
			function selectUnselect(user_id, season_details_id, is_selected, song_id) {
				console.log(user_id);
				$.ajax({
					url: 'select-unselect',
					type: 'GET',
					data: {
						user_id: user_id,
						season_details_id: season_details_id,
						is_selected: is_selected,
						song_id: song_id
					},
					success: function(res) {
						console.log(res);
					}
				});
			}
		</script>
	</body>
</html>