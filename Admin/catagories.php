<?php require "header/navbar.php" ?>

<?php require "connection/connection.php" ?>

<?php

if(isset($_POST['submit'])){


$name = $_POST['name'];
$description = $_POST['description'];
$logo = $_POST['logo'];
$type = $_POST['type'];


$sql = "SELECT * FROM `law`";

$sql_insert = "INSERT INTO `law`( `law_name`, `law_description`, `law_logo`, `type`)
 VALUES (:name, :description, :logo, :type)";

$sql_prepare = $connection->prepare($sql_insert);

$sql_prepare->bindParam(':name',$name,PDO::PARAM_STR);
$sql_prepare->bindParam(':description',$description,PDO::PARAM_STR);
$sql_prepare->bindParam(':logo',$logo,PDO::PARAM_STR);
$sql_prepare->bindParam(':type',$type,PDO::PARAM_STR);


$sql_prepare->execute();



}



?>





<main id="main" class="main">

<div class="pagetitle">
  <h1>Law Catagories </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Law Catagories</li>
      <!-- <li class="breadcrumb-item active">Layouts</li> -->
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      
 

      <div class="card">
        <div class="card-body">
          <!-- <h5 class="card-title">Vertical Form</h5> -->
<br>
          <!-- Vertical Form -->
          <form action = "<?php  $_SERVER['PHP_SELF'] ?>"   method = "post" >
              <label for="">Law Name</label>
              <input type="text" class="form-control" id="inputNanme4" name = "name">  <br>
              

              <label for="">Description</label>
              <textarea type="text" class="form-control" id="inputEmail4" name = "description"></textarea> <br>
            
              <label for="">Logo</label>
              <input type="text" class="form-control" id="inputPassword4" name = "logo"> <br>
            
            
              <label for="inputAddress">Type</label>
              <input type="text" class="form-control" id="inputAddress" name = "type" > <br>
        
            


            <div class="text-center">
              <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
              <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
            </div>
          </form><!-- Vertical Form -->

 

     
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


