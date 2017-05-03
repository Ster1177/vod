<?php $premium = $this->session->userdata('premium'); ?>

<?php if ( $premium == 0) { ?>	
		<div class="col-md-4 single-right">
					<h3>Sponsors</h3>
					<div class="single-grid-right">
						
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="http://www.csantosvp.pt/"><img src="<?php echo base_url(); ?>images/csantos.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="http://www.csantosvp.pt/" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author"></a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="<?php echo base_url(); ?>images/r6.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author"></a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>

<?php } else { ?>
 

 <?php } ?>



				<div class="clearfix"> </div>
			</div>
			<!-- footer -->
			<div class="footer"></div>
			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>