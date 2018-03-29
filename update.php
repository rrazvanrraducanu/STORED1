<?php
require_once 'connection.php';
$nume='trandafiri';
$culoare='rosii';
$marime='mari';
$pret='111';
$sql="CALL updateFlori('{$nume}', '{$culoare}', '{$marime}', '{$pret}')";
$q=$con->query($sql);
if($q)
    echo "Data was successfully updated!";
