<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD - Students (Index)</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<style>
			td {
				text-align: center;
				vertical-align: middle
			}

			th {
				text-align: center;
				vertical-align: middle
			}
		</style>
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
        <div class="pull-left">
			<div class="row">
				<div class="mt-4">
					<h2 style="text-align: center">Students CRUD System</h2>
				</div>
				<div>
					<div class="pull-right" style="margin-bottom: 50px; display: block;">
					<a class="btn btn-success" style="display: block;  width: 20%; position: absolute; left: 40%; right: 40%; background-color: green" href="{{ route('students.create') }}">Create New Student Data</a>
					</div>
				</div>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

		<table class="table table-bordered">
            <tr>
				<th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Course</th>	
                <th>Subject</th>
				<th>Actions</th>          
			</tr>
			@foreach($students as $students)
				<tr>
					<td>{{$students->id}}</td>	
					<td>{{$students->studname}}</td>	
					<td>{{$students->age}}</td>
					<td>{{$students->address}}</td>
					<td>{{$students->course}}</td>	
					<td>{{$students->subject}}</td>	
					<td>
						<form action="{{route('students.destroy', ['students' => $students])}}" method="POST">

							<a class="btn" style="background-color: #89CFF0; padding: 10px 15px; margin-left: -100px" href="{{route('students.edit',['students' => $students])}}">Update</a>

							@csrf
							@method('DELETE')

							<button type="submit" style="background-color: #d9544d; padding: 10px 15px; margin-right: -100px">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>