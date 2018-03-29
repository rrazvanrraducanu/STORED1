<?php
require_once 'connection.php';
$nume='trandafiri';
$sql="CALL deleteFlori('{$nume}')";
$q=$con->query($sql);
if($q)
    echo "Data was successfully deleted!";
