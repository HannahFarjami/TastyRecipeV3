<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="StyleSheet"
  type="text/css"
  href="/../resources/css/comments.css"/>
</head>
<body>
  <div class="comments">

          
      <?php  
      if($username!="Login"){
        echo "<form action='SubmitComment' method='post'>";
        echo "<textarea name='message' placeholder='Add your comment here'></textarea><br>";
        echo "<input type = 'hidden' name='url' value='".$_SERVER['REQUEST_URI']."' ?>";
        echo "<input type='submit' value='Submit Your Comment'></form>";
      }
      else
      {
        echo "<h1> YOU NEED TO BE LOGGED IN TO WRITE A COMMENT</h1>";
      }


      while ($row = mysqli_fetch_assoc($comments)) {
          echo "<div class ='cmts'><p id='name'>" . $row['username'] . "</p>";
          echo "<p id='comment'>" . $row['comment'] . "</p>";
           
          if( $username == $row['username']) {
            echo "<form action='DeleteComment'method='post'>
            <input type = 'hidden' name='id' value='".$row['id']."'>
            <input type = 'hidden' name='url' value='".$_SERVER['REQUEST_URI']."' ?>
            <button type='submit' class='deletebtn'>Delete Comment</button>
            </form>";
          }
          echo "</div>";
        }
      ?>  
