<?php include 'header.php';?>



  <div class="navbar-header">
          <a class="navbar-brand" href="index.html"><h1><img src="images/logo2.png" height="49" width="153" /></h1></a>
  </div>

<div class="jumbotron">
	<div class="container">
		<div class="page-header">
		  <h2>Application build menu <small>Select from available modules</small></h2>
		</div>


			<form action="copy.php"" method="post">

			<div class="checkbox">
				<label><input type="checkbox" name="usermsg" value="true" checked="checked" class="radio" />User Management</label>
			</div>

			<div class="checkbox">
				<label><input type="checkbox" name="encoded" value="true"/>Encoded Video</label>
			</div>

			<div class="checkbox">
				<label><input type="checkbox" name="ads" value="true"/>Adverts</label>
			</div>
			 
			<div class="checkbox">
				<label><input type="checkbox" name="premium" value="true"/>Premium</label>
			</div>

			<div class="checkbox">
				<label><input type="checkbox" name="payment" value="true"/> Payment </label>
			</div>
			 
		
			<input type="submit" name="submit" value="Submit" class="btn btn-primary" >
			</form>
	</div>


</div>

<div>
	
	<div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Warning!</strong> Premium module requires User Management module.
</div>

<div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Warning!</strong> Payment module requires the Premium module.
</div>

<div class="alert alert-info alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Info!</strong> Premium module is redundant if Advertisement and Encripted Video modules are not included.
</div>
</div>

<?php include 'footer.php';?>


