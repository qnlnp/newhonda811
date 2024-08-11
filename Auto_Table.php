
<!DOCTYPE html>
<html>
<head>
        <title>Auto_Table</title>
        <meta charset="utf-8">
        <link href="start.css" rel="stylesheet">

    </head>
    <body>


<table width="200" border="1"> 
   <tr> 
      <?php 
         for($i=1;$i<=15;$i++){ 
            echo "<td>".$i."</td>"; 
            if($i%5==0){ 
               echo "</tr><tr>"; 
            } 
         } 
      ?> 
   </tr> 
</table>
</body>
</html>





