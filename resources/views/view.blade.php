<!DOCTYPE html>
<html>
<head>
	<title>view data</title>
	    <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-10 m-auto">
			<table class="table table-border">
				<tr>
					<th>Title</th>
					<th>Category</th>
					<th>Detail</th>
				</tr>
				@foreach($data as $d)
				<tr>
					<td>{{$d->title}}</td>
					<td>{{$d->category}}</td>
					<td><a href="/viewdetail/{{$d->id}}"><i class="fa fa-eye"></i> View</a></td>
					<!-- <td>{{html_entity_decode($d->detail)}}</td> -->
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>

</body>
</html>