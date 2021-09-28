	<?php 
require_once 'core/init.php';
?>

<div class="logout" style="float: right;margin: 30px;">
	<form action="" method="post">
		<input type="submit" value="logout" class="btn btn-primary" name="logoutname">
	</form>
</div>

<?php 
if(isset($_POST['logoutname']))
{
	$session->destroy();

}
echo $_SESSION['user'];


 ?>





