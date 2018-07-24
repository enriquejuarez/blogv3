@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Ver Etiqueta
					</div>
					<div class="card-body">
						<p><strong>Nombre</strong>{{ $category->name }}</p>
						<p><strong>Slug</strong>{{ $category->slug }}</p>
						<p><strong>Contenido</strong>{{ $category->body }}</p>
					</div>
				</div>	
			</div>
		</div>
	</div>
@endsection