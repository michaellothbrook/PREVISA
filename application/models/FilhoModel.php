<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FilhoModel extends CI_Model
{
	public function read()
	{
		$query = $this->db->get('funcionariofilho');
		return $query->result();
	}

	public function getChildrenById($codFuncioario)
	{
		$query = $this->db
		->select('*')
		->from('funcionariofilho')
		->where('CodFuncionario',$codFuncioario)
		->order_by('CodFuncionario','DESC')
		->get();
		return $query->result();
	}

	public function create($data)
	{
		if ($data) {
			$this->db->insert('funcionariofilho',$data);
			return $this->db->insert_id();
		}
	}

	public function delete($id)
	{
		$this->db->where('CodFuncionarioFilho', $id);
		return $this->db->delete('funcionariofilho');
	}

}
