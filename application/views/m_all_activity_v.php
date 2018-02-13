<?php 
      $todo=0;
      $doing=0;
      $review=0;
      $done=0;
  foreach ($activity as $a) {

    if($a->activity_status=="To Do"){
      $todo++;
    }else if($a->activity_status=="Doing"){
      $doing++;
    }else if($a->activity_status=="Review"){
      $review++;
    }else{
      $done++;
    }
} ?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<br>
  <div class="panel panel-default">
    <div class="panel-heading">Aktivitas</div>
    <div class="panel-body">
      <div class="responsive">
        <div class="row">
            <div class="col-lg-3">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-reorder fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <p class="announcement-heading" style="font-size: 40px; margin-bottom: -5%;"><b><?php echo $todo; ?></b></p>
                      <p class="announcement-text" style="font-size: 20px; margin-bottom: -10%;"><b>To Do</b></p>
                    </div>
                  </div>
                </div>
                <a>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6">
                        <b style="font-size: 10px;"></b>
                      </div>
                      <div class="col-xs-6 text-right">
                        <i class="fa fa-check fa-2x"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-gears fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <p class="announcement-heading" style="font-size: 40px; margin-bottom: -5%; "><b><?php echo $doing; ?></b></p>
                      <p class="announcement-text" style="font-size: 20px; margin-bottom: -10%;"> Doing</p>
                    </div>
                  </div>
                </div>
                <a>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6">
                        <b style="font-size: 15px;"></b>
                      </div>
                      <div class="col-xs-6 text-right">
                        <i class="fa fa-check fa-2x"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-play-circle fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <p class="announcement-heading" style="font-size: 40px; margin-bottom: -5%;"><b><?php echo $review; ?></b></p>
                      <p class="announcement-text" style="font-size: 20px; margin-bottom: -10%;">Review</p>
                    </div>
                  </div>
                </div>
                <a>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6">
                        <b style="font-size: 15px;"></b>
                      </div>
                      <div class="col-xs-6 text-right">
                        <i class="fa fa-check fa-2x"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-check-square-o fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <p class="announcement-heading" style="font-size: 40px; margin-bottom: -5%;"><b><?php echo $done; ?></b></p>
                      <p class="announcement-text" style="font-size: 20px; margin-bottom: -10%;">Done</p>
                    </div>
                  </div>
                </div>
                <a>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6">
                       <b style="font-size: 15px;"></b>
                      </div>
                      <div class="col-xs-6 text-right">
                        <i class="fa fa-check fa-2x"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div><!-- /.row -->
      </div>
    </div>
  </div>


