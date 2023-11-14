<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index(){
        return Basket:: all();
    }
    public function show($id){
        return Basket:: find($id);
    }
    public function destroy($id){
        return Basket:: find($id)->delete();
       // return redirect('/book/list');
    }
   
}
