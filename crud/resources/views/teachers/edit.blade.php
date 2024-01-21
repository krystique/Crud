<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD - Teachers (Update)</title>
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
                    <a class="nav-link" href="http://127.0.0.1:8000/teachers">Student</a>
                    </li>
                </span>
            </div>
        </div>
    </nav>
	<div class="row">
	<div class="mt-4" >
		<div class="col-lg-12 margin-tb">
			<div class="pull-left" style="text-align: center">
			<h2>Update Teacher Data</h2>
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

	<form method="post" action="{{route('teachers.update', ['teachers' => $teachers])}}">
		@csrf
		@method('put')

			<div class="ms-auto me-auto mt-3" style="width: 500px">

            <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />

            <div class="mt-2">
					<div class="form-group">
						<strong>Name:</strong>
						<input type="text" name="tchrname" value="{{$teachers->tchrname}}" class="form-control">
					</div>
				</div>

				<div class="mt-2">
					<div class="form-group">
						<strong>Age:</strong>
						<input type="text" name="age" value="{{$teachers->age}}" class="form-control">
					</div>
				</div>

				<div class="mt-2">
					<div class="form-group">
						<strong>Address:</strong>
						<input type="text" name="address" value="{{$teachers->address}}" class="form-control">
					</div>
				</div>

				<div class="mt-2">
					<div class="form-group">
						<strong>Department:</strong>
						<input type="text" name="department" value="{{$teachers->department}}" class="form-control">
					</div>
				</div>

				<div class="mt-2 text-center">
					<button type="update" class="btn btn-primary" style="margin-top: 10px; position: absolute; left:40%; right:40%; background-color: green">Update</button>
					<a class="btn btn-primary" style="margin-top: 50px; position: absolute; left:40%; right:40%; background-color: red" href="{{route('teachers.index')}}">Cancel</a>
				</div>
				</div>
			</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>