<?php

include("../config/dbconfig.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 if(isset($_POST['book_name']) && isset($_POST['author_name']) && isset($_POST['book_price'])
    && isset($_POST['published_date']) && isset($_POST['book_details'])){

      $book_name = mysqli_real_escape_string($conn, $_POST['book_name']);
      $author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
      $book_price = mysqli_real_escape_string($conn, $_POST['book_price']);
      $published_date = mysqli_real_escape_string($conn, $_POST['published_date']);
      $book_details = mysqli_real_escape_string($conn, $_POST['book_details']);

      $query = "INSERT INTO books(book_title,book_author,book_price,book_date_published,info_book_details)
               VALUES('".$book_name."' , '".$author_name."' , '".$book_price."' , '".$published_date."' , '".$book_details."')";

     $result = mysqli_query($conn , $query);

     if($result>0){
        header('Location:../public/index.php');
     }

     else{
       echo "Error L 3 ... : " . $query . "<br>" . mysqli_error($conn);
     }
    mysqli_close($conn);
}

else{
  echo "Please Full All Fields ";
}


}

else{

 echo "Not Method Is Post";

}

 ?>
