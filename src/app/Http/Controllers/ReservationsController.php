<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Store;
use App\User;

class ReservationsController extends Controller
{
    public function reserve(Store $store){
        return view('reservations.first')->with('store', $store);
    }

    public function user(Store $store){
        //TODO
        $user = User::find(1);
        return view('reservations.second', compact('store', 'user'));
    }

    public function store(Request $request, Store $store){
        //TODO
        $user = User::find(1);
        $this->validate($request, [
            'name' => 'required'
        ]);

        //TODO
        $reservation = new Reservation([
            'user_id' => $user->id,
            'store_id' => $store->id,
            'number_of_guests' => 1,
            'date_time' => '2018-01-02 12:30:00',
            'name' => $request->input('name'),
            'email' => '',
            'tel' => '',
            'use_scene' => 1,
            'etc' => ''
        ]);

        $reservation->save();
        return redirect()->action('HomeController@index');
    }

}
