<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class ArticleController extends Controller{
    public function create(){
        return view('cleint.article.create');
    }
    public function store(Request $request){
        $path = null;
        if(isset($request->img)){
            $name = $request->img->getClientOriginalName();
            $fullName = time()."_".$name;
            $path = $request->file('img')->storeAs('images', $fullName, 'public');
        }
        article::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'summary'=>$request->summary,
            'img'=>$path,
            'show_in_home'=>$request->show_in_home?:0
        ]);
        return to_route('article.list');
    }
    public function index(){
        $article=article::all();
        return view('cleint.article.index' , ['article']);
    }
}
