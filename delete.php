<link rel="stylesheet" href="style.css">

<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "<script>
            alert('Record deleted successfully');
            window.location='view.php';
          </script>";
} else {
    echo "<script>
            alert('Error deleting record');
            window.location='view.php';
          </script>";
}
?>
