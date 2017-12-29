<?php
  $conn= mysqli_connect('localhost','root','esin1005','keyworddiary');
  $result=mysqli_query($conn,"SELECT * FROM diaryuser");
  $row= mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost/loginstyle.css">

    <title>
      키워드 다이어리 로그인 페이지
    </title>
  </head>
  <body>
    <div class="jumbotron container text-center">
      <h2 id="keytitle">키워드 다이어리 WITH 예림</h1>
      <p class="cotnent"> 키워드 다이어리는 키워드 5개를 설정해서 그 키워드를 바탕으로 일기를 쓸 수 있도록 돕는 서비스입니다. </p>
      <div class="lead">
        <form class="login" action="login.php" method="get">
        <div>
        <input type="email" id="input" class="form-control" placeholder="아이디를 입력해주세요" required="" autofocus="" name="userid"> 
        </div>
        <div class="form.group">
          <input type="password" id="input" class="form-control" placeholder="비밀번호를 입력해주세요" required="" autofocus="" name="password">
<!--          <input type="text" name="password" value="비밀번호를 입력해주세요.">-->
        </div>
        <div class="form.group">
          <input type="submit" class="btn btn-lg btn-primary btn-block" value="제출">
        </div>
        </form>
      </div>
    </div>
  </body>
</html>
