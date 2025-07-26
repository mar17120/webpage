<!DOCTYPE html>
<html>
<head>
    <title>Insert User</title>
</head>
<body>

<h2>Insert User Info</h2>

<form method="post" action="insert.php">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
<hr>
<h2>Users</h2>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  <?php
  $conn = new mysqli("localhost", "root", "", "testdb");
  $result = $conn->query("SELECT * FROM users");

  while($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['age']}</td>
      <td>{$row['status']}</td>
      <td>
        <form method='post' action='toggle.php'>
          <input type='hidden' name='id' value='{$row['id']}'>
          <input type='submit' value='Toggle'>
        </form>
      </td>
    </tr>";
  }
  ?>
</table>
