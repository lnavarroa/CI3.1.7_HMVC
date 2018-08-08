<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicPages extends MX_Controller {

	public function __construct()
 	{
 		parent::__construct();
 	}
 	
	public function index()
	{
		$this->load->view('publicView');
	}

	//llamamos a otro modulo, la secuencia es modulo/controlador/método
	public function call_to_module2()
 	{
 		$data['users'] =  Modules::run('login/index/data_users'); 
 		$this->load->view('home',$data);
 	}
}
