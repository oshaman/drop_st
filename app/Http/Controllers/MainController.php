<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Main Controller
    |--------------------------------------------------------------------------
    |
    | 
    |
    */
    
    /**
     * View components
     *
     * @var string
     */
    protected $keywords;
	protected $meta_desc;
	protected $title;
    /**
     * Templates
     *
     * @var string
     */
    protected $template;
    protected $header_temp = '.header';
    protected $content_temp = '.content';
    protected $footer_temp = '.footer';	
    
    protected $vars = array();
    
    public function __construct()
    {
        //
    }
    
    /*
    *
    * Prepare the display components 
    *
    * @return a view instance
    */
    
    protected function renderOutput() {
		
		// $menu = $this->getMenu();
		
		//dd($menu);
		
		// $navigation = view(config('settings.theme').'.navigation')->with('menu',$menu)->render();
		// $this->vars = array_add($this->vars,'navigation',$navigation);
		
		// if($this->contentRightBar) {
			// $rightBar = view(config('settings.theme').'.rightBar')->with('content_rightBar',$this->contentRightBar)->render();
			// $this->vars = array_add($this->vars,'rightBar',$rightBar);
		// }
		
		$this->vars = array_add($this->vars,'keywords',$this->keywords);
		$this->vars = array_add($this->vars,'meta_desc',$this->meta_desc);
		$this->vars = array_add($this->vars,'title',$this->title);
		
        
		$content = view(config('settings.theme') . $this->content_temp)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        
        $header = view(config('settings.theme') . $this->header_temp)->render();
        $this->vars = array_add($this->vars, 'header', $header);
		
		$footer = view(config('settings.theme'). $this->footer_temp)->render();
		$this->vars = array_add($this->vars, 'footer', $footer);
        
        return view($this->template)->with($this->vars);
		
	}
}
