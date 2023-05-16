<?php

namespace App\Http\Controllers;

use App\services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function sub(Newsletter $newsletter)
    {
    
        request()->validate(['email'=>'required|email']);

    
        try{
            $newsletter->subscribe(request('email'));
         
        }
        catch(\Exception $e){
           throw ValidationException::withMessages([
                'email'=>'This email could not be added to our newsLetter list.'
            ]);
        }
       
        return redirect('/')->with('success','You are now signed for our newsLetter');
    }
}
