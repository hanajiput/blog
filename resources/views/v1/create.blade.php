<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>

	<body>
		@if ($errors->any())
		<div class="alert alert-danger">
		<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
		</ul>
		</div><br />
		@endif

		@if (\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div><br />
		@endif

		<form method="post" action="{{url('v1')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="container">
			<h2>Penambahan Data Mahasiswa</h2><br/>
			<form method="post">

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nim">NIM mahasiswa:</label>
						<input type="text" class="form-control" name="nim">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="nama">Nama Mahasiswa:</label>
						<input type="text" class="form-control" name="nama">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="fakultas">Fakultas</label>
						<input type="text" class="form-control" name="fakultas">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="jurusan">Jurusan</label>
						<input type="text" class="form-control" name="jurusan">
					</div>
				</div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="jurusan">
          </div>
        </div>

        <div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="password">Password</label>
						<input type="text" class="form-control" name="jurusan">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<button type="submit" class="btn btn-success" style="marginleft:38px">Tambahkan Data</button>
					</div>
				</div>

			</form>
		</div>
	</body>
</html>
