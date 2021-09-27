<?php 

class DB 
{
	  private  $hostname ='localhost',
	  			$username ='root',
	  			$pass ='',
	  			$dbname ='webhana';

	  public  $cnn =null ;

	  	// ham het noi sql 
	  public function connect()
	  	{
	  	$this->cnn = mysqli_connect($this->hostname,$this->username,$this->pass,$this->dbname);


	  		if(!$this->cnn)
	  		{
	  			echo 'ket noi khong thanh cong';
	  		}
	  		else {
	  			
	  		}

	  		 // echo '<script> alert("Connection success");</script>';
		  	}
		// ham ngat ket noi 

	  	public function close()
	  	{
	  		  if($this->cnn)
	  		  {
	  		  	 mysqli_close($this->cnn);
	  		  }
	  	}
	  	// ham truy van 
	  	 public function query($sql)
	  	 {
	  	 	if($this->cnn)
	  	 	{
	  	 		mysqli_query($this->cnn,$sql);


	  	 	}
	  	 }
	  	 // ham đếm số hàng
	  	  public function fetch_number($sql)
	  	  {

	  	  	if($this->cnn)
	  	  	{
	  	  		 $result = mysqli_query($this->cnn,$sql);
	  	  		 if($result)
	  	  		 {
	  	  		 	$row = mysqli_num_rows($result);
	  	  		 	return $row;

	  	  		 }
	  	  	}
	  	  }

	  	  // Hàm lấy dữ liệu 
	  	   public function fetch_assoc($sql)
	  	   {
	  	   		if($this->cnn)
	  	   		{
	  	   			$query1 = mysqli_query($this->cnn,$sql);
	  	   			if ($query1) 
	  	   			{
	  	   				while($result = mysqli_fetch_assoc($query1))
	  	   				{
	  	   					$data[]= $result;
	  	   				}	
	  	   				return $data;
	  	   			}

	  	   		}
	  	   }
	  	// Ham charset 
	  	    public function set_char($uni)
	  	    {
	  	    	if($this->cnn)
	  	    		{
	  	    			mysqli_set_charset($this->cnn,$uni);
	  	    		}
	  	    }
	  
}

