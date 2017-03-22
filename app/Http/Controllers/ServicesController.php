<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use Features\Item;

class ServicesController extends MainController
{
    public function show()
    {
        
        dd(Item::find(1)->user->id);
        
        if (Gate::denies('VIEW_ADMIN')) {
            // The current user does not have access...
            abort(403);
        }
        $this->title = 'Services';
        $this->keywords = 'Services';
        $this->meta_desc = "Services";
        $this->content_temp = '.services.content';

        $this->template = config('settings.theme') . '.services.services';     
        // $this->template = config('settings.theme') . '.services.test';     

        
        return $this->renderOutput();
    }
}
