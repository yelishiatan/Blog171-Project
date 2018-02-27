<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-12 col-md-offset-0 text-left">


        <div class="row row-mt-15em">
          <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
            <h1>Cerita Rakyat Nusantara</h1>
            <br>



          </div>
          <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
            <h5>(Register untuk dapat mengupload cerita daerah kamu <br>
            dan menu menarik lainnya)</h5>
            <div class="form-wrap">
              <div class="tab">


                <div class="tab-content">
                  <div class="tab-content-inner active" data-content="signup">
                    <h3>Register</h3>
                    <form action="/user/reg_submit" method="post">
                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">Nama</label>

                          <input type="text" id="fullname" class="form-control" name="nama" >
                        </div>
                      </div>

                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">Email</label>
                          <input type="email" id="email" class="form-control" name="email">
                        </div>
                      </div>

                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">Password</label>
                          <input type="password" id="pass" class="form-control" name="pass1">
                        </div>
                      </div>

                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">Verifikasi Password</label>
                          <input type="password" id="verifikasi" class="form-control" name="pass2">
                        </div>
                      </div>

                      <div class="row form-group">
                        <div class="col-md-12">
                          <input type="Submit" class="btn btn-primary btn-block" value="Register">
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
              </div>
            </div>
          </div>
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
