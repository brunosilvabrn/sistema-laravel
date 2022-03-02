@extends('layout.base')

@section('content')
<main>
  <div class="container">
    <div class="card my-4 shadow-sm">
      <div class="card-header">
        <h1 class="card-title text-center">MENU</h1>
      </div>
      <div class="card-body d-flex justify-content-around">
        <a href="{{route('clientes.create')}}" class="btn btn-success"><i class="bi bi-plus-square"></i> Novo cliente</a>
        <a href="{{route('clientes.index')}}" class="btn btn-info"><i class="bi bi-list-ul"></i> Lista de clientes</a>
      </div>
    </div>
  </div>
</main>
@endsection
