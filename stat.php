<?php

require ("templates/header.php");

?>


<?php

$brHotel = 0;
$brGosti = 0;
$brKap = 0;
$brSlob = 0;
 
$sql = "SELECT * FROM hoteli";
 $result = $MySQLi->query($sql);
 
 while ($row = $result->fetch_array()) {
 $brHotel++;
 $brGosti += $row['brojGostiju'];
 $brKap += $row['kapacitet'];
 $brSlob += $row['slobodno'];
 }






echo "<table id = 'tableIspis'>"; // start a table tag in the HTML
echo "<tr> <td id = 'ghost'> </td></tr>";
echo "<tr id = 'head'> <td > Broj Hotela </td>  <td > Broj Gostiju </td> <td > Ukupan Kapacitet </td> <td > Slobodna Mjesta </td> </tr>";


echo "<tr id = 'red'><td>" .$brHotel . "</td><td>" . $brGosti . "</td><td>" . $brKap. "</td><td>" . $brSlob . "</td> </tr>";




  //$row['index'] the index here is a field name

 $result->close();
echo "</table>"; //Close the table in HTML

 
?>


</td>

</tr>



<tr>

<td class = rowIspis>




</td>

</tr>



</body>