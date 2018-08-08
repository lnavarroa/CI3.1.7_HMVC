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
	public function call_to_publicPages()
 	{
 		Modules::load('publicPages/PublicPages/')->index();
 		//$this->load->module('publicPages');
 		//$this->publicPages->index();
 		//$data['users'] =  Modules::run('login/index/data_users'); 
 		//$this->load->view('home',$data);
 	}

	public function call_to_module1()
 	{
 		Modules::load('module1/Module1/')->index();
 		//$this->load->module('module1');
 		//$this->module1->index();
 		//$data['users'] =  Modules::run('module1/index/'); 
 		//$this->load->view('home',$data);
 	}

 	public function call_to_module2()
 	{
 		Modules::load('module2/Module2/index'); 
 		//$this->load->module('module2');
 		//$this->module2->index();
 		//Modules::load('module2');
 		//Modules::run('module2/index'); 
 		//$this->module2->index();
 	}

 	public function call_to_welcome()
 	{
 		$this->load->module('welcome');
 		$this->welcome->index();
 	}

 	public function call_to_moduleN()
 	{
 		Modules::load('moduleN/ModuleN')->index();
 	}
}
