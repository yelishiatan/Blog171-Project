<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12 col-md-offset-0 text-left">
        <img id="utama" src="/asset/images/cerita.jpg"



          <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
            <h1></h1>
          </div>
          <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">

            </div>
          </div>



      </div>
    </div>
</header>

<div class="gtco-section">
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
        <h2>Kumpulan Cerita Rakyat</h2>

      </div>
    </div>
    <div class="row">

      <?php
      foreach( $blogs as $blog ){
        ?>


      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="gambar">

        <?php
          echo "<img src=\"./asset/images/gambar/".$blog['blog_ID'].".".$blog['gambar']."\">";
         ?>
       </div>
          <div class="fh5co-text">

            <?php
            echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br>";
            ?>

          </div>
      </div>

    <?php } ?>



    </div>
  </div>
</div>

<div id="gtco-features">
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
        <h2>Informasi</h2>

      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="feature-center animate-box" data-animate-effect="fadeIn">
          <span class="icon">
            <i>1</i>
          </span>
          <h3>Pengertian</h3>
          <p>Cerita rakyat adalah cerita yang berasal dari masyarakat dan berkembang dalam masyarakat pada masa lampau yang
            menjadi ciri khas setiap bangsa yang memiliki kultur
            budaya yang beraneka ragam mencakup kekayaan budaya dan sejarah yang dimiliki masing-masing bangsa.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="feature-center animate-box" data-animate-effect="fadeIn">
          <span class="icon">
            <i>2</i>
          </span>
          <h3>Ciri-ciri</h3>
          <p>1. Disampaikan turun-temurun. <br>
            2. Tidak diketahui siapa yang pertama kali membuatnya <br>
            3. Kaya nilai-nilai luhur <br>
            4. Bersifat tradisional <br>
            5. Memiliki banyak versi dan variasi <br>
            6. Mempunyai bentuk – bentuk klise dalam susunan atau cara pengungkapkannya. <br>
            7. Bersifat anonim, artinya nama pengarang tidak ada. <br>
            8. Berkembang dari mulut ke mulut. <br>
            9. Cerita rakyat disampaikan secara lisan.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="feature-center animate-box" data-animate-effect="fadeIn">
          <span class="icon">
            <i>3</i>
          </span>
          <h3>Jenis-Jenis Cerita Rakyat</h3>
          <p> 1. Cerita jenaka <br>
            2. Cerita Legenda <br>
            3. Cerita Binatang <br>
            4. Cerita Asal-Usul <br>
            </p>
        </div>
      </div>


    </div>
  </div>
</div>
