@extends('layouts.app')

@section('content')

@forelse($posts as $post)

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				Posted By {{ $post->user->name }}
				<a href="/posts/{{ $post->id }}" class="pull-right">Read More</a>
			</div>
			<div class="panel-body">
			    <center>
			    <h5>Posted {{ $post->created_at->diffForHumans() }}</h5>
			    <p>{{ $post->shortContent }}</p>
			    </center>
			</div>
		</div>
	</div>
</div>
@empty

<center>No Articles to display.</center>

@endforelse

@endsection