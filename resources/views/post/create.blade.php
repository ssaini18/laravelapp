@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				Create Post
			</div>
			<div class="panel-body">
			    <form action="/posts" method="POST">
			        {{ csrf_field() }}
			    	<div class="form-group">
			    	<label for="content">Content</label>

			    	<textarea name="content" class="form-control"></textarea>
				    </div>

					<center>
						<button class="btn btn-success">Submit</button>
					</center>
			    </form>
			</div>
		</div>
	</div>
</div>

@endsection