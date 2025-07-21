<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;

class ServiceController extends Controller
{
   public function index(){
      $anuncios = Anuncio::all();
      
    return view('welcome', ['anuncios' => $anuncios]);
   }

  public function create(){
   return view('services.create');
  } 
}

