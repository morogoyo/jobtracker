
<?php

				
  class Login{



		function credentials($username,$password){
			$this->username = $username;
			$this->password = $password;
			// var_dump($username,$password);
			global $tele;
			// var_dump($tele);
			$this->username = $username;
			$this->password = $password;

			$sql = "SELECT * FROM users WHERE email = '$this->username'";
			    // var_dump($sql);
				$login = $tele->query($sql);
				
				if ($login->num_rows > 0) {
					while ( $row = $login->fetch_assoc()) {
								if ($row['password'] == $this->password){
									$_SESSION['username'] = $row['username'];
									header('Location: http://localhost/lmsaccess/jobTracker');
									echo "password is working";
								}else{
									echo "error";
								}

											}
						}


				}








































  }


  ?>