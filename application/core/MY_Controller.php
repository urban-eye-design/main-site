<?php
class MY_Controller extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->module('Template');
	}

	function home_run()
	{
		$this->template->call_admin_template();
	}
}