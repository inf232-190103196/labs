<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
	form{
		width: 100%;
		justify-content: center;
		align-items: center;
	}
		input{
			display: block;
			margin: 10px auto;
			align-items: center;
			justify-content: center;
			position: relative;
			border-radius: 12px;
			text-align: center;
			
		}
		input:focus{
			border: 2px solid #ff2400;
			text-decoration: none;
			
		}
	</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
@if (count($errors) > 0)
<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>
				{{ $error }}
			</li>
			@endforeach
		</ul>
</div>
@endif
<form method="POST" action = "{{  route('add-post') }}">
			@csrf
			<input type="text" name="title" placeholder="title">
			<input type="text" name="body" placeholder="body">
			<input type="file" name="filename">
    		<input type="submit" value="Upload file">
			
		</form>

</body>
</html>