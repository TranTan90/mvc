<?php 
	require_once 'classes/DB.php';
	require_once 'classes/Session.php';
	require_once 'classes/Funtions.php';


	// ket noi database
	 $db = new DB();
	 $db ->connect();
	 $db-> set_char('utf8');
	 $_DOMAIN ='http://localhost/code/web/';
	 $_DOMAIN='http://localhost/code/mvc/mvc';
	 date_default_timezone_set('Asia/Ho_Chi_Minh');
	 //  khoi taii session 
	 $session = new Session();
	 $session->start_session();
		// kiem tra seesion
	  if($session->get_session() != '')
	  {
	  	$user =$session->get_session();
	  	echo $user;
	  }
	  else
	  {
	  	$user ='';
	  }
	 
