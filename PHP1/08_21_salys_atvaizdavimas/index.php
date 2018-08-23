<!DOCTYPE html>
<?php include 'country.php';?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lia</title>
  </head>
  <body>
<style>
th, td {
  border: 1px solid #000;
}
</style>
<table>
  <tr>
    <th>Pavadinimas</th>
    <th>Kodas</th>
    <th>Plotas</th>
  </tr>
<!-- LIETUVA -->
  <tr>
      <td>
        <?php $lt = new Country("LT"); ?>
<button value="<?php echo $lt->getCode();?>" onclick="showUser(this.value)"><?php echo $lt->getName(); ?></button>
      </td>
      <td>
        <?php echo $lt->getCode(); ?>
      </td>
      <td>
        <?php echo $lt->getSurfaceArea(); ?>
      </td>
  </tr>
  <!-- Lenkija -->
  <tr>
    <td>
       <?php $POL = new Country("POL"); ?>
       <button value="<?php echo $POL->getCode();?>" onclick="showUser(this.value)"><?php echo $POL->getName(); ?></button>
    </td>
      <td>
        <?php echo $POL->getCode(); ?>
      </td>
      <td>
        <?php echo $POL->getSurfaceArea(); ?>
      </td>
  </tr>
  <!-- Vokietija-->
  <tr>
    <td>
      <?php $DE = new Country("DE"); ?>
<button value="<?php echo $DE->getCode();?>" onclick="showUser(this.value)"><?php echo $DE->getName(); ?></button>
    </td>
      <td>
        <?php echo $DE->getCode(); ?>
      </td>
      <td>
        <?php echo $DE->getSurfaceArea(); ?>
      </td>
  </tr>
 
</table>
<div id="txtHint"><b>All info about cities</b></div>
  </body>
  <script>
  function showUser(str) {
    if (str=="") {
      document.getElementById("txtHint").innerHTML="";
      return;
    }
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("txtHint").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","City.php?code="+str,true);
    xmlhttp.send();
  }
</script>
</html>