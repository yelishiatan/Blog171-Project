<!-- <div class="page-inner"> -->
<nav class="gtco-nav" role="navigation">
  <div class="gtco-container">

    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div id="gtco-logo"><a href="#">Cerita Rakyat</a></div>
      </div>
      <div class="col-xs-8 text-right menu-1">
        <ul>
          <?php
          if ( !isset($this->session->uid)) {
            ?>

          <li><a href="user/login">Login</a></li>

        <?php } ?>


        <?php
        if ( !isset($this->session->uid)) {
          ?>
          <li><a href="/">Home</a></li>
          <?php } ?>

          <?php
          if ( !empty($this->session->uid)) {
            ?>
            <li><a href="/isi">Home</a></li>
            <?php } ?>

          <li><a href="/blog/post">Upload Cerita</a></li>
          <?php
          if ( !empty($this->session->uid)) {
            ?>
          <li><a href="/user/<?= $this->session->uid ?>">Profil</a></li>

          <?php } ?>

          <?php
          if ( !empty($this->session->uid)) {
            ?>
          <li><a href="/user/signout">Sign Out</a></li>

        <?php } ?>

        </ul>
      </div>
    </div>

  </div>
</nav>
