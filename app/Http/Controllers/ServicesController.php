<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends MainController
{
    public function show()
    {
        $this->title = 'Services';
        $this->keywords = 'Services';
        $this->meta_desc = "Services";
        $this->content_temp = '.services.content';

        $this->template = config('settings.theme') . '.services.services';     

        
        return $this->renderOutput();
    }
}
