<?php
class Control_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_players()
	{
		$this->db->select('*');
		$this->db->from('players');
		$this->db->order_by('name');
			
		return $this->db->get()->result_array();
	}
	
	public function submit_duel($player_1_id, $player_2_id, $score) {
		if ($player_1_id == $player_2_id)
			throw new Exception("players are the same");
		
		$this->log_duel($player_1_id, $player_2_id, $score);
	}
	
	private function log_duel($player_1_id, $player_2_id, $score) {
		$data = array(
			'player_1_id' => $player_1_id,
			'player_2_id' => $player_2_id,
			'score' => $score
		);
		
		$this->db->insert('log_duels', $data);
	}
}