<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
	@section('styles_laravel')
	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/dataTables.bootstrap4.min.css') !!}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300" rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	@show
	@yield('my_styles')
</head>
<body>
    <div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				@yield('content')
			</div>
		</div>
	</div>
	<!-- Scripts -->
	{!! Html::script('assets/js/jquery-3.5.1.js') !!}
	{!! Html::script('assets/js/jquery.dataTables.min.js') !!}
	{!! Html::script('assets/js/dataTables.bootstrap4.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	<script>
	$(document).ready(function(){
		$('#MyTable').dataTable();
	});
	</script>
	@yield('my_scripts')
</body>
</html>