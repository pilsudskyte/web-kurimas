<?php
$servername = 'localhost';
$dbname = 'Project';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);

$db->set_charset("utf8");

$sql = "SELECT year, SUM(price) AS priceSUM
FROM projects 
GROUP BY year";
$result = $db->query($sql);

$queryMax= "SELECT program, MAX(price) as max, name,  MIN(price) as min from projects";
$resultMax = $db->query($queryMax);

$queryVidVerte = "SELECT ROUND(AVG(price)) as VidVerte from projects";
$resultVidVerte = $db->query($queryVidVerte);
$vidVerte = 0;

$queryKiekis = "SELECT year, COUNT(price) AS kiekis
FROM projects 
GROUP BY year";
$resultKiekis = $db->query($queryKiekis);
?>

<table class="table" border="1">
    <h3>Suskaiciuoti kuriais metais kiek uzdirbta</h3>
						<tr>
							<th>Metai</th>
							<th>Projektu suma</th>
							
						</tr>
						<?php 
						while ($row = $result->fetch_assoc()) :  ?>
							<tr>
								<td><?php echo $row['year']; ?></td>
								<td><?php echo $row['priceSUM']; ?></td>
							</tr>
						<?php endwhile;?>
		</table>
	</div>
</div>
<table class="table" border="1">
	<h3>surasti brangiausia/pigiausia projekta ir atvaizduoti jo duomenis</h3>
            <tr align="center">
                <td colspan="2">Brangiausias projektas</td>
                <td colspan="2">Pigiausias projektas</td>
												
						</tr>
						<?php 
						while ($row = $resultMax->fetch_assoc()) :  ?>
							<tr>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['max']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['min']; ?></td>
							</tr>
						<?php endwhile;?>
		</table>
	</div>
</div>
<table class="table" border="1">
	<h3>suskaiciuoti vidutine projektu verte</h3>

            <tr align="center">
                <td>Vidutine projektu verte</td>
               	</tr>
						<?php 
						while ($row = $resultVidVerte->fetch_assoc()) :  ?>
							<tr>
								<td><?php echo $row['VidVerte']; ?></td>
							</tr>
						<?php endwhile;?>
		</table>
	</div>
</div>
<table class="table" border="1">
	<h3>suskaiciuoti vidutine projektu verte pagal programa</h3>
            <tr align="center">
                <td>Vidutine projektu verte pagal programa</td>
               	</tr>
						<?php 
						while ($row = $resultVidVerte->fetch_assoc()) :  ?>
							<tr>
								<td><?php echo $row['VidVerte']; ?></td>
							</tr>
						<?php endwhile;?>
		</table>
	</div>
</div>
<table class="table" border="1">
	<h3>suskaiciuotiu kuriais metais kiek projektu buvo</h3>
	<tr align="center">
							<th>Metai</th>
							<th>Projektu Kiekis</th>	
						</tr>
						<?php 
						while ($row = $resultKiekis->fetch_assoc()) :  ?>
							<tr>
								<td><?php echo $row['year']; ?></td>
								<td><?php echo $row['kiekis']; ?></td>
							</tr>
						<?php endwhile;?>
		</table>
	</div>
</div>