<?php require "hader/navbar.php" ?>
<?php require "connection/connection.php" ?>

<?php

if(isset($_SESSION['username'])){

	echo "<script>window.location.href='index.php'</script>";


}else{


$sqlfetch = "SELECT * FROM `registration`";

$fetchprepare = $connection->prepare($sqlfetch);

$fetchprepare->execute();

$fetch = $fetchprepare->fetchAll(PDO::FETCH_ASSOC);

//  print_r($fetch);

if(isset($_POST['login'])){

@$email = $_POST['email'];
@$password = $_POST['password'];

$isloginNOTSuccessfull = false;

foreach($fetch as $data){

if($email ===  $data['email'] &&  password_verify($password,$data['password'])){

    $_SESSION['userid'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['useremail'] = $data['email'];

	echo "<script>window.location.href='index.php'</script>";


}else{

    $isloginNOTSuccessfull = true;
    
    
}

}

  if($isloginNOTSuccessfull){

echo "<script>alert('login UnSuccessfull')</script>";

  }

}


}

?>



            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Login</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- login Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Login</h2>
                    </div>
                    <div class="row">

                    <div class="col-md-12">
                            <div class="contact-form">
                                <form action="<?php $_SERVER['PHP_SELF']?>" method = "post">
                                    
                                    <div class="form-group">
                                    <label for="Email">Email</label>
                                        <input type="email" class="form-control" name = "email" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                    <label for="Email">Password</label>
                                        <input type="password" class="form-control" name = "password" placeholder="Password" />
                                    </div>
                                    
                                
                                    <div>
                                        <button class="btn" type="submit" name = "login" >Login</button>
                                    </div>
                                </form>
                          
                    </div>
                </div>
            </div>



            <!-- login end -->


             <!-- Footer Start -->
          
            <!-- Footer End -->