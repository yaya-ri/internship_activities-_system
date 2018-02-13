<div class="profile-admin">
            <div class="col-md-12" >
        <br>     
       <?php foreach ($admin as $a) { ?>
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $a->admin_name; ?></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url()?>/assets/gambar/<?php echo $a->admin_profile; ?>" height="200" width="200  " class="img-circle"><br><br> 
                    <button data-toggle="modal" data-target="#update-profile" type="button" class="btn btn-default btn-sm btn-block">Update Foto Profil</button>
                    </div>
                    <div class=" col-md-9 col-lg-9 "> 
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Username:</td>
                            <td><?php echo $a->admin_username; ?> </td>
                          </tr>
                          <tr>
                            <td>Nama:</td>
                            <td><?php echo $a->admin_name; ?> </td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="?php echo $a->mentor_email; ?>"> <?php echo $a->admin_email; ?></a></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- <div class="col-md-12">
                      <div class="text-right">
                            
                            <a href="<?php echo base_url('index.php/m_profile_edit_c/')?>" class="btn btn-warning btn-s">Edit Profile</a>
                          </div>
                    </div> -->
                    
                  </div>
                <?php } ?>
            </div>
          </div>
        </div>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="update-profile" class="modal fade"  >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Profile</h4>
            </div>

            <form class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" action="<?php echo base_url('index.php/admin/a_profile_c/update_profile'); ?>" >
              <div class="modal-body">
                <div class="responsive">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Foto Profile:</label>
                        <div class="col-sm-10">
                            <div class="row">
                              <div class="col-sm-5">
                                  <input name="userfile"  type="file" class="file" onchange="loadFile(event)"><br>
                                  <img id="output" height="100" width="100"/>
                                </div>
                          </div>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                      <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                  </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<script>
      var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
      };
</script>
