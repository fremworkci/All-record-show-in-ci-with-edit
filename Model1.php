<?php
/**
* 
*/
class Model1 extends CI_Model
{
	
	function insert_model($data)
	{
		$qry=$this->db->insert("signup",$data);
		return $qry;
	}

	function show_model()
	{
		$qry=$this->db->query("SELECT * FROM signup");
		return $qry->result();
	}

	function edit_model($id)
	{
		$qry=$this->db->query("SELECT * FROM signup WHERE id='$id'");
		return $qry->result();
	}

	function update_model($data,$id)
	{
		$this->db->where('id',$id);
		$qry=$this->db->update("signup",$data);
		return $qry;
	}
}

?>