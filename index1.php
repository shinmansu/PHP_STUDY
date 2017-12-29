<?php
  $conn =	mysqli_connect('localhost','root','esin1005','opentutorials');
  $result = mysqli_query($conn,'SELECT * FROM topic');
 ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="http://localhost/style1.css">
  <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <style media="screen">
    #logo {
      width:100px;
    }
  </style>
</head>
<body id="target">
  <div class="container-fluid">
    <div class="text-center">
      <header class="jumbotron">
    		<img id="logo" class="img-circle" src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
    		<h1><a href="index.php">JavaScript</a></h1>
    	</header>
    </div>

  </div>
	<div class="row">
    <table class="table table-hover">
      <nav class="col-md-2">
    		<ol>
    			<?php
    				while($row = mysqli_fetch_assoc($result)) {
    					echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
    				}
    			 ?>
    		</ol>
    	</nav>
    </table>
    <div class="col-md-7">

      <article>
        <?php
          if (empty($_GET['id']) == false) {
            $sql="SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author=user.id WHERE topic.id=".$_GET['id']; ;
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.$row['title'].'</h2>';
            echo '<p>'.$row['name'].'</p>';
            echo $row['description'];
          }

         ?>
      </article>
      <div id="control">
        <input class="btn btn-default" type="button" value="white" onclick="document.getElementById('target').className='white'"/>
        <input class="btn btn-default" type="button" value="black" onclick="document.getElementById('target').className='black'"/>
        <a class="btn btn-success" href="http://localhost/write.php">쓰기</a>
      </div>
    </div>

  </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>

</html>
