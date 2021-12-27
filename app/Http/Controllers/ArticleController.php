<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Photo;
use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct(){
	$this->middleware('auth')->except('index','show');
    }
    public function index(){
        $articles=Article::take(6)->orderByDesc('id')->get();
        //prende le ultime 5 ordinate in ordine decrescente
        $photos=Photo::all();
        return view('welcome',compact('articles'),compact('photos'));
    }
    public function newArticle(){
        return view('article.create');
    }
    public function articleStore(Request $req){
        Auth::user()->articles()->create([
            'title'=>$req->title,
            'body'=>$req->body,
            'img'=>$req->file('img')->store('public/img')
        ]);
        return  redirect(route('homepage'))->with('status','il tuo articolo è stato inserito correttamente');
    }
    public function show(Article $article){
        return view('article.show',compact('article'));
    }
    public function editArticle(Article $article){
        
        return view('article.edit',compact('article'));
    }
    public function updateArticle(Request $req,Article $article){
            $article->update([
                'title'=>$req->title,
                'body'=>$req->body,
                'img'=>$req->file('img')->store('public/img')
            ]);
            return redirect(route('homepage',compact('article')));   
    }
    public function userAccount(){
        $articles=Auth::user()->articles()->get();
        return view('userAccount',compact('articles'));
    }
    public function destroy(Article $article){
        $article->delete();
        return redirect(route('homepage'));
    }
    public function destroyAccount(User $user){
        foreach($user->articles as $article){
            $article->user()->dissociate();
            $article->user()->associate(1);
            $article->save();
        }
        $user->delete();
        return redirect(route('homepage'));
    }
}
