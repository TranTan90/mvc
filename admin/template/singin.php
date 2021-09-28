<div class="container login">
		<form action="" method="post" enctype="" class="form-group login-form">
			<div class="login-logo"> <h3>Login</h3></div>
			<div class="form-inline login-input">
				<label class="login-label col-sm-3">User</label>
				<input type="text" name="username1" class="form-control">
			</div>
				<div class="form-inline login-input">
				<label class="login-label col-sm-3">PassWord</label>
				<input type="password" name="userpass1" class="form-control ">
			</div>
			<div class="sub">
				<input type="submit" name="sublogin"  value="Login"  class="btn btn-primary">
			</div>
		</form>
</div>
<?php 
 require_once 'core/init.php';

 if(isset($_POST['username1']) && isset($_POST['userpass1']))
 {
 	// lay du lieu tu trong the input
 	 $user_name = trim(htmlspecialchars(addslashes($_POST['username1'])));
 	 $user_pass = trim(htmlspecialchars(addslashes($_POST['userpass1'])));

 	 // neu gia tri rong
 	  if ($user_name == '' || $user_pass =='') 
 	  {
 	  		echo '<script> alert(" Vui long nhap day du  thong tin")</script>';
 	  }

 	  // nguoc lai co data
 	  else
 	  {
 	  		 $sql_check_user = "SELECT username FROM accounts WHERE username ='$user_name'";
 	  		 // neu ton tai user
 	  		 if($db->fetch_number($sql_check_user))
 	  		 {

 	  		 	$user_pass= md5($user_pass);
 	  		 	$sql_check_pass ="SELECT username,password FROM accounts WHERE username='$user_name' AND password='$user_pass'";

 	  		 	// neu co user pass ckeck pass 
 	  		 	if($db->fetch_number($sql_check_pass))
 	  		 	{
 	  		 		$sql_check_status= "SELECT username,password,status FROM accounts WHERE username= '$user_name'  AND password ='$user_pass' AND status ='0'";
 	  		 		 if($db->fetch_number($sql_check_status))
 	  		 		 	{
 	  		 		 		$session->set_session($user_name);
 	  		 		 		$db->close();
 	  		 		 	}
 	  		 		 	else {
 	  		 		 		echo "Tai khoan bi khoa";
 	  		 		 	}

 	  		 	}
 	  		 	else
 	  		 		{
 	  		 		echo " Tai khoan sai mat khau";
 	  		 		}
 	  		 }

 	  		 else {
 	  		 	echo "Tai khoan khong ton tai";
 	  		 } 	  		
 	 }
 }



?>