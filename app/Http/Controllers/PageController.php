<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("index");
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        //$services = ['a','b','c'];
        $data = array(
            'title' => 'ucello',
            'letters' => ['a', 'b', 'c']
        );

        return view('contact')->with($data);
    }
}
