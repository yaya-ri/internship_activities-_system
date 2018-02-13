<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Folarium Technomedia</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lineicons/style.css">   

    <!-- sweet allert -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.min.js"></script> 

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();?>assets/js/chart-master/Chart.js"></script>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js"></script>
    <script type="text/javascript">
      if (typeof jQuery == 'undefined') {
      document.write(unescape("%3Cscript src='/js/jquery-1.4.2.min.js' type='text/javascript'%3E%3C/script%3E")); 
      }
    </script>

    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datepicker/css/bootstrap-datepicker3.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/datepicker/js/bootstrap-datepicker.min.js" ></script>
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php $this->load->view('s_header_v') ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url();?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Mahasiswa</h5>
              	  	
                  <li class="sub-menu" id="pilih">
                      <a id="pilihan" class="" onclick="activityMenu1()">
                          <i class="fa fa-desktop"></i>
                          <span>Profile</span>
                      </a>
                  </li>

                  <!-- <li class="sub-menu">
                      <a id="pilihan" href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a id="pilihan"  onclick="activityMenu3()" ><span>Form Topic Magang</span></a></li>
                          <li><a id="pilihan" onclick="activityMenu4()" ><span>Form Aktivitas Magang</span></a></li>
                      </ul>
                  </li> -->
                  <li class="sub-menu" id="pilih">
                      <a id="pilihan" onclick="activityMenu2()" >
                          <i class="glyphicon glyphicon-tags"></i>
                          <span>Topic Magang</span>
                      </a>
                  </li>
                  <li class="sub-menu" id="pilih">
                      <a id="pilihan" onclick="activityMenu3()" >
                          <i class="fa fa-tasks"></i>
                          <span>Form Aktivitas</span>
                      </a>
                  </li>
                  <li class="sub-menu" id="pilih">
                      <a id="pilihan" onclick="activityMenu4()" >
                          <i class="glyphicon glyphicon-pushpin"></i>
                          <span>Aktivitas</span>
                      </a>
                  </li>

                  <li class="sub-menu" id="pilih">
                      <a id="pilihan" onclick="activityMenu5()" >
                          <i class=" glyphicon glyphicon-signal"></i>
                          <span>Rencana pengerjaan</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu" id="pilih">
                      <a id="pilihan" onclick="activityMenu6()" >
                          <i class="glyphicon glyphicon-folder-open"></i>
                          <span>Pengumpulan Akhir</span>
                      </a>
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper" id="konten">
          <?php echo $contents; ?>
          </section>
      </section><br>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer navbar-fixed-bottom">
          <div class="text-center">
              2017 - Folarium Technomedia
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url();?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url();?>assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url();?>assets/js/zabuto_calendar.js"></script>
  
  <script type="text/javascript">
      function refreshNotification(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/s_header_c/header/')?>",
          success: function(data){
                  $('#notifikasi').html(data);
            //$("#data").html(html);
          }
        });

      }

      setInterval(refreshNotification, 10000);
  </script>	

  <script type="text/javascript">
   var selector = '#pilihan';

   $(selector).on('click', function(){
       $(selector).removeClass('active');
       $(this).addClass('active');
   });;
  </script>

  <script type="text/javascript">
      function activityMenu1(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/s_profile_c/')?>",
          success: function(data){
            debugger;
            $('section#konten').html(data);
            //$("#data").html(html);
          }
        });

      }
  </script>

  <script type="text/javascript">
      function activityMenu2(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/s_topic_form_c/')?>",
          success: function(data){
            debugger;
            $('section#konten').html(data);
            //$("#data").html(html);
          }
        });

      }
  </script> 

  <script type="text/javascript">
      function activityMenu3(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/s_activity_form_c/')?>",
          success: function(data){
            debugger;
            $('section#konten').html(data);
            //$("#data").html(html);
          }
        });

      }
  </script>

  <script type="text/javascript">
      function activityMenu4(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/s_activity_menu_c/')?>",
          success: function(data){
            debugger;
            $('section#konten').html(data);
            //$("#data").html(html);
          }
        });

      }
  </script>

  <script type="text/javascript">
      function activityMenu5(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/s_progress_c/')?>",
          success: function(data){
            debugger;
            $('section#konten').html(data);
            //$("#data").html(html);
          }
        });

      }
  </script>

  <script type="text/javascript">
      function activityMenu6(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/s_final_report_c/read')?>",
          success: function(data){
            debugger;
            $('section#konten').html(data);
            //$("#data").html(html);
          }
        });

      }
  </script>  

 
	
<!-- 	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '<?php //echo base_url();?>assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script> -->
  

  </body>
</html>


