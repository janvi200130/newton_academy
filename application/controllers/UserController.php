
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{



	// show user dashboard
	public function index()
	{
		$this->load->view('users/index');
	}
}
