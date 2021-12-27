<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public $req;
    public function contact(){
        return view('contact');
    }
    public function mailStore(Request $req){
        $email=$req->input('email');
        $name=$req->input('name');
        $text=$req->input('text');
        $contact=compact('email','name','text');
        Mail::to($email)->send(new ContactMail($contact));
        return redirect(route('thankYou'));
    }
    public function thankYou(){
        return view('thankYou');
    }
}
