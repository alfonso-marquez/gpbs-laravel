<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    //
    public function create() {
    	return view('contact');
    }

    public function store(Request $request)
  	{
        // dd(config('mail'));
        // dd($request->all());


    	$this->validate($request,	[
    		'name'=> 'required',
    		'email'=> 'required|email',
    		'company'=> 'required',
    		'contact'=> 'required|numeric',
    		'message'=> 'required'
    	]);


    Mail::send('emails.contact-message', [
    	'msg' => $request->message,
        'name' =>$request->name,
        'company' =>$request->company,
        'contact' =>$request->contact,
        'email' =>$request->email
    ], function($mail) use($request) {
    	// $mail->from($request->email, $request->name);
    	$mail->from($request->email, $request->name);

    	$mail->to('patpatnastick@gmail.com')->subject('Contact Message from Website');
    });

    //  if (Mail::failures()) {
    //     // return response showing failed emails
    //     console.log('MAIL ERROR');
    // }


    return redirect()->back()->with('flash_message', 'Thank you for your Message.');
	}
}

