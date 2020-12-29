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
			@foreach($dataa as $d)
			<h2>{{$d->title}}</h2>
			{!! $d->detail !!}
			@endforeach
		</div>
	</div>
</div>

</body>
</html>

