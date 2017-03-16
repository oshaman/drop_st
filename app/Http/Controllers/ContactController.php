<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends MainController
{
    public function __construct()
    {
        $this->title = 'Contact Us';
        $this->keywords = 'Contact';
        $this->meta_desc = "Contact";
        $this->content_temp = '.contact.content';
        
        $this->template = config('settings.theme') . '.contact.contact';
    }
    
    public function index(Request $request)
    { 
        if ($request->isMethod('post')) {
		    
            $this->validate($request, [
		        'name' => 'required|max:255',
		        'email' => 'required|email',
				'text' => 'required'
		    ]);
			
            $data = $request->except('_token');

            Mail::send(config('settings.theme').'.contact.email', ['data' => $data], function ($m) use ($data) {
				$mail_admin = env('MAIL_ADMIN');
				
	            $m->from($data['email'], $data['name']);

	            $m->to($mail_admin, 'Mr. Admin')->subject('Question');
	        });
			
            if( count(Mail::failures()) === 0 ) {
                return redirect()->route('contact')->with('status', 'Email is send');
            }
        
        
        
        }
        return $this->renderOutput();
    }
    
}