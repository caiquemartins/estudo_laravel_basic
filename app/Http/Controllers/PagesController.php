<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index()
    {
        if(View::exists('pages.index'))
            return view('pages.index')
                        ->with('text', '<b>Laravel</b>');
            //  return view('pages.index', ['text' => '<b>Laravel</b>']);
        else
            return 'No view avaiable';    
    }
}
