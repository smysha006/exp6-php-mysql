<link rel="stylesheet" href="style.css">

<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];

/* email format validation */
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<script>
            alert('Invalid email format');
            window.location='register.html';
          </script>";
    exit;
}

/* secure input */
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);

/* insert query */
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if(mysqli_query($conn, $sql)){
    echo "<script>
            alert('Data inserted successfully');
            window.location='register.html';
          </script>";
} else {
    echo "<script>
            alert('Error inserting data');
            window.location='register.html';
          </script>";
}
?>

