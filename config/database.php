<?php

$db_engine = "mysql";
$db_host = "localhost";
$db_name = "cruddashboard";
$db_user = "root";
$db_pass = "root";

$conn = new PDO($db_engine.":host=".$db_host.";dbname=".$db_name,$db_user,$db_pass);
?>