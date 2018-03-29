<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$dbms = 'mysql';
$host = 'localhost'; 
$db = 'flori';
$user = 'root';
$pass = '';
$dsn = "$dbms:host=$host;dbname=$db";
$con=new PDO($dsn, $user, $pass);
$sql='CALL GetFlori()';
$q=$con->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>Nume</th>
        <th>Culoare</th>
        <th>Marime</th>
        <th>Pret</th>
    </tr>
    <?php while ($res=$q->fetch()): ?>
    <tr>
        <td><?php echo $res['nume']; ?></td>
        <td><?php echo $res['culoare']; ?></td>
        <td><?php echo $res['marime']; ?></td>
        <td><?php echo $res['pret']; ?></td>
    </tr>
     <?php endwhile; ?>
</table>
<br/><br/>
        
        <a href="insert.php">Insert</a><br/><br/>
        <a href="update.php">Update</a><br/><br/>
        <a href="delete.php">Delete</a><br/><br/>
        <a href="getFlower.php">getFlower</a><br/><br/>
    </body>
</html>
