<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    /*

    public function about(){
    	$title = 'About us';
    	return view('pages.about')->with('title', $title);
    }

    public function services(){
    	$data = array(
    		'title' => 'Our services',
    		'services' => ['Web Design', 'Web Development', 'Web Security']
    	);
    	return view('pages.services')->with($data);
    }

    */
}
