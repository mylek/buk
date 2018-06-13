<?php

namespace App\Pages;

abstract class Page {
	
	protected $url;
	protected $name;
	protected $content;
	
	public function __construct() {
		$this->content = $this->getPageContent();
	}
	
	public function getPageContent() {
		$arrContextOptions=array(
			"ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			),
		);  
		$html_string = file_get_contents($this->url, false, stream_context_create($arrContextOptions));
		$dom = new \DOMDocument(); 
		$dom->load($html_string);
		return $dom;
	}
	
	public function __get($name) {
		return $this->{$name};
	}
}