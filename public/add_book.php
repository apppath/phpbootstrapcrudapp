<?php include('../includes/header.php'); ?>
<div class="container">
<h2 class="text-info">Add New Books</h2>

<hr>
<div class="row">

<!-- start col-lg-8 -->

<div class="col-lg-8">

<div class="card bg-light text-dark">
<div class="card-body">

<form action="../actions/insert.php" method="post">

<div class="form-group">
  <label for="book_name">Book Name:</label>
  <input type="text" class="form-control" name="book_name" required>
</div>

<div class="form-group">
  <label for="author_name">Author Name:</label>
  <input type="text" class="form-control" name="author_name" required>
</div>

<div class="form-group">
  <label for="book_price">Book Price:</label>
  <input type="number" class="form-control" name="book_price" required>
</div>

<div class="form-group">
  <label for="published_date">Published Date:</label>
  <input type="date" class="form-control" name="published_date" required>
</div>

<div class="form-group">
  <label for="book_details">Book Details:</label>
  <textarea class="form-control" rows="5" name="book_details"></textarea>
</div>

<button type="submit" class="btn btn-info">Add Book</button>

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
