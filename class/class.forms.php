<?php 


class Forms{


   			function selectForm(){
   				?>
					<form action="" method = "post">
					 <div class="form-group ">
					    <label for="customerName">Customer Name</label>
					    <input type="text" name= "name" class="form-control" id="customerName" placeholder="Customer Name">
					  
					  
					  <button type="submit" class="btn btn-default">Submit</button>
					  </div>
					</form>

   				<?php

   			}


   			function loginForm(){
   				?>
   				<form action="" method="post">

				<div class=" form-group col-md-4 col-lg-4 col-sm-4" ></div>
				<div class=" form-group col-md-4 col-lg-4 col-sm-4">
				<div >
					<label for="email">Email:</label>
					<input type="email" class="form-control" name="email" id="email" value="" tabindex="1" />
				</div>
				<div>
					<label for="password">Password:</label>
					<input type="password" class="form-control" name="password" id="password" value="" tabindex="1" />
				</div>
				<div>
					<input type="submit" value="Submit" />
				</div>
				</div><!--   end of form controll-group div -->
				</form>

			<?php

   			}


   			function registerForm(){

   				?>

   				<form action="" method="post">

				<div class=" form-group col-md-4 col-lg-4 col-sm-4" ></div>
				<div class=" form-group col-md-4 col-lg-4 col-sm-4">
				<div >
					<label for="email">Name:</label>
					<input type="email" class="form-control" name="email" id="email" value="" tabindex="1" />
				</div>
				<div >
					<label for="email">Email:</label>
					<input type="email" class="form-control" name="email" id="email" value="" tabindex="1" />
				</div>
				<div>
					<label for="password">Password:</label>
					<input type="password" class="form-control" name="password" id="password" value="" tabindex="1" />
				</div>
				<div>
					<input type="submit" value="Submit" />
				</div>
				</div><!--   end of form controll-group div -->
				</form>


				<?php





   			}



 }



?>