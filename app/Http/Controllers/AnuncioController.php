<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;

class AnuncioController extends Controller
{
    public function index(){
      $anuncios = Anuncio::all();
      
        return view('welcome', ['anuncios' => $anuncios]);
    }

    public function create(){
    return view('anuncios.create');
    }

  public function store(Request $request){
        
       
        $request->validate([
            'title' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string'
        ]);

        $anuncio = new Anuncio;

        $anuncio->title = $request->title;
        $anuncio->city = $request->city;
        $anuncio->price = $request->price;
        $anuncio->description = $request->description;
        $anuncio->items = $request->items;


        //Image upload
        if ($request->hasfile('image') && $request->file('image')->isValid()){
          $requestImage = $request->image;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $request->image->move(public_path('img/anuncios'), $imageName);

          $anuncio->image = $imageName;

        }

        $anuncio->save();
        
        return redirect('/')->with('success', 'Anúncio criado com sucesso!');
    }
    public function show($id){
      $anuncio = Anuncio::findOrFail($id);
      return view('anuncios.show', ['anuncio' => $anuncio]);
    }
}
      
