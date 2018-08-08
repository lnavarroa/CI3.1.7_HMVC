<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module3 extends MX_Controller {

	public function __construct()
 	{
 		parent::__construct();
 	}
 	
	public function index()
	{
		$this->load->view('welcome_message_module3');
	}

	//llamamos a otro modulo, la secuencia es modulo/controlador/método
	public function call_to_module2()
 	{
 		$data['users'] =  Modules::run('login/index/data_users'); 
 		$this->load->view('home',$data);
 	}
}
