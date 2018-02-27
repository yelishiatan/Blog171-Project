<br>
<br>
<br>
<br>

<form action="/blog/subedit/<?=$blog_ID?>" method="post" enctype="multipart/form-data">
  Judul <input type="text" name="judul" value="<?=$judul?>">
  <br>
  Isi Cerita :<br>
  <textarea name="isi" rows="8" cols="80" wrap="hard"><?=$isi?></textarea>
  <br>
 Upload Gambar
  <input type="file" name="gambar">

  <input type="submit" value="Simpan">


</form>
