<link rel="stylesheet" href="style.css">
<?php
include "connect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Edit User</h2>

<form action="update.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Name:<br>
<input type="text" name="name" value="<?php echo $row['name']; ?>">
<br><br>

Email:<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>">
<br><br>

<button type="submit">Update</button>

</form>
