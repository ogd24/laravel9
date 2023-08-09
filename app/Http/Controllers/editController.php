<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class editController extends Controller
{
public function modifier(){
    return view('admin.edit');
}

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.edit', compact('users'));
    }

    public function update(Request $request , $id)
    {

       $input = $request->all();
       User::findOrFail($id)->update($input);

        return redirect()->route('Administrateur');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return back();
    }

}
