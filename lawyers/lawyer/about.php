
<?php require "hader/navbar.php" ?>
<?php require "connection/connection.php" ?>

 <?php

$sql_insert = "SELECT * FROM `about`";

$about_prepare = $connection->prepare($sql_insert);

$about_prepare->execute();

$fetch_law = $about_prepare->fetchAll(PDO::FETCH_ASSOC);


 ?> 


          
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>About Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="about.php">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Learn About Us</h2>
                            </div>
                            <div class="about-text">
                            <p>A lawyer is a person who practices law. The role of a lawyer varies greatly across different legal jurisdictions. A lawyer can be classified as an advocate, government lawyer, attorney, barrister, canon lawyer, civil law notary, counsel, counselor, solicitor, legal executive, or public servant — with each role having different functions and privileges. Working as a lawyer generally involves the practical application of abstract legal theories and knowledge to solve specific problems. Some lawyers also work primarily in advancing the interests of the law and legal profession.</p>
                                <!-- <a class="btn" href="">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Timeline Start -->
            <div class="timeline">
                <div class="container">
                    <div class="section-header">
                        <h2>Learn About Our Journey</h2>
                    </div>
                  
                    <?php
                foreach($fetch_law as $data){
                
                ?>
                        <div class="timeline-container left">
                            <div class="timeline-content">
                                <h2><?php echo $data['name'] ?></h2>
                                <p>
                                <?php echo $data['desc'] ?>
                                </p>
                            </div>
                        </div>
<?php } ?>
                  
                   
                </div>
            </div>
            <!-- Timeline End -->


            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Meet Our Expert Attorneys</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-1.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Adam Phillips</h2>
                                    <p>Business Consultant</p>
                           
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-2.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <p>Criminal Consultant</p>
                              
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Gloria Edwards</h2>
                                    <p>Divorce Consultant</p>
                             
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <p>Immigration Consultant</p>
                                 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


      
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
