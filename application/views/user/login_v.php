

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
<div class="panel panel-primary">
<div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> User login</div>
<div class="panel-body">
<form method="POST" action="">
	<div class="form-group">
		<div class="input-group">
					<input type="text" class="form-control" name="uname" id="uname" placeholder="username/email" required>

		<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
    </div></div>
    <div class="form-group">
    	<div class="input-group"> 
<input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>

<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span></div>
    </div>
<button type="submit" class="btn btn-primary" name="login_btn" id="login_btn"><span class="glyphicon glyphicon-log-in"></span> Login</button><br/><br/><a href="<?php echo base_url().'index.php/User_Managment/signup' ?>"> Don't have an account? </a><br/>
</form>
</div>
</div>
</div>
<div class="col-md-4"></div>
</div>
