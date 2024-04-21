
<?php require "header/navbar.php" ?>

<?php require "connection/connection.php" ?>


<?php

$id = $_GET['id']; 
// echo $id;

$sqlfetch = "SELECT * from lawyers WHERE id = :id";

$fetchPrepare = $connection->prepare($sqlfetch);
$fetchPrepare->bindParam(':id',$id,PDO::PARAM_INT);
$fetchPrepare->execute();

$data = $fetchPrepare->fetch(PDO::FETCH_ASSOC);

// print_r($data['product_name']);

if(isset($_POST['submit'])){

    $Name = $_POST['name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $image = $_POST['image'];
    $type = $_POST['type'];

    // echo $id;

    $updatequery = "UPDATE `lawyers` SET `name`= :Name,
    `description`= :description,`location`= :location, `image`= :image, `type`= :type  WHERE id = :id";
    
    $updateprepare = $connection->prepare($updatequery);
    
    $updateprepare->bindParam(':Name',$Name,PDO::PARAM_STR);
    $updateprepare->bindParam(':description',$description,PDO::PARAM_STR);
    $updateprepare->bindParam(':location',$location,PDO::PARAM_STR);
    $updateprepare->bindParam(':image',$image,PDO::PARAM_STR);
    $updateprepare->bindParam(':type',$type,PDO::PARAM_STR);
    $updateprepare->bindParam(':id',$id,PDO::PARAM_INT);
    
    $updateprepare->execute();

   echo "<script> window.location.href='tables-general.php'; </script>";
}





?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Update Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Update Form</li>
      <!-- <li class="breadcrumb-item active">Layouts</li> -->
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      
 

      <div class="card">
        <div class="card-body">

<form action = "<?php  $_SERVER['PHP_SELF'] ?>"   method = "post" >
                  <label for="">Lawyer Name</label>
                  <input type="text" class="form-control" id="inputNanme4" name = "name"  value = "<?php echo $data['name'] ?>">  <br>
                  

                  <label for="">Description</label>
                  <textarea type="text" class="form-control" id="inputEmail4" name = "description"  > <?php echo  $data['description'] ?> </textarea><br> 
                
                  <label for="">Location</label>
                  <input type="text" class="form-control" id="inputPassword4" name = "location" value = "<?php echo $data['location'] ?>" > <br>
                
                
                  <label for="inputAddress">Type</label>
                  <input type="text" class="form-control" id="inputAddress" name = "type" value = "<?php echo $data['type'] ?>" > <br>
            
                  <label for="inputAddress">Upload Image</label>
                  <input type="file" class="form-control" id="inputAddress" name = "image" value = "<?php echo $data['image'] ?>"> <br>




                <br>
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