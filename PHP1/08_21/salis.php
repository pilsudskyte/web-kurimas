<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("Countrys.php");
?>
<h1>
<?php echo $country->getName(); ?>
</h1>

Sioje salyje yra tokie miestai:

<table>
	<tr>
		<td>Kaunas</td>
		<td>300000</td>
	</tr>
	<tr>
		<td>Vilnius</td>
		<td>500000</td>
	</tr>
</table>

