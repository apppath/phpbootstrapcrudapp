<?php
include('../config/dbconfig.php');

if(isset($_POST['book_name']) && isset($_POST['author_name']) && isset($_POST['book_price'])
   && isset($_POST['published_date']) && isset($_POST['book_details']) && isset($_POST['book_id'])){

     $book_name = mysqli_real_escape_string($conn, $_POST['book_name']);
     $author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
     $book_price = mysqli_real_escape_string($conn, $_POST['book_price']);
     $published_date = mysqli_real_escape_string($conn, $_POST['published_date']);
     $book_details = mysqli_real_escape_string($conn, $_POST['book_details']);
     $book_id = $_POST['book_id'];

    $sql_query = "UPDATE books SET book_title='".$book_name."' , book_author='".$author_name."' , book_price='".$book_price."' ,
                 book_date_published='".$published_date."' , info_book_details='".$book_details."' WHERE book_id='".$book_id."'";

  $result = mysqli_query($conn, $sql_query);

if ($result>0) {
     header('Location:../public/index.php');
}
else {
echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
}

else{
 echo "no";
}

?>
