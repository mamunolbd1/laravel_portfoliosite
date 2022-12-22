<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Main;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        return view('frontend.pages.index', compact('main'));
    }
}
