<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		// if (!isset($_SESSION['login_status'])) {
			
		// 	redirect('Login');
			
		// }
	}
	

	public function index()
	{
		$data['content_view'] = 'all/Landing_page.php';
        $this->load->view('theme/template.php',$data);
		
	}
	public function create_account()
	{
		$this->load->view('all/Create_account.php');
	}

}
