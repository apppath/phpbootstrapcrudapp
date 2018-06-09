<?php include('../includes/header.php'); ?>
<div class="container">
<h2 class="text-info">Edit Your Book</h2>

<hr>
<div class="row">

<!-- start col-lg-8 -->

<div class="col-lg-8">

<?php

$get_id = $_GET['book_id'];
include('../config/dbconfig.php');
$query = "SELECT * FROM books WHERE book_id='".$get_id."'";
$result = mysqli_query($conn , $query);
?>

<div class="card bg-light text-dark">
<div class="card-body">

<form action="../actions/update.php" method="post">

  <?php
  if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
  ?>

<div class="form-group">
  <label for="book_name">Book Name:</label>
  <input type="text" class="form-control" value="<?php echo $row['book_title']; ?>" name="book_name">
</div>

<div class="form-group">
  <label for="author_name">Author Name:</label>
  <input type="text" class="form-control" value="<?php echo $row['book_author']; ?>" name="author_name">
</div>

<div class="form-group">
  <label for="book_price">Book Price:</label>
  <input type="number" class="form-control" value="<?php echo $row['book_price']; ?>" name="book_price">
</div>

<div class="form-group">
  <label for="published_date">Published Date:</label>
  <input type="date" class="form-control" value="<?php echo $row['book_date_published']; ?>" name="published_date">
</div>

<div class="form-group">
  <label for="book_details">Book Details:</label>
  <textarea class="form-control" rows="5" name="book_details"><?php echo $row['info_book_details']; ?></textarea>
</div>

<input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">

<?php
}
// end while loop
}
// end if checked

else{

?>
<h4>No Records Founded By Database</h4>
<?php
}
mysqli_close($conn);
// end else block
?>
<button type="submit" class="float-right btn btn-success">Edit Book</button>

</form>

</div>
</div>

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
