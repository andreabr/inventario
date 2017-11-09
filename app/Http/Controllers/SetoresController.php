<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Setor;

class SetoresController extends Controller
{
    public function index()
    {
    	$setores = Setor::all();

    	return view('setor.home', compact('setores'));
    }



}
