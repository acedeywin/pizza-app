<?php

    //connect to database using MySQLi
    $conn = mysqli_connect('localhost', 'aceman', 'test1234', 'pizzadb');

    //check connection
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }


?>