<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\PosModel; 

class PosController extends Controller
{
    public function show()
    {
        $data = PosModel::all(); 
        dd($datas->toArray()); 

   //  return view('welcome')->compact($data);
    }
}
?>
