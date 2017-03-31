<?php

include( 'namespace.php');
require(__DIR__. '/vendor/autoload.php');

	// $form = new Forms();
	// $form->selectForm();
?> 

<!DOCTYPE html>
<html >
<head>
	<title>LMS Admin</title>
	
</head>
<body ng-app="jobTracker">
<!--Navigation Bar top  -->

<?php include('includes/navbar.php');?>

<!-- end Navigation Bar top  -->


<div>
	
	<input type="text"  ng-model="tableFilter" style="float: right;">
	<label style="float: right;"> Customer Search</label>
</div>
<div class="col-lg-2">
	<p>menu area</p>
</div>
<div   ng-controller="companiesTable" class="col-lg-10" >
		
  		<div>
		<table class="table table-hover table-responsive table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<!-- <th>Cutomer Id</th> -->
					<th>name</th>
					<th>street</th>
					<th>city</th>
					<th>zip</th>
					<th>phone</th>
					<th>fax</th>
					<th>email</th>

					
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="c in info | filter : tableFilter   | orderBy:'id':false">
					<td>{{c.custid}}</td>
					<!-- <td>{{x.customerid}}</td> -->
					<td>{{c.name}}</td> 
					<td>{{c.street}}</td>
					<td>{{c.city}}</td>
					<td>{{c.zip}}</td> 
					<td>{{c.phone}}</td>
					<td>{{c.fax}}</td>
					<td>{{c.email}}</td> 
					
				</tr>
				
			</tbody>
		</table>
				
				
					
		</div>
				
				
	</div>
	<div class="col-lg-12 topDiv">

<div   ng-controller="projectTable" class="col-lg-10" >
		
  		<div>
		<table class="table table-hover table-responsive table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<!-- <th>Cutomer Id</th> -->
					<th>name</th>
					<th>street</th>
					<th>city</th>
					

					
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="p in info | filter : tableFilter   | orderBy:'id':false">
					<td>{{p.jobnum }}</td>
					<!-- <td>{{x.customerid}}</td> -->
					<td>{{p.opened }}</td> 
					<td>{{p.jobname}}</td>
					<td>{{p.closed}}</td>
					
					<!--            -->
      
     
      
 <!-- coord      
      
 data_qty_e 
 data_qty_a 
 dep_req_e  
 dep_req_a  
 list_ord_e 
 list_ord_a 
 wo_dp_e    
 wo_dp_a    
 wo_ls_e    
 wo_ls_a    
 data_lms_e 
 data_lms_a 
 dp_out_e   
 dp_out_a   
 prt_vend_e 
 prt_vend_a 
 prt_ls_e   
 prt_ls_a   
 env_vend_e 
 env_vend_a 
 env_ls_e   
 env_ls_a   
 clmat_ls_e 
 clmat_ls_a 
 pc_dim_e   
 pc_dim_a   
 post_req_e 
 post_req_a 
 post_ls_e  
 post_ls_a  
 dropdate_e 
 dropdate_a 
 po_sub_e   
 po_sub_a   
 bill_sub_e 
 bill_sub_a 
 user_1_d   
 user_1_e   
 user_1_a   
 user_2_d   
 user_2_e   
 user_2_a   
 nobill -->
					<!--             -->
				</tr>
				
			</tbody>
		</table>
				
				
					
		</div>
				
				
	</div>




<?php
	if (isset($_POST)){
		$name = $_POST['name'];
									
		
		$action = new Sql();
	
	
		
		// $action->selectFrom($name);
		$action->convert_lms_companies();
		$action->convert_lms_projects();
	
	}
	else{
		
		echo "operation failed";
	}

echo "</br>";

?>
	</div>
</div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</html>

