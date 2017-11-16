<?php 	

class Admin extends CI_controller {


	public function index() {
		$this ->load->view('filrouge/entete');

		$requete = $this ->db->query('SELECT * from client');
		$model["admin"] = $requete ->result();
		$this->load->view('filrouge/admin',$model);
		$this ->load->view('filrouge/footer');
			
	}

	public function ajout() {
		$this ->load->view('filrouge/entete');
		$this ->load->view('filrouge/ajout');
		$this ->load->view('filrouge/footer');
	}

	public function script_ajout()
	{
		$data = $this->input ->post();

		$sql = "insert into client (nom, prenom, adresse, ca, code_postal, ville, pays, tel, mail, mot_de_passe) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->db->query($sql, $data);

	
		redirect('http://127.0.0.1/php/Fil_rouge_web/index.php/admin/index','location');
	}

	public function detail($id) 
	{
		$this ->load->view("filrouge/entete");	
		$requete = $this->db->query("select * from client where id=?", array($id));
		$client= $requete->row();
		$this->load->view("filrouge/detail", compact("client"));

	}

	public function modif($id)
	{
		$this ->load->view("filrouge/entete");	
		$liste = $this->db->query("select * from client where id=?", array($id));
		$model["client"]= $liste ->row();
		$this ->load->view("filrouge/modif", $model);
		$this ->load->view('filrouge/footer');
	}

	public function script_modif()
	{
		$data = $this->input->post();
		$id = $this->input->post("id");

		$str = $this->db->update_string('Client' , $data, "id=".$id);
		$this->db->query($str);

		$this->load->helper('url');
		redirect('http://127.0.0.1/php/Fil_rouge_web/index.php/admin/index','location');
	}

	public function script_supprim($id)
	{
			$this->db->query("delete from client where id=?", array($id));
			redirect('http://127.0.0.1/php/Fil_rouge_web/index.php/admin/index','location');
	}
}


