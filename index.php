<?php

include( 'namespace.php');
?>
	<div  class="col-lg-6 topDiv">
<?php
	$form = new Forms();
	$form->selectForm();
?>
	</div>
	<div class="col-lg-4 topDiv">
<?php
	$name = $_POST['name'];
		// var_dump($_POST['name']);
		
		$action = new Sql();
	
	if (true){
		
		$action->selectFrom($name);
	
	}
	else{
		
		echo "operation failed";
	}


?>
</div>
?>