<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    
    // Google Login
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
        
            $user = Socialite::driver('google')->user();
            
           
            $findUser = User::where('provider_id', $user->id)->first();
         
            if($findUser){
         
                Auth::login($findUser);
        
                return redirect()->route('home');
         
            }else{
                $newUser = new User;
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                $newUser->provider_id = $user->id;
                $newUser->password = Hash::make($user->name.'@'.$user->id);
                $newUser->avatar = $user->avatar;
                $newUser->save();
                Auth::login($newUser);
        
                return redirect()->route('home');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logout(){
        Auth::logout();
       return  redirect()->route('home');
    }

}
