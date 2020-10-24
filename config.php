<?php
$conn = mysqli_connect("localhost","admin","admin","restapi");
if(mysqli_connect_errno()){
    die("Failed to connect to MySQL: ". mysqli_connect_errno());
}