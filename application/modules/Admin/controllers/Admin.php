<?php

class Admin extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->module([
			'Pages'
		]);
	}

	function index()
	{
		$data['page_header'] = "Main";
		$data['page_description'] = "Page";
		$data['content_view'] = 'Admin/admin_display_v';
		$this->template->call_admin_template($data);
	}

	function pages()
	{
		$this->pages->display_pages();
	}
}
