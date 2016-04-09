<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tarifasController extends Controller
{
     public function index(){

    	return view('tarifas');
    }



    public function contrato(){

    	return view('contrato');
    }

}
