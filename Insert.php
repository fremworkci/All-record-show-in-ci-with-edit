<?php
/**
* 
*/
class Insert extends CI_Controller
{
	
	function index()
	{
		$qry["data"]=$this->Model1->show_model();
		$this->load->view("insert", $qry);
	}

	function add()
	{
		$name=$this->input->post("name");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$data=array("name"=>$name,"email"=>$email,"password"=>$password);
		$this->Model1->insert_model($data);
		redirect("Insert");
	}

	function edit()
	{
		$id=$this->uri->segment("3");
		$qry["data"]=$this->Model1->edit_model($id);
		$this->load->view("edit",$qry);
	}

	function update()
	{
		$name=$this->input->post("name");
		$password=$this->input->post("password");
		$id=$this->input->post("getid");
		$data=array("name"=>$name,"password"=>$password);
		$qry=$this->Model1->update_model($data,$id);
		redirect("Insert");
	}
}

?>