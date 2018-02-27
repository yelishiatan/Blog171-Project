<br><br><br>
    <h1><?= $userid['nama'] ?></h1>
    <h5><?=$userid['email']?></h5>
<br><br><br><br>
    <h4>Blog :</h4>
      <?php
      foreach( $user as $users ){
        ?>
      <h5><?php
      echo "<a href='/blog/" . $users['blog_ID'] ."'>" . $users['judul']."<a><br>";
      ?></h5>
      <?php
      }
      ?>
