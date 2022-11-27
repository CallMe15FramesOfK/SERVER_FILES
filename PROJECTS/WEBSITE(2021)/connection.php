<?php

$sname= "localhost";

$unmae= "jan.krzeczowski";

$password = "Zaq!@WSX23250";

$db_name = "jan.krzeczowski";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}