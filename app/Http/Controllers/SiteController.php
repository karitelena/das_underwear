<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function index() {
        return view ('index');
    }

    public function collection() {
        return view ('collection');
    }

    public function archive() {
        return view ('archive');
    }

    public function contact() {
        return view ('contact');
    }

    public function about() {
        return view ('about');
    }

    public function cadastro() {
        return view ('cadastro');
    }

    public function sac() {
        return view ('sac');
    }

    public function teste() {
        return view ('teste');
    }

}
