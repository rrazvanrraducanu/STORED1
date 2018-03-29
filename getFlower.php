<?php
require_once 'connection.php';
$id='27';
$sql1="CALL getFlower('4',@out_nume, @out_marime, @out_pret)";
$sql2="SELECT @out_nume, @out_marime, @out_pret";
$q=$con->query($sql1);
$q=$con->query($sql2);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<table>
<tr>
    <th>Nume</th>
    <th>Marime</th>
    <th>Pret</th>
</tr>
<?php
while($row = $q->fetch())
{
    echo "<td>".$row["@out_nume"]."</td>";
    echo "<td>".$row["@out_marime"]."</td>";
    echo "<td>".$row["@out_pret"]."</td>";
}
?>

