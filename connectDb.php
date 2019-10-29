<?php
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_hostname = "localhost";
    $mysql_database = "homeleafletdb";
    $mysql_server = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password);
    $mysql_connection = mysqli_select_db($mysql_server, $mysql_database );
    //$mysql_server = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

    if (!$mysql_server) {
        echo "Connection lost";
    }
    else {
        echo "Connection succesful";
    }

    $mysql_myquery = "Select * from worlddata";
    $mysql_query = mysqli_query($mysql_server, $mysql_myquery);

    if (!$mysql_query) 
    {
        echo mysqli_error_list($mysql_server);
    }
    else
    {
        echo "Query listed";
    }
?>