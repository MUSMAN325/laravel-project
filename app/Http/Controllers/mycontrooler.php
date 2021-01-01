<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\product;

class mycontrooler extends Controller
{

  function index(){
      
  return view('random');
}
function getdata(Request $req){
    $Name = $req->post('Name');
    return $Name;
}
function insert(Request $req){
    $PName = $req->get('PName');
    $PPrice = $req->get('PPrice');


    $prod = new product();

    $prod->PName = $PName;
    $prod->PPrice = $PPrice;
    $prod->save();




}
}
