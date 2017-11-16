<?php 	

	class Api extends CI_controller 
{
	public function index (){
	$this->load->view("applimobil/appli");
	}

	function liste() 
		{
			$liste = $this->db->query("select * from produit")->result();
			$this->output			
        	->set_content_type('application/json')
        	->set_output(json_encode($liste));        	
        }

    function find ($mot) {

		$result = $this->db->query("select * from produit where nom like '%$mot%'")->result();
		$this->output	
		->set_content_type('application/json')
        ->set_output(json_encode($result)); 
	}

	function rubrique (){
		$rubrique = $this ->db->query("select * from rubrique where nom_parent is null")->result();
		$this->output			
        	->set_content_type('application/json')
        	->set_output(json_encode($rubrique)); 

	}

	function sousrubrique ($id){
		$rubrique = $this ->db->query("select * from rubrique where nom_parent=?", array($id))->result();
		$this->output			
        	->set_content_type('application/json')
        	->set_output(json_encode($rubrique)); 

	}

	function listeproduit($id) 
		{
			$liste = $this->db->query("select * from produit where rubrique=?", $id)->result();
			$this->output			
        	->set_content_type('application/json')
        	->set_output(json_encode($liste));        	
        }
}

?>