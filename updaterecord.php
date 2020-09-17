<?php
include('include/config.php');

$sql = "SELECT * FROM file WHERE  filename='".$_POST['file']."'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$id = $row['id'];
$download = $row['download'] +1 ;

$sql = "UPDATE file SET download ='".$download."' WHERE id='".$id."'";
return $conn->query($sql);
?>