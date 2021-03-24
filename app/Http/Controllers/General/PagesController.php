<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller {
    
    public function index() {
    	return view('index');
    }

    public function about() {
    	return view('about');
    }

    public function contact(Request $request) {

    	$contact = new Contact();
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->message = $request->message;

    	$admin = "taofeekolamilekan218@mail.com";
    	Mail::to($admin)->send(new ContactMail($contact));

    	return response('Done', 200);
    	//return (new ContactMail($contact))->render(); //response(array('message' => 'Hello'), 200);
    }
}