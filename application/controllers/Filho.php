<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use FuncionarioModel as Funcionarios;
use FilhoModel as Filhos;

class Filho extends CI_Controller
{

	private $data;

	public function index()
	{
		$children = new Filhos();
		$this->data['children'] = $children->read();
		$this->load->template('crud/create',$this->data);
	}


	public function submit($codFuncioario)
	{
		$data = $this->input->post();
		$funcionario = new Funcionarios;
		$dataIdEmployee = array(
			'CodFuncionario' => $codFuncioario,
			'Nome' => $data['nome'],
			'DataDeNascimento' => $data['dataNascimento']
		);
		$filho = new Filhos();
		$insert = $filho->create($dataIdEmployee);
		$response = array(
			'Success' => array( 
				'lastId' => $insert,
				'message' => 'Registro salvo com sucesso!',
			),
			'Error' => 'Houve falha no registro!'
		);
		if($insert) {
			echo json_encode($response['Success']);
		} else {
			echo json_encode($response['Error']);
		}
	}

	public function delete($id)
	{
		$data = new Filhos();
		$delete = $data->delete($id);
		$response = array(
			'Success' => 'Registro deletado com sucesso!',
			'Error' => 'Houve falha na deleção!'
		);
		if($delete) {
			echo json_encode($response['Success']);
		} else {
			echo json_encode($response['Error']);
		}
	}
}
