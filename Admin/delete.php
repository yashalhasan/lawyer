
<?php require "header/navbar.php" ?>

<?php require "connection/connection.php" ?>

<?php



// if(isset($_POST['delete'])){


   $deleteId = $_GET['delid'];

    $sqldelete = "DELETE FROM `lawyers` WHERE id = :id";

   $deleteprepare = $connection->prepare($sqldelete);

   $deleteprepare->bindParam(':id',$deleteId,PDO::PARAM_INT);

   $deleteprepare->execute();

   header('location:tables-general.php');






?>