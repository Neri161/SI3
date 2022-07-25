<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Spatie\Newsletter\NewsletterFacade;

class registroMailChimp extends Controller
{
    //
    public function registrarMail(Request $request){
        if(!NewsletterFacade::isSubscribed($request->user_email) ) {
            NewsletterFacade::subscribePending($request->user_email, ['FNAME'=>$request->user_name, 'LNAME'=>$request->user_last]);
            return view('book');
        }
    }
}
