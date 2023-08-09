<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function reserver(){
        return view('client.reservation');
    }
    public function reservation(Request $request){
   $request->validate([
            'numero' => 'integer',
            'place' => 'integer',
            'name' => 'string'
        ]);


       reservation::create([
        'name'=>Auth::user()->name,
        'numero'=>$request->numero,
        'place'=>$request->place,
       ]);

       return redirect()->intended('/reservation_liste');

}

public function liste(){
    $users = reservation::all();
    return view('client.Reservation_liste', compact('users'));
}

}
