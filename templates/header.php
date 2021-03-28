<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<?php
$server = "localhost";
$username = "root";
$pass = "";

$MySQLi = new MySQLi($server, $username, $pass);

if ($MySQLi->connect_error) {
  die("Povezivanje neuspjelo: " . $MySQLi->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS hoteli";
if ($MySQLi->query($sql) === TRUE) {
 
} else {

    echo "Greska pri generiranju baze";
 
}

$MySQLi->close();
?>

<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "hoteli";


$MySQLi = new MySQLi($server, $username, $pass, $db);

if ($MySQLi->connect_error) {
  die("pogreska pri povezivanju: " . $MySQLi->connect_error);
}

$createTable = "CREATE TABLE IF NOT EXISTS hoteli(
    
    id int (25) not null auto_increment primary key,
    naziv varchar(255) not null,
    adresa varchar(255) NOT NULL,
    grad VARCHAR(255) NOT NULL,
    zupanija varchar(255) not null,
    kapacitet int (25) not null,
    brojSoba int (25) not null,
    brojGostiju int (25) not null,
    slobodno int (25) not null)
    ";

    $MySQLi->query($createTable);


?>




<style>

    html,body
    {
    
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
    }




    .table1{
        
        border-collapse: collapse;
        width:100%;
        
        border-radius:15px;
           
    }

    #tableIspis{
        
        width:80%;
        color:white;
        text-align:center;
        margin-left:180px;
        border-radius:15px;

    }
    

    #head{
        
        background-color:teal;
        opacity:80%;
        border-radius:15px;
         
    }

    #head>td{
        
        border-radius:15px;
        
    }

    #red>*{
        
        background-color:black;
        opacity:60%;
        border-radius:15px;
          
    }

   

    #div1{
        position:absolute;
        top: 80%;
        left:50%;
    }

    body {
        background-image: url('photos/Otok.jpg');
        background-size: 100%;
        
    }

    .row1{
        border: solid black 2px;
        border-collapse: collapse;
        background-color: black;
        opacity:60%;
        height:100px;

    }

    a{
        color: white;
        margin-left:50px;
        margin-right:20px;
        text-decoration:none;
    }

    a:hover{
        text-decoration:underline;
    }

    #linkovi{
            display: inline-flex;
            text-align:justify;
            text-justify: 200px;
            list-style-type:none;
            float:right;
            border-radius:15px;
            
      
    }

   
    #row2{

        display:inline-block;
        justify-content:none;
        left:30px;

    }

    #row3{

        display:inline-block;
        justify-content:flex;

    }

    .upper:hover{
        transition:opacity 2s ease;
        
        opacity:90%;
    }

    .upper{
        transition: opacity 2s ease;
        white-space:nowrap;
        opacity:40%;
        background-color:black;
        text-align:center;
        height:200px;
        font-weight:bold;
        left:30px;
        background-color:black;
        font-size:large;
        color:white;
        padding:130px 220px;
        border-radius:25px;
    }

    .lower:hover{
        transition:opacity 2s ease;
        opacity:90%;
    }

    .lower{

        transition: opacity 2s ease;
        white-space:nowrap;
        opacity:40%;
        background-color:black;
        text-align:center;
        height:200px;
        font-weight:bold;
        left:30px;
        background-color:black;
        font-size:large;
        color:white;
        padding:130px 220px;
        border-radius:25px;

    }

    #azuriraj{
        padding-right: 195px;
        
    }

    #stat{
        padding: 130px 200px;
        
    }

    .bIspis{
        
        background-color:teal;
        border-radius:15px;
        
    }

    .ghost{
        height:70px;
        
    }

    #ghost{
        height:200px;
        

    .rowIspis{
        height: 100%;
        background-color:black;
        width:100%;
        opacity:10%;
        color:white;
    }


</style>



<!DOCTYPE html>
<html lang="hr">
<head>
 <title>Admin</title>

 <table class = "table1">

    <tr class = "row1">

    <td colspan="2">
                <img src="photos/logo.jpg" alt="logo" width="120px" id = 'logo'>


            </td>

            <td>

            <ul id = 'linkovi'>
            
            <li><a href="Ispis.php"><button class = 'bIspis'>Ispis Hotela</button></a></li>
            <li><a href="Stat.php"><button class = 'bIspis'>Statistika</button></a></li>
            <li><a href="Hotel_Admin_Main.php"><button class = 'bIspis'>Home</button></a></li>
            
            </ul>

            


            </td>

    </tr>


</head>