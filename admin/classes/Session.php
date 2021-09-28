<?php 
	 
	/**
	 * summary
	 */
	class Session
	{

		public function start_session()
		{
			session_start();
		}

		public function destroy()
		 {
		  	session_destroy();

		 }
		 //luu session 
		  public function set_session($user)
		  {
		  	$_SESSION['user']= $user;
		  }


		  public function get_session()
		  {
		  		if(isset($_SESSION['user']))
		  		{
		  			$user = $_SESSION['user'];

		  		}
		  		else
		  		{
		  			$user='';
		  		}
		  		 return $user;


		  }
		


}
