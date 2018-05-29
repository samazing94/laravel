<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use View;

class PagesController extends Controller
{
    public function index()
    {
    	if(View::exists('pages.index')){
    		return view('pages.index')->with('text','<b>Lara</b>');
    	}
    	else {
    		return 'no view available';
    	}
    }
}
