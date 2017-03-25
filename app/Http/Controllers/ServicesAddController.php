<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;

class ServicesAddController extends MainController
{
    public function add(Request $request)
    {
        // if(Gate::denies('save', $this->model)) {
			// abort(403);
		// }
        
        
        if ($request->isMethod('post')) {
            
            $this->validate($request, [
                'asin' => 'required|string|min:7|max:8'
		    ]);
            
            $data = $request->only('asin');

            if(empty($data)) {
                return array('error' => 'Нет данных');
            }

            
            
            
            // $item->fill($data); 
				
            // if($request->user()->articles()->save($this->model)) {
                // return ['status' => 'Материал добавлен'];
            // }
            
            dd($data);
            dd($item->get());
        }
        
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
