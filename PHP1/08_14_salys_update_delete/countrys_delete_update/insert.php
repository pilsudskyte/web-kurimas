<?php
function valid($id, $name, $countryCode, $district, $population, $error)
{
?>
<!DOCTYPE>
<html>
<head>
<title>Insert</title>
</head>
<body>
<?php

if ($error != '')
{
echo '<div style="padding:3px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form action="" method="POST">
<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Insert</font></b></td>
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
<input type="submit" name="submit" value="Insert">
</label></td>
</tr>
</table>
</form>

<?php echo "* field is required"; ?>

</body>
</html>
<?php
}

include('config.php');

if (isset($_POST['submit']))
{

$id = (htmlspecialchars($_POST['id']));
$name = (htmlspecialchars($_POST['name']));
$countryCode = (htmlspecialchars($_POST['countryCode']));
$district = (htmlspecialchars($_POST['district']));
$population = (htmlspecialchars($_POST['population']));

if ($id == '' || $name == '' || $countryCode == '' || $district == '' || $population == '')
{

$error = 'Please enter the details!';

valid($id, $name, $countryCode, $district, $population, $error);
}
else
{

$result = $db->query("INSERT city SET id = '$id', name = '$name',  countryCode= '$countryCode', district= '$district', population = '$population'")
or die(mysqli_error());

header("Location: view.php");
}
}
else
{
valid('','','','','','');
}
?>