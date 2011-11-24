<?php

class Welcome extends MX_Controller {

	function Welcome()
	{
		parent::__construct();	
	}
	
	function index()
	{
 		//$this->load->view('welcome_message');
 		$data['main_content'] = 'welcome_message';
		$this->load->view('includes/master_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
