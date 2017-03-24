<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Lang;
use Features\Logic\CheckCaptcha;

class ContactsController extends MainController
{
    public function __construct()
    {
        $this->title = 'Contact Us';
        $this->keywords = 'Contacts';
        $this->meta_desc = "Contacts";
        $this->content_temp = '.contacts.content';
        
        $this->template = config('settings.theme') . '.contacts.contacts';
    }
    
    public function index(Request $request)
    { 
        if ($request->isMethod('post')) {
		    
            if (!$request->has('g-recaptcha-response')) {
                return back()->withErrors([Lang::get('captcha.re-enter')]);
            }
            
            $captcha = $request->input('g-recaptcha-response');

            if (false == CheckCaptcha::run($captcha)) {
                return back()->withErrors([Lang::get('captcha.re-enter')]);
            }
            
            
            $this->validate($request, [
		        'name' => 'required|string|max:255',
		        'email' => 'required|email',
				'text' => 'required'
		    ]);
			
            $data = $request->except('_token');

            Mail::send(config('settings.theme').'.contacts.email', ['data' => $data], function ($m) use ($data) {
				$mail_admin = env('MAIL_ADMIN');
				
	            $m->from($data['email'], $data['name']);

	            $m->to($mail_admin, 'Mr. Admin')->subject('Question');
	        });
			
            if( count(Mail::failures()) === 0 ) {
                return redirect()->route('contacts')->with('status', 'Email is send');
            }
        
        
        
        }
        $content = view(config('settings.theme') . $this->content_temp)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    
}