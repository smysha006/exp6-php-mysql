<link rel="stylesheet" href="style.css">

<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "<script>
            alert('Record updated successfully');
            window.location='view.php';
          </script>";
} else {
    echo "<script>
            alert('Error updating record');
            window.location='view.php';
          </script>";
}
?>
