<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use Auth;
// use Features\Item;
// use Features\User;

class ServicesController extends MainController
{
    public function show()
    {
        
        // dd(Item::find(1)->user->id);
        // dd(Auth::user()->items()->get());
        
        if (Gate::denies('VIEW_DATA')) {
            // The current user does not have access...
            abort(403);
        }
        $this->title = 'Services';
        $this->keywords = 'Services';
        $this->meta_desc = "Services";
        $this->content_temp = '.services.content';

        $this->template = config('settings.theme') . '.services.services';     
        // $this->template = config('settings.theme') . '.services.test';     
        $items = Auth::user()->items()->get();
        $content = view(config('settings.theme') . $this->content_temp)->with('items',$items)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        
        return $this->renderOutput();
    }
}
