<?php

class Main extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['page_title'] = "Homepage";
		$data['page_header'] = "Main";
		$data['page_description'] = "Page";
		$data['content_view'] = 'main_t/content_v/home_v';
		$this->template->call_main_template($data);
	}
}