<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioModel extends CI_Model
{
	public function read()
	{
		$query = $this->db
		->query("SELECT *,(SELECT COUNT(*) FROM funcionariofilho AS ff WHERE ff.CodFuncionario = f.CodFuncionario) AS qtd FROM `funcionario` AS f");
		return $query->result();
		
	}

	public function getEmployeeById($codFuncioario)
	{
		$query = $this->db
		->select('*')
		->from('funcionario')
		->where('CodFuncionario',$codFuncioario)
		->order_by('CodFuncionario','DESC')
		->get();
		return $query->result();
	}

	public function numChildren($codFuncioario = null)
	{
		$query = $this->db
		->select('*')
		->from('funcionariofilho')
		->where('CodFuncionario',$codFuncioario)
		->get();
		return $query->num_rows();
		
	}

	public function create($data)
	{
		$dataFilter = array(
			'Nome' => $data['nome'],
			'DataNascimento' => $data['dataNascimento'],
			'salario' => $data['salario'],
			'atividades' => $data['atividades']
		);
		if ($data) {
			$this->db->insert('funcionario',$dataFilter);
			return $this->db->insert_id();
		}
	}

	public function update($codFuncioario,$data)
	{
		$dataFilter = array(
			'Nome' => $data['nome'],
			'DataNascimento' => $data['dataNascimento'],
			'salario' => $data['salario'],
			'atividades' => $data['atividades']
		);
		if ($codFuncioario) {
			$this->db->where('CodFuncionario', $codFuncioario);
			$this->db->update('funcionario',$dataFilter);
			// return $this->db->insert_id();
		}
	}

	public function delete($id)
	{
		$this->db->where('CodFuncionario', $id);
		return $this->db->delete('funcionario');

	}

}
