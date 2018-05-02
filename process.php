<?php
$conn = mysqli_connect("localhost", "root", "123123");
mysqli_select_db($conn, "opentutorials");
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://ec2-13-125-111-100.ap-northeast-2.compute.amazonaws.com/index.php');
?>
