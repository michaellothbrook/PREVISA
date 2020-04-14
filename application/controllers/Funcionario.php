<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use FuncionarioModel as Funcionarios;
use FilhoModel as Filhos;


class Funcionario extends CI_Controller
{

	private $data;

	public function index()
	{
		$this->load->template('crud/create',$this->data);
	}

	public function submit()
	{
		$data = $this->input->post();
		$funcionario = new Funcionarios();
		$insert = $funcionario->create($data);
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

	public function editEmployeeById($codFuncionario)
	{
		$data = $this->input->post();
		$funcionario = new Funcionarios();
		$update = $funcionario->update($codFuncionario,$data);
		$response = array(
			'Success' => array( 
				'lastId' => $update,
				'message' => 'Registro salvo com sucesso!',
			),
			'Error' => 'Houve falha no registro!'
		);
		if($update) {
			echo json_encode($response['Success']);
		} else {
			echo json_encode($response['Error']);
		}
	}

	public function edit($codFuncionario)
	{
		$funcionarioById = new Funcionarios();
		$this->data['employeeById'] = $funcionarioById->getEmployeeById($codFuncionario);
		$childrenById = new Filhos();
		$this->data['childrenById'] = $childrenById->getChildrenById($codFuncionario);
		$this->load->template('crud/editEmployee',$this->data);
	}

	public function delete($id)
	{
		$data = new Funcionarios();
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
