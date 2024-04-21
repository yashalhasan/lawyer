
<?php require "hader/navbar.php" ?>
<?php require "connection/connection.php" ?>

<?php


// related  law start

$type =  $_GET['type'];
$relatedlawyer = "SELECT * FROM `lawyers` where type = :type";
$relatedprepare = $connection->prepare($relatedlawyer);
$relatedprepare->bindParam(':type',$type);
$relatedprepare->execute();

$fetchrelated = $relatedprepare->fetchAll(PDO::FETCH_ASSOC);


// related law end


$relatedlawyer = "SELECT * FROM `law` ";

$relatedprepare = $connection->prepare($relatedlawyer);

$relatedprepare->execute();

$fetchlaw = $relatedprepare->fetchAll(PDO::FETCH_ASSOC);

// print_r($fetchlaw);




if(isset($_POST['submit'])){


  $useremail = $_POST['useremail'];
  $username = $_POST['username'];
  $case = $_POST['case'];
  $lawyer = $_POST['lawyer'];
  $time = $_POST['time'];
  $date = $_POST['date'];
  $message = $_POST['message'];
  $availibility = 'Yes';
  $userID = $_SESSION['userid'];




	  if(isset($_SESSION['userid'])){

$book_query = "INSERT INTO `booking`(`useremail`, `username`,`case`,`lawyer_name`,`time`, `date`,  `message`, `availibility`)
VALUES (:useremail,:username,:case,:lawyer,:time,:date,:phone,:message,:availibility)";

$book_prepare = $connection->prepare($book_query);

$book_prepare->bindParam(':useremail', $useremail,PDO::PARAM_STR);
$book_prepare->bindParam(':username', $username,PDO::PARAM_STR);
$book_prepare->bindParam(':case', $case,PDO::PARAM_STR);
$book_prepare->bindParam(':lawyer', $lawyer,PDO::PARAM_STR);
$book_prepare->bindParam(':time', $time,PDO::PARAM_STR);
$book_prepare->bindParam(':date', $date,PDO::PARAM_STR);
$book_prepare->bindParam(':message', $message,PDO::PARAM_STR);
$book_prepare->bindParam(':availibility', $availibility,PDO::PARAM_STR);
$book_prepare->execute();

// echo $userID;

// Book a table end
}
  
else{



echo "<script>alert('Kindly login to book a Table')</script>";

}




}







?>

            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Lawyers</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="">lawyers Page</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Single Page Start -->
            <!-- <div class="single">
                <div class="container"> -->
                   


            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Meet Our Expert lawyers</h2>
                    </div>
                    <div class="row">
    <?php foreach ($fetchrelated as $data) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="team-item">
                <div class="team-img">
                    <img src="img/<?php echo $data['image']; ?>" alt="Team Image">
                </div>
                <div class="team-text">
                    <h2><?php echo $data['name']; ?></h2>
                    <p><?php echo $data['description']; ?></p>
                    <h2><?php echo $data['location']; ?></h2>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


            </div>
            </div>

<!-- lawyer end -->

<!-- appointment start -->

            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Appoinment</h2>
                    </div>

                    <div class="row">

                    <div class="col-lg-12">

                            <div class="contact-form">
                                <form action="<?php $_SERVER['PHP_SELF']  ?>" method = "post" >

                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name" required="required" name = "username" />
                                    </div>
                                    </div>

                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Email" required="required" name = "useremail" />
                                    </div>
                                    </div>



                                    <div class="col-lg-12">
                                    <div class="form-group">
                                    <select class="form-control" name="case" id="">
                                    <?php
                                        
                                        foreach($fetchlaw as $data ){
                                        
                                        ?>
                                        
                                        <option value=""> <?php  echo $data['law_name'];  ?> </option>

                                        <?php
                                        
                                        }
                                        
                                        ?>
                                        </select> 
                                                  
                                         </div>
                                    </div>



                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control" name="lawyer" id="">
                                         
                                        <?php
                                        
                                        foreach($fetchrelated as $data ){
                                        
                                        ?>
                                        
                                        <option value=""> <?php  echo $data['name'];  ?> </option>

                                        <?php
                                        
                                        }
                                        
                                        ?>
                                        </select> 
                                        <!-- <input type="text" class="form-control" placeholder="Lawyer Name " required="required" name = "lawyer"  /> -->
                                    </div>
                                    </div>

                            

                                    <div class="col-lg-12">

                                    <div class="form-group">
                                        <input type="time" class="form-control" placeholder="time" required="required" name = "time" />
                                    </div>

                                 

                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="date" required="required" name = "date" />
                                    </div>

                                    </div>

                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message" required="required" name = "message" ></textarea>
                                    </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <button class="btn" type="submit" name = "submit" >Submit</button>
                                    </div>
                                </form>
                                    <div class="col-lg-12">
                            </div>
                            </div>
                       
                    </div>
                </div>
            </div>



            <!-- Single Page End -->


          

 <!-- Footer Start -->
 <?php require "hader/footer.php" ?>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
