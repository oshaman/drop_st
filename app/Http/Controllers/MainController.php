<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $keywords;
	protected $meta_desc;
	protected $title;
    
    protected $temlate;
    
    protected $vars = array();

    protected $contentRightBar = FALSE;
	protected $contentLeftBar = FALSE;
	
    
    protected $bar = 'no';
    
    public function __construct()
    {
        $this->vars = array_add($this->vars,'keywords',$this->keywords);
		$this->vars = array_add($this->vars,'meta_desc',$this->meta_desc);
		$this->vars = array_add($this->vars,'title',$this->title);
		
        
		$content = view(config('settings.theme') . '.content')->render();
        $this->vars = array_add($this->vars, 'content', $content);
        
        $header = view(config('settings.theme') . '.header')->render();
        $this->vars = array_add($this->vars, 'header', $header);
		
		$footer = view(config('settings.theme').'.footer')->render();
		$this->vars = array_add($this->vars, 'footer', $footer);
        // dd($this->vars);
        
        $this->template = config('settings.theme') . '.home';
    }
    
    public function show()
    {
        return view($this->template)->with($this->vars);
    }
}
