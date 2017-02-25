<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function show()
    { 
        return $this->renderOutput();
    }
}
