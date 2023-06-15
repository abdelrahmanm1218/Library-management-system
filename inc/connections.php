<?php
//connect with the database using localhost and root as domain and password and type the name of the database you want to connect with
$conn = mysqli_connect('localhost', 'root' , '' , 'library');
if (!$conn) {
    die('Error' . mysqli_connect_error());
}

?>