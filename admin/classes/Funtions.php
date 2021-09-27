<?php 

	
	
	class Redirect
	{	
		public function __contructor($url = null)
		{	
			if($url)
				{
					echo '<script> location.href ="'.$url.'";</script>';
				}

		}
	    
	}
	

