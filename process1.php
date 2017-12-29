<?php
$conn = mysqli_connect('localhost','root','esin1005','keyworddiary');
$sql = "INSERT INTO diary (date,title,keyword1,keyword2,keyword3,keyword4,keyword5,content) VALUES(now(),'".$_POST['title']."','".$_POST['keyword1']."','".$_POST['keyword2']."','".$_POST['keyword3']."','".$_POST['keyword4']."','".$_POST['keyword5']."','".$_POST['content']."')";
$result=mysqli_query($conn,$sql);

header('Location: http://localhost/index.php');
?>
