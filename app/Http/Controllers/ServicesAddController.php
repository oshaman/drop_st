<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;

class ServicesAddController extends MainController
{
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            dd('POST');
        }
        
        // dd('get');
        $this->title = 'Add Item';
        $this->keywords = 'Add Item';
        $this->meta_desc = 'Add Item';
        
        $this->template = config('settings.theme') . '.services.services';
        $this->content_temp = '.services.add_content';
        
        $content = view(config('settings.theme') . $this->content_temp)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        
        return $this->renderOutput();
        
    }
}
