<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function add(){
        return view('manager.add_manager');
    }
    public function manage (Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $client = new User();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->password);
        $client->role_id = 2;
        // $client->password =Hash::make($request->password);
        $client->save();


        return redirect()->route('Administrateur');

    }
}
