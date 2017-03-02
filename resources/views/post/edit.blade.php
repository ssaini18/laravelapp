@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				Edit Post
			</div>
			<div class="panel-body">
			    <form action="/posts/{{ $post->id }}" method="POST">
			        {{ csrf_field() }}
			        {{ method_field('PUT') }}
			    	<div class="form-group">
			    	<label for="content">Content</label>

			    	<textarea name="content" class="form-control">{{ $post->content }}</textarea>
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