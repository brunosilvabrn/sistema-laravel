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
				<h1 class="card-title text-center">Editar cliente</h1>
				<div class="mb-3 px-md-5 py-2 mx-md-5">
					<form method="POST" action="{{route('clientes.update', $cliente->id)}}">
						@method('PUT')
    					@csrf
						<div class="mb-3">
						<label for="FormControlInput1" class="form-label">Nome do cliente</label>
						  <input type="text" class="form-control" id="FormControlInput1" placeholder="" name="name" value="{{ $cliente->name }}">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput2" class="form-label">Email</label>
						  <input type="email" name="email" class="form-control" id="FormControlInput2" placeholder="" value="{{ $cliente->email }}">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput3" class="form-label">Telefone</label>
						  <input type="text" onkeypress="mascara(this, telefone)" maxlength="16" name="phone" class="form-control" id="FormControlInput3" placeholder="" value="{{ $cliente->phone }}">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput5" class="form-label">CPF</label>
						  <input type="text" maxlength="14" name="cpf" id="CPF" class="form-control" id="FormControlInput5" placeholder="" value="{{ $cliente->cpf }}">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput4" class="form-label">Data de nascimento</label>
						  <input type="text" onkeypress="mascara(this, mdata)" maxlength="10" name="date" class="form-control"  id="FormControlInput4" placeholder="" value="{{ $cliente->date }}">
						</div>
					</div>
						<div class="d-flex justify-content-center">
							<button type="submit" class="btn btn-outline-primary w-50"><i class="bi bi-pencil-square"></i> Salvar</button>
						</div>
					</form>
				<div class="d-flex justify-content-end mx-4 mt-3">
					<a href="{{route('clientes.index')}}" class="link-dark">Voltar</a>
				</div>
			</div>
		</div>		
	</div>
</main>
<script type="text/javascript" src="{{ asset('js/validation.js') }}" ></script>
@endsection
