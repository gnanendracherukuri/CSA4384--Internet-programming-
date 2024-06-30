<?php
$name = $_POST['name'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$conn=new mysqli('localhost','root','','ip');
if ($conn->connect_error)
die("connection error: ".$conn->connect_error);
else
{
$s=$conn->prepare("INSERT INTO t5(name,password,email) VALUES(?,?,?)");
$s->bind_param("sss",$name,$password,$mail);
$s->execute();
echo("data stored");
$s->close();
$conn->close();
}
?>
