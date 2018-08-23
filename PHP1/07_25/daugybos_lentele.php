<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
   
    .td {
        background-color: red;
}

</style>
</head>
<body>
<h3>DAUGYBOS LENTELE</h3>
<table width="350px" cellspacing="0px" cellpadding="0px" border="1px">  
    <?php  
      for($row=0;$row<=12;$row++)  
      {  
          echo "<tr>";
         
          for($col=1;$col<=12;$col++)  
          {  
              echo "<td>" .($col * $row). "</td>";
          }
          echo "</tr>";
      }
      ?>
 </table>
<!-- <table border="1" class="tbl">

     <?php
     
         for($i=1;$i<=12;$i++)
         {
             echo("<tr>");
             for($j=1;$j<=12;$j++)
             {
                 echo "<td align=right>",$i*$j;
             }
             
         }
     
     ?>         -->

</table>
</body>
</html>