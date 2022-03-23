<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    // public function index(){
    //     return view('home', ['contacts'=>Contact::index()]);
    // }
    public function index(){
        return view('beranda');
    }
   
}
