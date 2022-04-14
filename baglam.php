<?php

$conn =pg_connect("host=localhost dbname=planning_app port=5432 user=postgres password=***");

// Check connection

if (!$conn) {
    die("Connection failed: " . pg_connect_error());
}
echo "Connected successfully" ;

?>