<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD - Teachers (Create)</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar" style="background-color: #89bbf0;">
			<div class="container-fluid">
					<a class="navbar-brand" href="http://127.0.0.1:8000">C.R.U.D</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<a class="nav-link" href="http://127.0.0.1:8000/teachers">Teacher</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="http://127.0.0.1:8000/students">Student</a>
						</li>
					</span>
				</div>
			</div>
		</nav>
		<div class="row">
        <div class="mt-4">
			<div class="col-12">
				<div class="pull-left" style="margin-top:5px">
					<h2 style="text-align: center">Add New Teacher</h2>
				</div>
			</div>
		</div>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form action="{{ route('teachers.store') }}" method="POST" class="ms-auto me-auto mt-3" style="width: 450px">
			@csrf
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Teacher Name:</strong>
						<input type="text" name="tchrname" class="form-control">
					</div>
				</div>
				<div class="mt-2">
					<div class="form-group">
						<strong>Age:</strong>
						<input type="text" name="age" class="form-control">
					</div>
				</div>
				<div class="mt-2">
					<div class="form-group">
						<strong>Address:</strong>
						<input type="text" name="address" class="form-control">
					</div>
				</div>
				<div class="mt-2">
					<div class="form-group">
						<strong>Department:</strong>
						<input type="text" name="department" class="form-control">
					</div>
				</div>
				<div class="mt-2 text-center">
					<button type="create" class="btn btn-primary" style="margin-top: 10px; position: absolute; left:40%; right:40%; background-color: green">Create</button>
					<a class="btn btn-primary" style="margin-top: 50px; position: absolute; left:40%; right:40%; background-color: red" href="{{route('teachers.index')}}">Cancel</a>
				</div>
			</div>
		</form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>