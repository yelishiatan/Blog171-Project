<div class="top">
  <br><br><br><br>
</div>

<div class="gambarisi">
  <?php
  echo "<img src=\"/asset/images/gambar/".$blog['blog_ID'].".".$blog['gambar']."\">";
  ?>
  <br>
</div>

<h1><?= $blog['judul']."<br>" ?></h1>
<h4>Isi Cerita : </h4>
<div class="isicerita">

<p>
  <?php
      $isi = str_replace("\n","<br>",$blog['isi']);
      echo $isi;
   ?>
</p>
</div>

<h4>DiTulis Oleh:</h4>
<p>
  <?php
  echo "<a href='/user/" . $blog['user_ID'] ."'>" . $blog['nama']."<a><br><br><br><br><br>";
  ?>
</p>



<?php
  if(($this->session->uid)==$blog['user_ID']){
 ?>

  <div class="form-group" id="editblog">
    <a href="/blog/edit/<?= $blog['blog_ID'] ?>">  EDIT  </a><br>
  </div>
  <div class="form-group" id="deleteblog">
    <a href="/blog/delete/<?= $blog['blog_ID'] ?>"> DELETE  </a><br>
  </div>

<?php } ?>

<br>
