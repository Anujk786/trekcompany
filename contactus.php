<?php
$name=$_POST['name'];
$num=$_POST['num'];
$email=$_POST['email'];
$Sdate=$_POST['Sdate'];
$Edate=$_POST['Edate'];
$serve=$_POST['serve'];
$query=$_POST['query'];
//Database connection

$conn=new mysqli('localhost','root','','trekcompany');
if($conn->connect_error){
    die('Connection failed'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into contact(name,num,email,Sdate,Edate,serve,query)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sisssss",$name,$num,$email,$Sdate,$Edate,$serve,$query);
    $stmt->execute();
    echo "Request sent successfully";
    $stmt->close();
    $conn->close();
}
?>