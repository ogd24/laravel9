<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegistrationController extends Controller
{

    public function index(){
        return view('auth/register');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $client = new User();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->password);
        $client->role_id = 3;
        // $client->password =Hash::make($request->password);
        $client->save();


        return redirect()->intended('/login');
    }
}
