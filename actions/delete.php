<?php

$get_id = $_GET['book_id'];

include('../config/dbconfig.php');

$sql = "DELETE FROM books WHERE book_id='".$get_id."'";

if (mysqli_query($conn, $sql)) {
    header('Location:../public/index.php');
}
else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
