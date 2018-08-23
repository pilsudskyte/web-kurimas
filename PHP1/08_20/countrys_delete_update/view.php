<!DOCTYPE>
<html>
<head>
<title>View</title>
</head>
<body>
<?php

include('config.php');

$result = $db->query("SELECT * FROM city");

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='black'>Id</font></th>
<th><font color='black'>Name</font></th>
<th><font color='black'>countryCode</font></th>
<th><font color='black'>district</font></th>
<th><font color='black'>population</font></th>
<th><font color='black'>Edit</font></th>
<th><font color='red'>Delete</font></th>
</tr>";

while($row = $result->fetch_assoc())
{

echo "<tr>";
echo '<td><b><font color="#66005f">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#66005f">' . $row['name'] . '</font></b></td>';
echo '<td><b><font color="#66005f">' . $row['countryCode'] . '</font></b></td>';
echo '<td><b><font color="#66005f">' . $row['district'] . '</font></b></td>';
echo '<td><b><font color="#66005f">' . $row['population'] . '</font></b></td>';
echo '<td><b><font color="#66005f"><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="red"><a href="delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
<p><a href="insert.php">Insert new</a></p>
</body>
</html>