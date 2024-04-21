<?php require "header/navbar.php" ?>

<?php require "connection/connection.php" ?>



<?php


$sql_insert = "SELECT * FROM `law`";

$sql_prepare = $connection->prepare($sql_insert);

$sql_prepare->execute();

$sql_fetch = $sql_prepare->fetchAll(PDO::FETCH_ASSOC);



?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Lawyer Types </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Lawyers Type </li>
          <!-- <li class="breadcrumb-item active">General</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lawyer Type </h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Add</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                <tbody>
                
                <?php 
                
                foreach($sql_fetch as $fetch){
                
                
                ?>
                
                <tr>
            
                            
                    <td> <?php echo $fetch['law_id']; ?> </td>                    
                    <td> <?php echo $fetch['law_name']; ?> </td>
                    <td> <?php echo $fetch['law_description']; ?> </td>
                    <td> <?php echo $fetch['type'] ?> </td>

                  <td>  <a href="catagadd.php?id=<?php echo $fetch['law_id'] ?>" class = "card-lint btn btn-success">Add</a></td>
                  <td>  <a href="catagoriesupdate.php?id=<?php echo $fetch['law_id'] ?>" class = "card-lint btn btn-primary">Update</a></td>
                  
                  <td>  <a href="catagoriesdel.php?delid=<?php echo $fetch['law_id'] ?>" value = "delete"
                      name = "delete" class = "card-lint btn btn-danger">Delete</a></td>

                  </tr>
                 
                  <?php } ?> 


                </tbody>
              </table>
              <!-- End Default Table Example -->
           

         

         
              
            </div>
          </div>

         
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Lawyer Admin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

