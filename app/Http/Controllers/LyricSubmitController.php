<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LyricSubmitController extends Controller
{
    //Index

    public function index(){
      return view('components.lyric_submit_form');
    }
}
