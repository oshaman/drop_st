<?php

namespace Features\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends MainController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->template = 'lin.home';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return $this->renderOutput();
    }
}
