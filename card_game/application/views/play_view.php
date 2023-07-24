<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php $this->load->view("header"); ?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url();?>Home">Playing Cards Program</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url();?>Home">New Table</a></li>
			<li class="active"><a href="#">View Table</a></li>
			<li class="disabled" ><a href="#" title="Coming Soon">Active Tables</a></li>
		</ul>
	</div>
</nav>
<body>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">Text-Only Output</div>
		<div class="panel-body">
			<?php 
				foreach($player_card as $player){
					echo implode(',',$player)."<br>";
				}
			?>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Visual Output</div>
		<div class="panel-body">			
			<table class="table scroll_limit_5">
				<thead>
					<tr>
						<th style="width:20%">Player</th>
						<th>Cards</th>
					</tr>
				</thead>
				<tbody id="Alert">
					<?php
						if(!empty($player_card)){
							$img_path_card 	 = "../../images/deck/";
							$img_path_avatar = "../../images/avatar/";
							foreach ($player_card as $key => $cards){
								$player_number = $key+1;
								echo "<tr>";
								echo "<td>"."Player ".$player_number."<br>";
								echo "<img src ='".$img_path_avatar.rand(1,10).".png' style='width:100%'></td>";
								echo "<td>";
								foreach($cards as $card){
									$img_name = str_replace('-','',$card);
									$aTemp = str_split($img_name);
									$img_name = $aTemp[1].$aTemp[0];
									echo "<img src='".$img_path_card.$img_name.".png' style='width:10%'>";
								}
								echo "</td><tr>";
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
