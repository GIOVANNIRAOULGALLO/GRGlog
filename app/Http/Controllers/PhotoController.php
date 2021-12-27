<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(Request $req){
        Photo::create([
            'title'=>$req->title,
            'img'=>$req->file('img')->store('public/img')
        ]);
        return  redirect(route('userAccount'))->with('status','Hai inserito correttamente l\' immagine');
    }
    public function newPhoto(){
        return view('photo.create');
    }
}
