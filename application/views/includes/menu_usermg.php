<?php $username = $this->session->userdata('uname'); ?>

	<div>
  					  <?php if (isset($username)){ ?>
  					  		<h5 class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></h5>
  					  <?php } else { ?>
							<a href="<?php echo base_url(); ?>/index.php/signup/index" class="">Sign Up</a>
					  <?php } ?>

					  <?php if (isset($username)){ ?>
						<a href="<?php echo base_url(); ?>/index.php/profile/logout" class="">Logout</a>
  					  <?php } else { ?>
  					  <a href="<?php echo base_url(); ?>/index.php/login/index" class="">login</a>
					  <?php } ?>
	</div>