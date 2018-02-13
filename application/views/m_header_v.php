<header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>Folarium Technomedia</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
            <!--   notifikasi -->

             <?php $this->load->view('m_notifikasi_v') ?>

              <!-- inbox dropdown end -->
          </ul>
          <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
              <li><a class="logout" href="http://localhost/projek_kp_coba/index.php/login_c">Logout</a></li>
        </ul>
      </div>
  </header>