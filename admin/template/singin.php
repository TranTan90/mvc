<div class="container login">
		<form action="" method="post" enctype="" class="form-group login-form">
			<div class="login-logo"> <h3>Login</h3></div>
			<div class="form-inline login-input">
				<label class="login-label col-sm-3">User</label>
				<input type="text" name="username" class="form-control">
			</div>
				<div class="form-inline login-input">
				<label class="login-label col-sm-3">PassWord</label>
				<input type="password" name="userpass" class="form-control ">
			</div>
			<div class="sub">
				<input type="submit" name="sublogin"  value="Login"  class="btn btn-primary">
			</div>
		</form>
</div>
<?php 
 require_once 'core/init.php';

 if(isset($_POST['username']) && isset($_POST['userpass']))
 {
 	// lay du lieu tu trong the input
 	 $user_name = trim(htmlspecialchars(addslashes($_POST['username'])));
 	 $user_pass = trim(htmlspecialchars(addslashes($_POST['userpass'])));

 	  if ($user_name == '' || $user_pass =='') {
 	  		
 	  		echo '<script> alert(" Vui long nhap day du  thong tin")</script>';

 	  }
 	  else
 	  {
 	  		$sql_check_user = "SELECT username *FROM accounts Where username ='$user_name'";
 	  		// neu ton tai user
 	  		 if($db->fetch_number($sql_check_user))
 	  		 {	
 	  		 	// 

 	  		 	$user_pass = md5($user_pass);

 	  		 	$user_check_pass = "SELECT username,password FROM accounts Where username = '$user_name'  AND password ='$user_pass' AND status ='0' " ;

 	  		 	//Neu status khoong bi khoas status =0

 	  		 	if($db->fetch_number($sql_check_pass))
 	  		 	{
 	  		 		$session->set_session();
 	  		 		$db->close();
 	  		 	}



 	  		 }



 	  }





 }


?>