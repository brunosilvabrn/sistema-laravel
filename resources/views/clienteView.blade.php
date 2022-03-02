@extends('layout.base')

@section('content')
	<main>
		<div class="container">
			<div class="card my-4 shadow-sm">
				<div class="card-body">
					<h1 class="card-title text-center">Cliente</h1>
					<div class="mb-3">
					  <label for="FormControlInput1" class="form-label text-secondary">Nome</label>
					  <input type="text" readonly class="form-control-plaintext" id="FormControlInput1" placeholder="" value="{{ $cliente->name }}">
					  <hr>
					  <label for="FormControlInput2" class="form-label text-secondary">Email</label>
					  <input type="email" readonly class="form-control-plaintext" id="FormControlInput2" placeholder="name@example.com" value="{{ $cliente->email }}">
					  <hr>
					  <label for="FormControlInput3" class="form-label text-secondary">Telefone</label>
					  <input type="text" readonly class="form-control-plaintext" id="FormControlInput3" placeholder="name@example.com" value="{{ $cliente->phone }}">
					  <hr>
					  <label for="FormControlInput4" class="form-label text-secondary">Data de Nascimento</label>
					  <input type="text" readonly class="form-control-plaintext" id="FormControlInput4" placeholder="0/0/0000" value="{{ $cliente->date}}">
					  <hr>
					  <label for="FormControlInput5" class="form-label text-secondary">Cpf</label>
					  <input type="text" readonly class="form-control-plaintext" id="FormControlInput5" placeholder="name@example.com" value="{{ $cliente->cpf }}">
					  <hr>
					</div>
					<div class="d-flex justify-content-between">
						<button class="btn btn-outline-success"><i class="bi bi-file-earmark-excel-fill"></i> Gerar Excel</button>
						<a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline-info"><i class="bi bi-pencil-square"></i> Editar</a>
						<button class="btn btn-outline-danger"><i class="bi bi-file-earmark-pdf-fill"></i> Gerar Pdf</button>
					</div>
					<div class="d-flex justify-content-end mx-4 mt-3">
						<a href="{{ route('clientes.index') }}" class="link-dark">Voltar</a>
					</div>
				</div>
			</div>		
		</div>
	</main>
@endsection