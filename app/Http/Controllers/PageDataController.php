<?php

namespace App\Http\Controllers;

class PageDataController extends Controller
{
	private $url = '';
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getData()
	{
		$p = new \App\Pages\Page();
		var_dump($p->test());
	}
}
