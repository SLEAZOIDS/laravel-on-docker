<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
    public function show(Store $store){
      return view('stores.show')->with('store', $store);
    }

}
