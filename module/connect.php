<?php
function connectToServer($servername, $username, $password, $port) {
    $connect = new mysqli($servername, $username, $password, "", $port);
    if ($connect->connect_error) {
        die("Connect to server failed.");
    }
    else return $connect;
}
?>