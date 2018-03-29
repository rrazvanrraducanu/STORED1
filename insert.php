<?php
require_once 'connection.php';
$nume='bbbbb';
$culoare='bbbbbbb';
$marime='bbbbbbb';
$pret='111';
$sql="CALL insertFlori('{$nume}', '{$culoare}', '{$marime}', '{$pret}')";
$q=$con->query($sql);
if($q)
    echo "Data was successfully inserted!";

