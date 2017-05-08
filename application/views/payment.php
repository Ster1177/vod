<?php $this->load->view('includes/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			
			<div class="form-group">
				<label for="name">First Name</label>
				<input class="form-control" name="fname" placeholder="Your First Name" type="text" value="" />
			</div>			
		
			<div class="form-group">
				<label for="name">Last Name</label>
				<input class="form-control" name="lname" placeholder="Last Name" type="text" value="" />
			</div>
		
			<div class="form-group">
				<label for="email">Credit card number</label>
				<input class="form-control" name="email" placeholder="Card number" type="text" value="" />
			</div>

           
			<div class="form-group">
				<!-- <button name="submit" type="submit" class="btn btn-info">Submit</button> -->
				<a href="<?php echo base_url(); ?>/index.php/payment/update" class="btn btn-primary">Submit and pay</a>
			</div>
		</div>
	</div>
	<div class="row">
	
		<div class="col-md-4 col-md-offset-4 text-center">	
			Main Page <a href="<?php echo base_url(); ?>/index.php/home/view">Go Back</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>