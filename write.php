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
    <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <title >키워드 다이어리</title>
<!--
    <style>
        body {
            display:flex;
            align-items:center;
            justify-content: center;            
        }
        .container {
            display:flex; 
            flex-direction: column;
            border:1px solid gray;
            width:800px;
        }
        .header{
            border-bottom:1px solid gray;
            padding-left:20px; 
        }
        footer{
            text-align:center;
        }
        .content  {
            display:flex;
            border-bottom: 1px solid gray;
        }
        
        .content nav,asside {
            flex-basis:150px;
            flex-shrink:0;
        }
        
        .content nav{
            border-right:1px solid gray;
        }
        .content asside { 
            border-left:1px solid gray;
        }
        
        .content main {
            padding:10px;
            margin-top:0px;
            flex-basis:100%;
        }
        
        .button{
            position:relative;
            left:30px;
            top:30px;
        }
    </style>
    
-->
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
                <form class="write" action="process1.php" method="post">
                 <div> 제목 : <input type="text" name="title" value=""></div>
                 <div> 키워드1: <input type="text" name="keyword1" value=""></div>
                 <div> 키워드2: <input type="text" name="keyword2" value=""></div>
                 <div> 키워드3:<input type="text" name="keyword3" value=""></div>
                 <div> 키워드4:<input type="text" name="keyword4" value=""></div>
                 <div> 키워드5: <input type="text" name="keyword5" value=""></div>
                    <div> 내용 : <textarea name="content"row="10" clos="60" value=""></textarea></div> 
                
                  
                  
                 
                  
                  <input type="submit" value="저장">
                </form>
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
