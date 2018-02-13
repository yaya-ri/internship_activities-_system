<script type="text/javascript">

  function refreshTable(){
        $.ajax({
          type: "get",
          url: "<?php echo base_url('index.php/m_profile_edit_c/')?>",
          success: function(data){
            debugger;
                  $('section#konten').html(data);
            //$("#data").html(html);
          }
        });
      }

  function editTable(id) {
        $.ajax({
            url: "<?php echo base_url('index.php/m_profile_edit_c/')?>",
            type: "POST",
            data: {id:id},
            success: function () {
                // swal("Berhasil!", "Data berhasil di dihapus", "success")
                refreshTable();
            },
            error: function () {
                swal("Gagal!", "ada kesalahan", "error");
            }
        });
}
</script>

<div class="profile-admin">
            <div class="col-md-12" >
        <br>     
       <?php foreach ($md_mentor as $a) { ?>
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $a->mentor_first_name." ".$a->mentor_last_name ?></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url()?>/assets/gambar/<?php echo $a->mentor_profile; ?>" height="200" width="200  " class="img-circle"><br><br> 
                    <button data-toggle="modal" data-target="#update-profile" type="button" class="btn btn-default btn-sm btn-block">Update Foto Profil</button>
                    </div>
                    <div class=" col-md-9 col-lg-9 "> 
                      <table class="table table-user-information">
                        <tbody>
                      <tr>
                            <td>Department:</td>
                            <td>Programming</td>
                          </tr>
                          <tr>
                            <td>Tanggal Lahir:</td>
                            <td><?php echo $a->mentor_born_date; ?> </td>
                          </tr>
                          <tr>
                          <td>Jenis Kelamin:</td>
                            <td><?php echo $a->mentor_gender; ?></td>
                          </tr>
                          <tr>
                            <td>Alamat:</td>
                            <td><?php echo $a->mentor_place; ?></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="?php echo $a->mentor_email; ?>"> <?php echo $a->mentor_email; ?></a></a></td>
                          </tr>
                          <tr>
                            <td>Phone Number</td>
                            <td><?php echo $a->mentor_phone_number; ?></td>                           
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-12">
                      <div class="text-right">
                            
                            <button title="Edit" type="button" class="btn btn-warning" onclick="editTable(<?php echo $a->mentor_id;?>)"><div class="glyphicon glyphicon-edit"></div></button>
                          </div>
                    </div>
                    
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

            <form class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" action="<?php echo base_url('index.php/m_profile_edit_c/update_profile'); ?>" >
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