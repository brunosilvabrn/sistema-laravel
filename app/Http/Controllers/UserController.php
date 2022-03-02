<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->intended('menu');
        }

        return view('login');
    }

    public function auth(Request $request) 
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email' => 'Email inválido',
            'email.required' => 'Preencha o campo de email',
            'password.required' => 'Preencha o campo da senha'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('menu');
        }else {
            return back()->withErrors([
                'email' => 'As credenciais fornecidas são inválidas.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
    
}