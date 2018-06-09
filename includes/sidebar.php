<h4>Book List</h4>
<div class="card">
<div class="card-body">
<ul class="list-group">
<?php
include('../config/dbconfig.php');
$query = "SELECT book_id , book_title FROM books ORDER BY book_id DESC";
$result = mysqli_query($conn , $query);
?>

<?php
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
?>

<li class="list-group-item"> <a href="show.php?id=<?php echo $row['book_id']?>"><?php echo $row['book_title']; ?></a> </li>

<?php
}
// end while
}
// end if checked row
else{
?>
<h4>No Records Found</h4>
<?php
}
// end else
 ?>
</ul>
</div>
</div>
