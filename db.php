<?php
function connect(){
$host = "localhost";
$dbname = "practical_php";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host, $dbuser ,$dbpass,  $dbname );
if ($conn -> connect_error){
    die("Connection refused!");
}
return $conn;
}
?>