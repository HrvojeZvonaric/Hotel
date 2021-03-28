<?php


require ("templates/header.php");


?>


<style>

#linkovi{
    opacity:0%;
    
}
</style>
<body id = 'body'>


<tr class= "ghostrow">

<td class="ghost">

</td>


</tr>


<tr id = 'row2' >



        <td class="box">
        <a href="Ispis.php">
        <button class ="upper">Ispis Hotela</button>

        </a>


 
        </td>

        <td class="box">

        <a href="" data-toggle="modal">

        
        <button type="button" class="upper" data-toggle="modal" data-target="#myModal1">Dodaj Hotel</button>

        </a>



    </button>
        
        
        </td>

        <td class="box">

        <a href="" data-toggle="modal">
       
        <button type="button" class="upper" data-toggle="modal" data-target="#myModal2">Izmijeni Hotel</button>

        </a>



    </button>
        
        </td>

    </tr>

    <tr class= "ghostrow">

<td class="ghost">

</td>


</tr>


    <tr id = 'row3' >



        <td class="box">
        <a href="" data-toggle="modal">
        <button class ="lower" data-toggle="modal" data-target="#myModal3">Izbrisi Hotel </button>

        </a>


 
        </td>

        <td class="box" >

        <a href="stat.php">

        
        <button type="button" class="lower" id='stat' >Prikazi statistiku</button>

        </a>



    </button>
        
        
        </td>

        <td class="box" >

        <a href="" data-toggle="modal">
       
        <button type="button" class="lower" id='azuriraj' data-toggle="modal" data-target="#myModal4">Azuriraj boravke</button>

        </a>

    </button>
        
        </td>

    </tr>

</body>

<!-- Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style=background-color:teal;>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Unesite ID hotela te broj gostiju:</h4>
      </div>
      <div class="modal-body">
      <p>
        <form method="POST">
        
          Unesite Id hotela: <br>
          <input type="text" id="id3" name="id3" method="POST" placeholder="Id"><br><br>

          Unesite broj gostiju::<br>
          <input type="text" id="brGos" name="brGos" method="POST" placeholder="Broj Gostiju"><br>
          
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
        <input type="submit" class="btn btn-primary" name="azuriraj">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style=background-color:teal;>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Unesite ID hotela za brisanje</h4>
      </div>
      <div class="modal-body">
        <p>
        <form method="POST">
        <input type="text" id="id2" name="id2" method="POST" placeholder="Id"><br>
        
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
        <input type="submit" class="btn btn-primary" name="izbrisi">
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style=background-color:teal;>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Unesite podatke novog hotela</h4>
      </div>
      <div class="modal-body">
        <p>
        <form method="POST">
        <input type="text" id="naziv" name="naziv" method="POST" placeholder="Naziv"><br>
        <input type="text" id="Adresa" name="Adresa"  method="POST" placeholder="Adresa"><br>
        <input type="text" id="Grad" name="Grad"  method="POST" placeholder="Grad"><br>
        <input type="text" id="Zupanija" name="Zupanija"  method="POST" placeholder="Zupanija"><br>
        <input type="text" id="Kapacitet" name="Kapacitet"  method="POST" placeholder="Kapacitet"><br>
        <input type="text" id="brojSoba" name="brojSoba"  method="POST" placeholder="Broj soba"><br>
        <input type="text" id="brojGostiju" name="brojGostiju"  method="POST" placeholder="Broj gostiju"><br>
        <input type="text" id="Slobodno" name="Slobodno"  method="POST" placeholder="Slobodno">

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
        <input type="submit" class="btn btn-primary" name="dodaj">
      </div>
    </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style=background-color:teal;>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Unesite id i novi podatak hotela za izmijenu</h4>
      </div>
      <div class="modal-body">
      <p>
        <form method="POST">
          <input type="text" id="id" name="id" method="POST" placeholder="Id"><br>
          <input type="text" id="val" name="val" method="POST" placeholder="Nova Vrijednost"><br>
          <br>
          Odaberite vrijednost koju zelite izmijeniti:<br>
          <input type="radio" name="vrijednost" method="POST" value="naziv"> Naziv<br>
          <input type="radio" name="vrijednost" method="POST" value="adresa"> Adresa<br>
          <input type="radio" name="vrijednost" method="POST" value="grad"> Grad<br>
          <input type="radio" name="vrijednost" method="POST" value="zupanija"> Zupanija<br>
          <input type="radio" name="vrijednost" method="POST" value="kapacitet"> Kapacitet<br>
          <input type="radio" name="vrijednost" method="POST" value="brojSoba"> Broj Soba<br>
          <input type="radio" name="vrijednost" method="POST" value="brojGostiju"> broj Gostiju<br>
          <input type="radio" name="vrijednost" method="POST" value="slobodno"> Slobodno
       

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
        <input type="submit" class="btn btn-primary" name="izmijeni">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php



if(isset($_POST['izbrisi'])){

  $id2 = $_POST['id2'];

  $delete = "DELETE FROM hoteli WHERE id = '$id2'";

  $MySQLi->query($delete);

}


?>

<?php

if(isset($_POST['azuriraj'])){
  

  
  $id3 = $_POST['id3'];
  
  
  
  $brGostiju = $_POST["brGos"];
  

  $getHotel = "SELECT * FROM hoteli WHERE id = '$id3'";
  
  
 $slob = null;
 $brGos = null;
 $result = $MySQLi->query($getHotel);
 
 while ($row = $result->fetch_array()) {
 $slob =  $row['slobodno'] - $brGostiju;
 $brGos = $row['brojGostiju'] + $brGostiju;
 }

 $update1 = "UPDATE hoteli SET slobodno = '$slob'
  WHERE id = '$id3'";

$update2 = "UPDATE hoteli SET brojGostiju = '$brGos'
WHERE id = '$id3'";


$MySQLi->query($update1);
$MySQLi->query($update2);

}


if(isset($_POST['dodaj'])){
    
  $naziv = $_POST['naziv'];
  $adresa = $_POST["Adresa"];
  $grad = $_POST["Grad"];
  $zup = $_POST["Zupanija"];
  $kap = $_POST["Kapacitet"];
  $brSob = $_POST["brojSoba"];
  $brGos = $_POST["brojGostiju"];
  $slob = $_POST["Slobodno"];

  $insert = "INSERT INTO hoteli (naziv, adresa, grad, zupanija, kapacitet, brojSoba, brojGostiju, slobodno)
  VALUES ('$naziv', '$adresa', '$grad', '$zup', '$kap', '$brSob', '$brGos', '$slob')";

  $MySQLi->query($insert);

}


?>


<?php

  if(isset($_POST['izmijeni'])){

  error_reporting(false);

  $id = $_POST['id'];
  $val = $_POST["val"];
  $var = $_POST['vrijednost'];


  $update = "UPDATE hoteli SET $var ='$val'
  WHERE id = '$id'";

$MySQLi->query($update);

  }

?>

<?php

require("templates/footer.php");

?>

</html>

