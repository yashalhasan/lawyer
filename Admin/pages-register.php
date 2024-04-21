<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "connection/connection.php";
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $user_role_id = $_POST['user_role_id']; // Get the selected user role from the form

    // Image handling (You can customize this part)
    $img = $_FILES['img']['name'];

    // Check if the "images" directory exists, and create it if not
    $imageDirectory = "images/";
    if (!file_exists($imageDirectory)) {
        mkdir($imageDirectory, 0755, true); // Create the directory with appropriate permissions
    }

    $target = $imageDirectory . basename($img);
    move_uploaded_file($_FILES['img']['tmp_name'], $target);

    // Insert the data into the registration table with error handling
    try {
        $sqlInsert = "INSERT INTO `registration` (email, username, password, user_role_id, image) VALUES (:email, :username, :password, :user_role_id, :image)";
        $insertPrepare = $connection->prepare($sqlInsert);
        $insertPrepare->bindParam(':email', $email);
        $insertPrepare->bindParam(':username', $username);
        $insertPrepare->bindParam(':password', $password);
        $insertPrepare->bindParam(':user_role_id', $user_role_id);
        $insertPrepare->bindParam(':image', $img);
        $insertPrepare->execute();

        // Redirect the user to the login page
        header('Location: pages-login.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">lawyer Admin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action = "<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>

                  <div class="col-12">
        <label for="yourUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
            <input type="text" name="username" class="form-control" id="yourUsername" required>
            <div class="invalid-feedback">Please choose a username.</div>
        </div>
    </div>

    <div class="col-12">
        <label for="yourEmail" class="form-label">Your Email</label>
        <input type="email" name="email" class="form-control" id="yourEmail" required>
        <div class="invalid-feedback">Please enter a valid Email address!</div>
    </div>

    
    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
        <label for="role" class="form-label">Role</label>
        <select class="form-select" name="user_role_id" id="role" required>
            <option value="1">Admin</option>
            <option value="2">User</option>
            <option value="3">Lawyer</option>
            <!-- Add more role options as needed -->
        </select>
        <div class="invalid-feedback">Please select a role.</div>
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Image</label>
        <input type="file" name="img" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Please enter your Img!</div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit" name="submit"  >Create Account</button>
    </div>
</form>

                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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