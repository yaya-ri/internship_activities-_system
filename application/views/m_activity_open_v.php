<?php foreach ($mg_activity as $a) {
  $student = $a->student_id;
  break;
} ?>
<link href="<?php echo base_url();?>assets/css/m_activity_open1.css" rel="stylesheet" type="text/css">

<div class="page-content"><br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Timeline aktivitas</b></h3>
  </div>
  <div class="panel-body">
      <div class="breadcrumb-line">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Timeline</a></li>
            <li class="active">aktivitas</li>
          </ul>

          <div class="visible-xs breadcrumb-toggle">
            <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
          </div>
        </div>
        <!-- <div class="text-right">
          <div id="update-data">
            <form class="form-horizontal">
                  <label>Urutkan: </label>
                  <select name="sort" >
                      <option value="tanggal" >tanggal</option>
                      <option value="status" >status</option>
                      <option value="nama" >nama</option>
                      <option value="verifikasi" >verifikasi</option>
                  </select>
                  <button class="btn btn-info btn-xs" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
          </div>
        </div> -->
        
      <div class="responsive">
            <ul class="timeline">
            <?php 
            $id = 0;
            foreach ($mg_activity as $a) { ?>
              <?php if($id%2==0){ ?>
                <li>
                  <div class="timeline-badge defaulf"><i class="glyphicon glyphicon-th-list"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title"><?php echo $a->activity_name ; ?></h4>
                    </div>
                    <div class="timeline-body">
                      <p><?php echo $a->activity_date; ?></p>
                      <hr>
                        <div class="col-md-6">
                          <!-- <button type="button" class="btn btn-primary btn-sm"> -->
                            <?php echo anchor('m_detail_activity_c/read/'.$a->activity_id, ' ', array('class' => 'btn btn btn-primary btn-sm, glyphicon glyphicon-eye-open','title'=>'lihat detail')); ?>
                            <!-- <i class="glyphicon glyphicon-eye-open"></i> -->
                          </button>
                        </div>
                        <div class="col-md-6">
                          <div class="text-right">
                            <label >Status: </label>
                            <?php $status = 1; if($status==$a->activity_verification){ ?>
                              <span class="glyphicon glyphicon-ok" style="color:rgb(95, 111, 235);" title="verivikasi"></span>
                            <?php } else { ?>  
                              <span class="glyphicon glyphicon-remove" style="color: rgb(228, 82, 94);" title="verivikasi"></span>
                            <?php } ?>
                          </div>
                        </div>
                    </div>
                  </div>
                </li>
              <?php } else { ?>
            

                <li class="timeline-inverted">
                  <div class="timeline-badge info"><i class="glyphicon glyphicon-th-list"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title"><?php echo $a->activity_name ; ?></h4>
                    </div>
                    <div class="timeline-body">
                      <p><?php echo $a->activity_date;  ?></p>
                      <hr>
                        <div class="col-md-6">
                          <?php echo anchor('m_detail_activity_c/read/'.$a->activity_id, ' ', array('class' => 'btn btn btn-primary btn-sm, glyphicon glyphicon-eye-open','title'=>'lihat detail')); ?>
                          </button>
                        </div>
                        <div class="col-md-6">
                          <div class="text-right">
                            <label >Status: </label>
                            <?php $status = 1; if($status==$a->activity_verification){ ?>
                              <span class="glyphicon glyphicon-ok" style="color:rgb(95, 111, 235);" title="verivikasi"></span>
                            <?php } else { ?>  
                              <span class="glyphicon glyphicon-remove" style="color: rgb(228, 82, 94);" title="verivikasi"></span>
                            <?php } ?>
                          </div>
                        </div>
                       
                        <!-- <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                          <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul> -->
                      
                    </div>
                  </div>
                </li>
                <?php } 
                $id++;
                ?>
              <?php } ?> 
            </ul>
        </div> 
  </div>
</div>
</div>

    <script type="text/javascript">
    $(function(){
      //refreshTable();

      function refreshTable(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url()?>index.php/m_activity_open_c/read/<?php echo $student; ?>",
          success: function(data){
            debugger;
                  $('section#konten').html(data);
            //$("#data").html(html);
          }
        });
      }
      
      $("#update-data form").on('submit',function(e){
        
        e.preventDefault();
        $.ajax({
        type: "POST",
        url: "<?php echo base_url()?>index.php/m_activity_open_c/read/<?php echo $student; ?>",
        data: $('form.form-horizontal').serialize(),
          success: function(response){
            swal("Berhasil!", "Data berhasil di update", "success");
            //$('#tabel').append(response);

            //$('#edit-data').modal('hide');
            refreshTable();
            //$("#data-aktivitas").replaceWith($('#data-aktivitas', $(html)));

            
          },
          error: function(){
            swal("Gagal!", "ada kesalahan", "error");
          } 
        });
      });
    });
  </script>