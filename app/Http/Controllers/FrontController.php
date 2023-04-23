<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{

    
    public function home(){
        return view('Front.home');
    }
    public function terms(){
        return view('terms');
    }

    public function contact(){
        $page_title = 'Contact Us';
            return view('Front.contact', compact('page_title'));
        }

    public function about(){
        $page_title = 'About Us';
            return view('Front.about', compact('page_title'));
    }

    public function contactform(Request $request)
    {
        
        $details = array(
            'message' => $request->input('message'), 
            'name' => $request->input('name') , 
            'email' => $request->input('email'), 
            'phone' => $request->input('phone')
    );
       
        Mail::to('info@prologistrust.com')
        ->send(new \App\Mail\ContactMail($details))
        ;
       
       return redirect()->back()->with('success', 'Contact Form Submited');
    }
    


}
