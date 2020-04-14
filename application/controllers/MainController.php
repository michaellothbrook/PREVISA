<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use FuncionarioModel as Funcionarios;

class MainController extends CI_Controller {

	private $data;


	public function index()
	{
		$employees = new Funcionarios();
		$this->data['employees'] = $employees->read();
		$this->load->template('home',$this->data);
	}

	

}
