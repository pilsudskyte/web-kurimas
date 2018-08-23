<?php 
var_dump($_POST);
	$kg = $_POST['kg'];
	$cm = $_POST['cm'];
	if(!is_nuberic($cm)) {
		head("Location: http:google.lt");
	}
	$rezultatas = $kg/($cm*$cm)*10000;
?>

<p>
	Jūsų KMI yra: <?php echo round($rezultatas, 2); ?>
</p>
<tr>
		<td>
			> 18
		</td>
		<td>
			<?php if($rezultatas < 18) {
				echo "<strong>Per mazas svoris</strong>";
			} else {
				echo "Per mazas svoris";
			} 
			?>			
		</td>
	</tr>
	<tr>
		<td>
			18.5 - 24.9
		</td>
		<td>
			Normalus svoris
		</td>
	</tr>
	<tr>
		<td>
			25
		</td>
		<td>
			Siek tiek per daug
		</td>
	</tr>
</table>