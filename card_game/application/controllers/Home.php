<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("application/libraries/Table.php"); //Inlcude Table class

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	
	public function play(){
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$total_player = trim($this->input->post('total_player'));
			
			//Form validation
			if($total_player < 0){
				//invalid input
				$this->session->set_flashdata('ERROR', "Invalid Input");
				redirect('home', 'refresh');
			}

			$table  = new Table($total_player); //Create new table

			$data['player_card'] = $table->get_player_card();
			
			$this->load->view("play_view", $data);
		}
		
	}
}
