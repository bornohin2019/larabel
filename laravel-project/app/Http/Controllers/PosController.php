<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosModel;

class PosController extends Controller
{
   public function show(){
    $data = PosModel::all();
    return view('home', compact('data'));
   }
}
