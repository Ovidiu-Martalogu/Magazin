<?php

namespace App\Http\Controllers;
use App\Models\productsModel;


use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
       // $products=productsModel::all();
       // return view('Guest',  compact("products"));
       $data = productsModel::latest()->paginate(10);
        
        return view('Guest', compact('data'))->with('i', 'log in');
}

}
