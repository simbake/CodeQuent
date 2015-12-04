
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
<div class="panel panel-primary">
<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> User Signup</div>
<div class="panel-body">
<form method="POST" action="">
	<div class="form-group">

					<input type="text" class="form-control" name="names" id="names" placeholder="Names" required>
</div>
    	<div class="form-group">
		
					<input type="text" class="form-control" name="uname" id="uname" placeholder="Username" required>

        </div>
            	<div class="form-group">
		
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>

        </div>
                    	<div class="form-group">
                    		<div class="row">
                    			<div class="col-md-3">
		              <input type="text" class="form-control" value="+254" required>
		          </div>
                    <div class="col-md-9">
					<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" required>
                    </div>
                  </div>
                  </div>
    <div class="form-group">
    	<div class="input-group"> 
<input type="password" class="form-control" name="pass" id="pass" onkeyup="check_passwords()" placeholder="Password" required>

<span class="input-group-addon"><span class="glyphicon glyphicon-warning-sign" style="color:red;"></span></span></div>
    </div>
        <div class="form-group">
    	<div class="input-group"> 
<input type="password" class="form-control" onkeyup="check_passwords()" name="pass_retype" id="pass_retype" placeholder="Confirm Password" required>

<span class="input-group-addon"><span class="glyphicon glyphicon-warning-sign" style="color:red;"></span></span></div>
    </div>
<button type="submit" class="btn btn-primary" name="signup_btn" id="signup_btn"><span class="glyphicon glyphicon-check"></span> Signup</button><br/><br/><a href="<?php echo base_url().'index.php/User_Managment/' ?>"> Have an account?</a><br/>
</form>
</div>
</div>
</div>
<div class="col-md-4"></div>
</div>
<script>

function check_passwords(){
	var password = $('#pass').val();
	var pass_retype = $('#pass_retype').val();
	//alert(password);
	if(password && pass_retype){
	var checker_pass = compare_two(password,pass_retype);
	if(checker_pass){
		alert("pass confimed");
	}
      }
}
</script>
