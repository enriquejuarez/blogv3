@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-offset-2">
			<h1>Lista de artículos</h1>
				@foreach($posts as $post)
					<div class="card {{ $post->id }}">
						<div class="card-header">
							{{ $post->name }}
						</div>
						<div class="card-body">
							@if($post->file)
								<img src="{{ $post->file }}" class="img-fluid">
							@endif
							{{ $post->excerpt }}
							<a href="{{ route('post', $post->slug) }}">Leer más</a>
						</div>
					</div>
				@endforeach
				{{ $posts->render() }}
		</div>
	</div>
@endsection