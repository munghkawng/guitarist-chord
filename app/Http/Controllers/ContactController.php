<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{

    // Contact form
    public function index(){
      return view('components.contact');
    }


    public function storeFormSubmit(Request $request){


      \Mail::send('components.mail',array(
        'fullName'=>$request->fullName,
        'subject'=>$request->subject,
        'messages'=>$request->message,
        'uploaderEmail'=>$request->uploaderEmail,
      ),function($message) use($request){
        $message->from($request->uploaderEmail);
        $message->to('mung@guitaristchord.com','admin')->subject($request->fullName);

      });
      return redirect()->route('show.thank')->with('success','We have received your message and would like to thank you for reaching out to us ');



    }

    public function thankyou(){
      if(session('success')){
        return view('components.thankyou');
      }else {
        return abort(404,'Page Not Found');
      }

    }
}
