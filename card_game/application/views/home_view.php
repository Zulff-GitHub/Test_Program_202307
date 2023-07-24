<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view("header"); ?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url();?>Home">Playing Cards Program</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo base_url();?>Home">New Table</a></li>
			<li class="disabled"><a href="#">View Table</a></li>
			<li class="disabled" ><a href="#" title="Coming Soon">Active Tables</a></li>
		</ul>
	</div>
</nav>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">Panel Heading</div>
			<div class="panel-body">
				<?php 
						$ERROR = $this->session->flashdata('ERROR');
						if(isset($ERROR)) {  ?>
							<div class="alert alert-danger"><?php echo $ERROR; ?></div>
				<?php }?>
				<form class="form-horizontal" action="Home/play" method="post">
				<div id="form-input" class="form-group">
					<label class="control-label col-sm-2" for="total_player">Number Of Players:</label>
					<div class="col-sm-10">
						<input type="number" name="total_player" class="form-control" id="total_player" placeholder="Enter number of players">
						<span id='err-msg' class="help-block"></span>
					</div>
					
				</div>
				<div id="projectIDSelectError"></div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button disabled id="submit-btn" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>


<script type="text/javascript">

$(document).ready(function() {
	$('#total_player').on('input', function() {
		
		var iNumber = $("#total_player").val();		
		if(iNumber <= 0){
			$("#err-msg").html("Invalid Input");
			$('#form-input').addClass('has-error');
			$("#err-msg").show();
			$('#submit-btn').prop('disabled', true);
		}else{
			if ($('#form-input').hasClass('has-error')){
				$('#form-input').removeClass('has-error');
			}
			$("#err-msg").hide();
			$('#submit-btn').prop('disabled', false);
		}

	});
});

</script>