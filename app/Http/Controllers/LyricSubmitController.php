<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class LyricSubmitController extends Controller
{

    // lyric submit form
    public function index(){
      return view('components.lyric_submit_form');
    }


    public function storeFormSubmit(Request $request){


      \Mail::send('components.mail',array(
        'songTitle'=>$request->songTitle,
        'artistName'=>$request->artistName,
        'lyrics'=>$request->lyrics,
        'uploaderName'=>$request->uploaderName,
        'uploaderEmail'=>$request->uploaderEmail,
      ),function($message) use($request){
        $message->from($request->uploaderEmail);
        $message->to('mung@guitaristchord.com','admin')->subject($request->songTitle);

      });
      return redirect()->route('show.thank')->with('success','We have received your request and would like to thank you for submitting to us ');



    }

    public function thankyou(){
      if(session('success')){
        return view('components.thankyou');
      }else {
        return abort(404,'Page Not Found');
      }

    }
}
