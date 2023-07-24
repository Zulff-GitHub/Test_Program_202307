<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Maybe call class Table
class Deck {
	
	private $total_player;
	private $aDeck = [];
	private $player_card = []; //change to player_hand?
	
	// Constructor function
	public function __construct($param)
	{
		$this->total_player = $param;
		$this->initiate_deck();
		$this->distribute_card();
	}
	
	private function initiate_deck(){
		$card_suit = ['S','H','D','C']; //Can put in config and full name. Use multi-array
		
		//For faster performance, can define in config
		foreach($card_suit as $suit){
		
			for($i=1;$i<=13;$i++){
				switch ($i) {
					case 1:
						$card_number = 'A';
					break;
					case 10:
						$card_number = 'X';
					break;
					case 11:
						$card_number = 'J';
					break;
					case 12:
						$card_number = 'Q';
					break;
					case 13:
						$card_number = 'K';
					break;
					default:
						$card_number = $i;
				}
				
				$this->aDeck[] = $suit."-".$card_number;
				shuffle($this->aDeck);
			
			}
		}
	}
	
	private function distribute_card(){
		
		$i = 0;
		foreach($this->aDeck as $card){
			$this->player_card[$i][] = $card;
			$i++;
			if($i == $this->total_player) $i = 0;
		}
		
	}
	
	public function get_total_players()
	{
		return $this->total_player;
	}
	
	public function get_deck()
	{
		return $this->aDeck;
	}
	
	public function get_player_card()
	{
		return $this->player_card;
	}
	
	public function display_player_card($type = 'line')
	{
		if($type == 'line'){
			foreach($this->player_card as $player){
				echo implode(',',$player)."<br>";
			}
		}
	}
}