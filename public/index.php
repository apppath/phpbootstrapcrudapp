<?php include('../includes/header.php'); ?>
<div class="container">
<h2 class="display">Book List Display</h2>
<hr>
<div class="row">

<!-- start col-lg-8 -->
<div class="col-lg-8">

  <?php
   include('../config/dbconfig.php');
   $query = "SELECT * FROM books ORDER BY book_id DESC";
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
