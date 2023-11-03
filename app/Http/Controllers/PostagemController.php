<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Postagem;

class PostagemController extends Controller
{
    public function index(){
        $postagens = Postagem::all();

        return view("postagem.index",compact("postagens"));
    }
    public function new(){
        return view("postagem.new");
    }
    public function save(Request $request){
        $postagem = new Postagem;
        $postagem->titulo = $request->titulo;
        $postagem->texto = $request->texto;
        $postagem->save();

        return redirect("/view/".$postagem->id);
    }
    public function view($id){
        $postagem = Postagem::find($id);

        return view("postagem.view",compact("postagem"));
    }
}
