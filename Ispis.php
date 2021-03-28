<?php

require ("templates/header.php");

?>


<?php

 
$sql = "SELECT * FROM hoteli ORDER BY id asc";

$result = $MySQLi->query($sql);

echo "<table id = 'tableIspis'>"; // start a table tag in the HTML
echo "<tr> <td id = 'ghost'> </td></tr>";
echo "<tr id = 'head'> <td > Id </td>  <td > Naziv </td> <td > Adresa </td> <td > Grad </td> <td > Zupanija </td> <td > Kapacitet </td> <td > Broj Soba </td> <td > Broj Gostiju </td> <td > Slobodno </td> </tr>";

while($row = $result->fetch_array()){   //Creates a loop to loop through results
echo "<tr id = 'red'><td>" . $row['id'] . "</td><td>" . $row['naziv'] . "</td><td>" . $row['adresa']. "</td><td>" . $row['grad'] . "</td><td>" . $row['zupanija'] . "</td><td>" . $row['kapacitet'] . '</td><td>' . $row['brojSoba'] . "</td><td>" . $row['brojGostiju'] . "</td><td>" . $row['slobodno'] . '</td>'




;  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

 
?>


</td>

</tr>



<tr>

<td class = rowIspis>




</td>

</tr>



</body>