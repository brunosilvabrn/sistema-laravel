@extends('layout.base')

@section('content')
<main>
    <div class="container">
        <div class="card mt-4 shadow-sm">
            <div class="card-body table-responsive">
                @if(session('sucess'))
                <div class="d-flex justify-content-center">
                    <div class="alert alert-success w-50 text-center">
                        {{ session('sucess') }}
                    </div>
                </div>
                @endif
                <h1 class="card-title text-center">Lista de clientes</h1>
                <div class="d-flex justify-content-start flex-row-reverse my-2">
                    {{-- <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="bi bi-search"></i> Pesquisar
                    </button> --}}
                    {{-- <div class="collapse" id="collapseExample"> --}}
                    <form action="{{ route('clientes.index') }}" method="GET">
                    <div class="input-group px-3">
                      
                      <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar Nome ou Cpf">
                      <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                      
                    </div> 
                    </form>
                    {{-- </div> --}}
                </div>
                @if($search)
                  <p class="mx-2 card-text">Buscando por: <strong> {{ $search }} </strong></p>
                @endif
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col" width="40px">Id</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Email</th>
                      <th scope="col">Cpf</th>
                      <th scope="col" width="175px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($clientes as $user)
                    <tr>
                      <th scope="row">{{ $user->id }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->cpf }}</td>
                      <td>
                        <a href="{{ route('clientes.show', $user->id) }}" class="btn btn-outline-primary mx-1"><i class="bi bi-book-half"></i></a>
                        <a href="{{ route('clientes.edit', $user->id) }}" class="btn btn-outline-warning mx-1"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('clientes.delete', $user->id) }}" class="btn btn-outline-danger mx-1"><i class="bi bi-trash3-fill"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @if(count($clientes) == 0 && $search)
                  <h2 class="text-center">Nenhum usuário com os dados {{ $search }} encontrado</h2>
                @elseif(count($clientes) == 0)
                  <h2 class="text-center">Nenhum usuário encontrado</h2>
                @endif
                </div>  
            </div>
        </div>      
    </div>
    </main>
@endsection
