<?php
  $conn = mysqli_connect('localhost','root','esin1005','keyworddiary');
  $sql = "SELECT * FROM diaryuser WHERE userid='".$_GET['userid']."'";
  $result=mysqli_query($conn,$sql);
  $row= mysqli_fetch_assoc($result);
  if ($row['userid']==$_GET['userid']){
      echo ("<script>location.href='http://localhost/index.php';</script>"); 
  } else
  {
    echo "옳지 않은 아이디입니다";
    echo "<p><a href='http://localhost/diary_login.php'>다시 입력하러가기</a></p>";
  }

?>
