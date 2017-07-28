<?php

DEFINE ('DB_USER','guestinterns');
DEFINE ('DB_PASSWORD','interns2017');
DEFINE ('DB_HOST','handson-mysql');
DEFINE ('DB_NAME','intern2017_group3');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
echo "Connected";

?>