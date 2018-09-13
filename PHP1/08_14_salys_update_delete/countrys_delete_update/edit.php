<?php
function valid($id, $name, $countryCode, $district, $population, $error)
{
?>
<!DOCTYPE>
<html>
<head>
<title>Edit</title>
</head>
<body>
<?php

if ($error != '')
{
echo '<div style="padding:3px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form action="" method="GET">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit</font></b></td>
</tr>
<tr>
<td width="150"><b><font color='#66005f'>id<em>*</em></font></b></td>
<td><label>
<input type="text" name="id" value="<?php echo $id; ?>" />
</label></td>
</tr>

<tr>
<td width="150"><b><font color='#66005f'>name<em>*</em></font></b></td>
<td><label>
<input type="text" name="name" value="<?php echo $name; ?>" />
</label></td>
</tr>

<tr>
<td width="150"><b><font color='#66005f'>countryCode<em>*</em></font></b></td>
<td><label>
<input type="text" name="countryCode" value="<?php echo $countryCode; ?>" />
</label></td>
</tr>

<tr>
<td width="150"><b><font color='#66005f'>district<em>*</em></font></b></td>
<td><label>
<input type="text" name="district" value="<?php echo $district; ?>" />
</label></td>
</tr>


<tr>
<td width="150"><b><font color='#66005f'>population<em>*</em></font></b></td>
<td><label>
<input type="text" name="population" value="<?php echo $population; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit">
</label></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}

include('config.php');

if (isset($_GET['submit']))
{

if (is_numeric($_GET['id']))
{

$id = (htmlspecialchars($_GET['id']));
$name = (htmlspecialchars($_GET['name']));
$countryCode = (htmlspecialchars($_GET['countryCode']));
$district = (htmlspecialchars($_GET['district']));
$population = (htmlspecialchars($_GET['population']));


if ($id == '' || $name == '' || $countryCode == '' || $district == '' || $population == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $name, $countryCode, $district, $population, $error);
}
else
{

$result = $db->query("UPDATE city SET name = '$name',  countryCode= '$countryCode', district= '$district', population = '$population' WHERE id = '$id'")
or die(mysqli_error());

header("Location: view.php");
}
}
else
{

echo 'Error:)!';
}
}
else

{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){
 
    $id = $_GET['id'];
    $query = "SELECT * FROM city WHERE id=$id"
    or die(mysqli_error());
   
    $result = $db->query($query);
    if($result) {
        while ($row = $result->fetch_assoc()) {

    $id= $row['id'];
    $name = $row['name'];
    $countryCode = $row['countryCode'];
    $district = $row['district'];
    $population = $row['population'];

valid($id, $name, $countryCode, $district, $population, $error);
}
    }
else
{
echo "No results!";
}
}
else

{
echo 'Error...!';
}
}
?>
