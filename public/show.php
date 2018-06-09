<?php include('../includes/header.php'); ?>
<div class="container">
<h2 class="display">Detail Of Book</h2>
<hr>
<div class="row">

<!-- start col-lg-8 -->
<div class="col-lg-8">

  <?php
   $get_id = $_GET['id'];

   include('../config/dbconfig.php');
   $query = "SELECT * FROM books WHERE book_id='".$get_id."'";
   $result = mysqli_query($conn , $query);
  ?>
<?php
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
?>

<!-- start card -->
<div class="card bg-light text-dark">
<div class="card-body">

  <h2 class="text-info"><?php echo $row['book_title']; ?></h2>
  <p class="text-primary"><?php echo $row['book_author']; ?> (Author)</p>
  <p class="text-justify">
  <?php echo $row['info_book_details']; ?>
  </p>
  <p class="text-success float-left">Published By (<?php echo $row['book_date_published']; ?>)</p>
  <p class="text-warning float-right">Price ($<?php echo $row['book_price']; ?>)</p>
  <br>
  <br>

  <a href="edit.php?book_id=<?php echo $row['book_id']; ?>" class="float-left btn btn-primary">Edit</a>
  <a href="../actions/delete.php?book_id=<?php echo $row['book_id']; ?>" class="float-right btn btn-danger">Delete</a>

</div>
</div>

<!-- end of card -->

<br>

<?php
}
// end while
}
// end if row
else{
?>
<h3>No Records Found</h3>
<?php
}
// end else block
mysqli_close($conn);
?>
</div>
<!-- end col-lg-8 -->

<!-- start col-lg-4 -->

<div class="col-lg-4">
<?php include('../includes/sidebar.php'); ?>
</div>

<!-- end col-lg-4 -->
</div>
</div>

<?php include('../includes/footer.php'); ?>
