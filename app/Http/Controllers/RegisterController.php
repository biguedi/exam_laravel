<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('user.register');
    }
 
    public function store(Request $request)
    {
       $input = $request->all();
 
       User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password'])
      ]);

      return view('user.login');
     // return back()->with('success', 'Inscription réussie. Veuillez vous connecter !');
      //return redirect()->route('login')->with('success', 'Inscription réussie. Veuillez vous connecter !');
      
    }
 
}