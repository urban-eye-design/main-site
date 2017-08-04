<?php

class Pages extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	function display_pages()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('page');

		$crud->set_subject('Pages');

		$output = $crud->render();


		$data['page_header'] = "Pages";
		$data['page_description'] = "List";
		$data['content_view'] = 'Pages/pages_display_v';
		$data['crud'] = $output;
		$this->template->call_admin_template($data);
	}
}
