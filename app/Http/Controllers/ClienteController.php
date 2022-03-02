<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');

        if ($search) {
            $cliente = Cliente::where([
                ['name', 'like', '%'.$search.'%']
            ])->orWhere('cpf', 'like', '%'.$search.'%')->get();
        }else {
            $cliente = Cliente::all();
        }

        return view('listadeclientes', ['adminName' => $this->getUserName(), 'clientes' => $cliente, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastrarcliente', ['adminName' => $this->getUserName(),]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'cpf' => 'required',
            'date' => 'required',
        ],[
            'name.required' => 'Preencha o campo nome.',
            'email.required' => 'Preencha o campo de Email.',
            'phone.required' => 'Preencha o campo de telefone.',
            'phone.numeric' => 'Telefone inválido.',
            'cpf.required' => 'Preencha o campo de cpf.',
            'cpf.numeric' => 'Cpf inválido.',
            'date.required' => 'Preencha o campo de data de nascimento.',
        ]);

        $flight = Cliente::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cpf' => $request->cpf,
            'date' => $request->date
        ]);

        if ($flight) {
            return redirect(route('clientes.index'))->with('sucess', 'Cliente cadastrado com sucesso');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            return redirect(route('clientes.index'));
        }

        return view('clienteView', ['adminName' => $this->getUserName(), 'cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            return redirect(route('clientes.index'));
        }

        return view('editar', ['adminName' => $this->getUserName(), 'cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'cpf' => 'required',
            'date' => 'required',
        ],[
            'name.required' => 'Preencha o campo nome.',
            'email.required' => 'Preencha o campo de Email.',
            'phone.required' => 'Preencha o campo de telefone.',
            'phone.numeric' => 'Telefone inválido.',
            'cpf.required' => 'Preencha o campo de cpf.',
            'cpf.numeric' => 'Cpf inválido.',
            'date.required' => 'Preencha o campo de data de nascimento.',
        ]);
 
        $cliente->name  = $request->name;
        $cliente->email = $request->email;
        $cliente->phone = $request->phone;
        $cliente->cpf   = $request->cpf;
        $cliente->date  = $request->date;

        if ($cliente->save()) {
            return redirect(route('clientes.index'))->with('sucess', 'Cliente editado com sucesso');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
 
        if ($cliente->delete()) {
            return redirect(route('clientes.index'))->with('sucess', 'Cliente excluido com sucesso');
        }
    }

    public function delete($id)
    {
        $cliente = Cliente::find($id);

        if (empty($cliente)) {
            return redirect(route('clientes.index'));
        }

        return view('deletar', ['adminName' => $this->getUserName(), 'cliente' => $cliente]);
    }
}
