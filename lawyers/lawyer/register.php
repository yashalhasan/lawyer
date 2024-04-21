<?php require "hader/navbar.php" ;?>
<?php require "connection/connection.php"; ?>

<?php

if(isset($_SESSION['username'])){

    echo "<script>window.location.href='index.php'</script>";


}else{


	$sqlfetch = "SELECT * FROM `registration`";

	$fetchprepare = $connection->prepare($sqlfetch);
	
	$fetchprepare->execute();
	
	$fetch = $fetchprepare->fetchAll(PDO::FETCH_ASSOC);
	
	
	// print_r($fetch);
	
	
	if(isset($_POST['submit'])){
	
	  $username = $_POST['username'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $user_role_id = 2;

	
	  $isEmailValid = false;
	
	  foreach($fetch as $data){
	
		if($email ===  $data['email']){
	
		  echo "<script>alert('email is alredy exists')</script>";
		  return;
		}else{
	
			$isEmailValid = true;
	
	}
	
	}
			
	
	if($isEmailValid){
	
	
		$hash_password = password_hash($password,PASSWORD_BCRYPT);
	 
		$sqlinsert = "INSERT INTO `registration`(`username`, `email`, `password`,`user_role_id`)
		 VALUES (:username,:email,:password,:user_role_id)";
	  
		$sqlprepare = $connection->prepare($sqlinsert);
		
		$sqlprepare->bindParam(':username',$username,PDO::PARAM_STR);
		$sqlprepare->bindParam(':email',$email,PDO::PARAM_STR);
		$sqlprepare->bindParam(':password',$hash_password,PDO::PARAM_STR);
		$sqlprepare->bindParam(':user_role_id',$user_role_id,PDO::PARAM_INT);

		
		$sqlprepare->execute();
	  
	
	}
	
	echo "<script>window.location.href='login.php'</script>";
	}
	


}


?>



            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Register</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->



            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Registration</h2>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="contact-form">
                                <form action="<?php $_SERVER['PHP_SELF']?>" method = "post">
                                    <div class="form-group">
                                    <label for="Email">User Name</label>
                                        <input type="text" class="form-control" placeholder="Name"   name = "username"/>
                                    </div>
                                    <div class="form-group">
                                    <label for="Email">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" name = "email"/>
                                    </div>
                                    <div class="form-group">
                                    <label for="Email">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name = "password" />
                                    </div>
                                    
                                
                                    <div>
                                        <button class="btn" type="submit" name = "submit">Register</button>
                                    </div>
                                </form>
                          
                    </div>
                </div>
            </div>
            <!-- Contact End -->

             <!-- Footer Start -->
         
            <!-- Footer End -->




            