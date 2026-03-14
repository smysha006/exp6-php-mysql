<link rel="stylesheet" href="style.css">
<?php
include "db.php";
?>

<h2>User List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>

```
<td>
    <a href="edit.php?id=<?php echo $row['id']; ?>">
        Edit
    </a>
</td>

<td>
    <a href="delete.php?id=<?php echo $row['id']; ?>">
        Delete
    </a>
</td>
```

</tr>

<?php
}
?>

</table>

<br>
<a href="register.html">Add User</a>

