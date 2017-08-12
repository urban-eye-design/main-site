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
		$data['content_view'] = 'Main/main_display_v';
		$this->template->call_main_template($data);
	}
}