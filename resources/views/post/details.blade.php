@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				Posted By {{ $post->user->name }}
				<h5 class="pull-right">{{ $post->created_at->diffForHumans() }}</h5>
			</div>
			<div class="panel-body">
			    <center>
			    <p>{{ $post->content }}</p>
			    </center>
			    @if($post->user == Auth::user())
				    <a href="/posts/{{ $post->id }}/edit">
				    	<button class="btn btn-primary pull-left">Edit</button>
				    </a>
				    <form action="/posts/{{ $post->id}}" method="POST">
				    	{{ csrf_field() }}
				    	{{ method_field('DELETE') }}
				    	<button class="btn btn-danger pull-right" >Delete</button>
				    </form>
			    @endif
			</div>
		</div>
	</div>
</div>

@endsection