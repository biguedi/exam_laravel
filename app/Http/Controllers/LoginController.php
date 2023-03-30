<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    
    public function login()
    {
        return view('user/login');
    }
 
    public function check(Request $request)
    {
     $credentials = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials))
        {
            return view('reservation');
         }
         return back()->withErrors([
            'password' => 'Email ou Mot de passe incorrect',
        ]);
            
       }
 
}
