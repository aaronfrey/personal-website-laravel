<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function contact() {
    	return view('pages.contact');
    }

    function home() {
    	return view('pages.home');
    }

    function plugins() {
    	return view('pages.plugins');
    }

    function resume() {
    	return view('pages.resume');
    }
}
