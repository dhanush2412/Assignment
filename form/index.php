<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM users");
?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
</head>
<body>

<h2>Add User</h2>
<form action="insert.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Add</button>
</form>

<h2>User List</h2>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td>
        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
