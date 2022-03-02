@extends('layout.base')

@section('content')

<main>
	<div class="container">
		<div class="card my-4 shadow-sm">
			<div class="card-body">
				@if ($errors->any())
				<div class="d-flex justify-content-center">
				    <div class="alert alert-danger w-50">
			            @foreach ($errors->all() as $error)
			                <p class="text-center">{{ $error }}</p>
			            @endforeach
				    </div>
				</div>
				@endif
				<h1 class="card-title text-center">Deseja realmente excluir esse cliente?</h1>
				<div class="mb-3 px-md-5 py-2 mx-md-5">
					<form method="POST" action="{{route('clientes.destroy', $cliente->id)}}">
    					@csrf
						<div class="mb-3">
							<label for="FormControlInput1" class="form-label text-secondary">Nome</label>
							<input type="text" readonly class="form-control-plaintext" id="FormControlInput1" placeholder="" value="{{ $cliente->name }}">
							<hr>
							<label for="FormControlInput2" class="form-label text-secondary">Email</label>
							<input type="email" readonly class="form-control-plaintext" id="FormControlInput2" placeholder="name@example.com" value="{{ $cliente->email }}">
							<hr>
						</div>
				</div>
						<div class="d-flex justify-content-around">
							
							<a href="{{route('clientes.index')}}" type="submit" class="btn btn-outline-info w-25"><i class="bi bi-pencil-square"></i> Voltar</a>
							<button type="submit" class="btn btn-outline-danger w-25"><i class="bi bi-pencil-square"></i> Excluir</button>
						</div>
					</form>			
			</div>
		</div>		
	</div>
</main>
{{-- <script type="text/javascript" src="{{ asset('js/validation.js') }}" ></script> --}}
@endsection
