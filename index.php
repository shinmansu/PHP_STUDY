<?php
$conn = mysqli_connect('localhost','root','esin1005','keyworddiary');
$sql = "SELECT * FROM diary";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
<!--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
-->
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <title >키워드 다이어리</title>
    
  </head>
  <body>
    <div class="container">
        <div class="header">
            <h1><?php echo '신만수';?>님의 키워드 다이어리</h1>
        </div>
        <section class="content">
            <nav>
              <ol>
                <?php
                  while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
                  }
                 ?>
              </ol>   
            </nav>
            <main>
                 <article class="">
                    <?php
                    if (empty($_GET['id']) == false) {
                      $sql="SELECT * FROM diary WHERE id=".$_GET['id'];
                      $result = mysqli_query($conn,$sql);
                      $row = mysqli_fetch_assoc($result);
                      echo '<h2>'.$row['title'].'</h2>';
                      echo $row['date']." 키워드";
                      echo '<ul><li>'.$row['keyword1'].'</li>';
                      echo '<li>'.$row['keyword2'].'</li>';
                      echo '<li>'.$row['keyword3'].'</li>';
                      echo '<li>'.$row['keyword4'].'</li>';
                      echo '<li>'.$row['keyword5'].'</li></ul>';
                      echo '<p>'.$row['content'].'</p>';
                    }
                    ?>
                  </article>  
            </main>
            <asside>
                <div class="button">
                  <form class="btn" action="write.php" method="post">
                    <input type="submit"  value="쓰기">
                  </form>
                </div>
            </asside>
        </section>
        <footer>
            <a href="http://sinmansu.com">제작자 홈페이지</a>
        </footer>
    </div>             
 </body>
</html>
