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
				<h1 class="card-title text-center">Cadastrar cliente</h1>
				<div class="mb-3 px-md-5 py-2 mx-md-5">
					<form method="POST" action="{{route('clientes.store')}}">
						@csrf
						<div class="mb-3">
						<label for="FormControlInput1" class="form-label">Nome do cliente</label>
						  <input type="text" class="form-control" name="name" id="FormControlInput1" placeholder="Nome do cliente">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput2" class="form-label">Email</label>
						  <input type="email" class="form-control" name="email" id="FormControlInput2" placeholder="name@example.com">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput3" class="form-label">Telefone</label>
						  <input type="text" onkeypress="mascara(this, telefone)" maxlength="16" class="form-control" name="phone" id="FormControlInput3" placeholder="(11) 4002-8922">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput5" class="form-label">CPF</label>
						  <input type="text" class="form-control" maxlength="14" name="cpf" id="CPF" placeholder="000.000.000-00">
						</div>
						<div class="mb-3">
						  <label for="FormControlInput4" class="form-label">Data de nascimento</label>
						  <input type="text" onkeypress="mascara(this, mdata)" maxlength="10" class="form-control" name="date" id="FormControlInput4" placeholder="10/10/2002">
						</div>
						</div>
						<div class="d-flex justify-content-center">
							<button type="submit" class="btn btn-outline-success w-50"><i class="bi bi-save"></i> Salvar</button>
						</div>
				</form>
				<div class="d-flex justify-content-end mx-4 mt-3">
					<a href="{{route('menu')}}" class="link-dark">Voltar</a>
				</div>
			</div>
		</div>		
	</div>
</main>
<script type="text/javascript" src="{{ asset('js/validation.js') }}" ></script>
@endsection