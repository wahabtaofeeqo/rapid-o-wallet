<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {
    
    public function index() {
    	return view('index');
    }

    public function contact(Request $request) {
    	return response(array('message' => 'Hello'), 200);
    }

    public function about() {
    	return view('about');
    }
}