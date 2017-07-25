
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">


					<!-- IF PREMIUM -->
					<?php $filename = 'singleencoded_premium.php'; ?>
					<?php if ( file_exists('application/views/' . $filename) ){ ?>
    				<?php	$this->load->view($filename);  ?>
    				<!-- NOT PREMIUM -->
					<?php  } else{ ?>
					        <?php $filename = 'singleencoded_nopremium.php'; ?>
							<?php if ( file_exists('application/views/' . $filename) ){ ?>
    						<?php	$this->load->view($filename);  ?>
							<?php  } ?>
					<?php	} ?>




					</div>
					<div class="song-grid-right">
						<!--<div class="share">
							<h5>Share this</h5>
							<ul>
								<li><a href="#" class="icon fb-icon">Facebook</a></li>
								<li><a href="#" class="icon comment-icon">Comments</a></li>
								<li class="view">200 Views</li>
							</ul>
						</div> -->
					</div>
					<div class="clearfix"> </div>
					<div class="published">
						<script src="jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
										<h4>Published on 15 June 2015</h4>
										<p>Nullam fringilla sagittis tortor ut rhoncus. Nam vel ultricies erat, vel sodales leo. Maecenas pellentesque, est suscipit laoreet tincidunt, ipsum tortor vestibulum leo, ac dignissim diam velit id tellus. Morbi luctus velit quis semper egestas. Nam condimentum sem eget ex iaculis bibendum. Nam tortor felis, commodo faucibus sollicitudin ac, luctus a turpis. Donec congue pretium nisl, sed fringilla tellus tempus in.</p>
									</li>
									<li>
										<p>Nullam fringilla sagittis tortor ut rhoncus. Nam vel ultricies erat, vel sodales leo. Maecenas pellentesque, est suscipit laoreet tincidunt, ipsum tortor vestibulum leo, ac dignissim diam velit id tellus. Morbi luctus velit quis semper egestas. Nam condimentum sem eget ex iaculis bibendum. Nam tortor felis, commodo faucibus sollicitudin ac, luctus a turpis. Donec congue pretium nisl, sed fringilla tellus tempus in.</p>
										<p>Nullam fringilla sagittis tortor ut rhoncus. Nam vel ultricies erat, vel sodales leo. Maecenas pellentesque, est suscipit laoreet tincidunt, ipsum tortor vestibulum leo, ac dignissim diam velit id tellus. Morbi luctus velit quis semper egestas. Nam condimentum sem eget ex iaculis bibendum. Nam tortor felis, commodo faucibus sollicitudin ac, luctus a turpis. Donec congue pretium nisl, sed fringilla tellus tempus in.</p>
										<div class="load-grids">
											<div class="load-grid">
												<p>Category</p>
											</div>
											<div class="load-grid">
												<a href="movies.html">Entertainment</a>
											</div>
											<div class="clearfix"> </div>
										</div>
									</li>
								</ul>
							</div>
					</div>
					<!-- <div class="all-comments">
						<div class="all-comments-info">
							<a href="#">All Comments (8,657)</a>
							<div class="box">
								<form>
									<input type="text" placeholder="Name" required=" ">			           					   
									<input type="text" placeholder="Email" required=" ">
									<input type="text" placeholder="Phone" required=" ">
									<textarea placeholder="Message" required=" "></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
							<div class="all-comments-buttons">
								<ul>
									<li><a href="#" class="top">Top Comments</a></li>
									<li><a href="#" class="top newest">Newest First</a></li>
									<li><a href="#" class="top my-comment">My Comments</a></li>
								</ul>
							</div>
						</div>
						<div class="media-grids">
							<div class="media">
								<h5>Tom Brown</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Steven Smith</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Marry Johne</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Peter Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
						</div>
					</div> -->
				</div>
				

   