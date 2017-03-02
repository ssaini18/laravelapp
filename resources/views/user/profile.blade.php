@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img class="img-circle" src="{{ route('getimage', ['filename' => $user->username.'-'.$user->id.'.jpg']) }}"
				width="150" height="150">
				<center>
					<form action="/upload" method="POST" enctype="multipart/form-data">
						<input type="file" name="image">
						<input class="btn btn-primary" type="submit" value="Upload">
						{{ csrf_field() }}
					</form>
				</center>
				<h1>{{ $user->name }}</h1>
				<h5>{{ $user->email }}</h5>
				<h5>{{ $user->dob }} ( {{ Carbon\Carbon::createFromFormat('Y-m-d', $user->dob)->age }} years old )</h5>
				<button class="btn btn-success">Follow</button>
			</div>
		</div>
	</div>
</div>

@endsection