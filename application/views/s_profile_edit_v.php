<div class="page-content"><br>
		<div id="update-data">
			<!-- Form bordered -->
			<form class="form-horizontal form-bordered" method="POST" role="form" enctype="multipart/form-data">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i> Form Edit Profile</h6></div>
	                <div class="panel-body">

				<?php foreach ($md_student as $a) { ?>
				
						        

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Nama Depan:</label>
				            <div class="col-sm-10">
				            	<div class="row">
				            		<div class="col-sm-5">
				            			<input type="text" name="nama_depan" class="form-control" placeholder="nama depan" value="<?php echo $a->student_first_name; ?> " required="true">
				            		</div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Nama belakang:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="nama_belakang" class="form-control" placeholder="nama" value="<?php echo $a->student_last_name; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>
				        
				        <div class="form-group">
				        <label class="col-sm-2 control-label">Tanggal lahir:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal lahir" value="<?php echo $a->student_born_date; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				        <label class="col-sm-2 control-label">Tempat lahir:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="tempat_lahir" class="form-control" placeholder="tempat lahir" value="<?php echo $a->student_born_place; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				        <label class="col-sm-2 control-label">Alamat:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $a->student_address; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				        <label class="col-sm-2 control-label">Perguruan tinggi:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="perguruan_tinggi" class="form-control" placeholder="perguruan tiggi" value="<?php echo $a->student_collage; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				        <label class="col-sm-2 control-label">Jurusan:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="jurusan" class="form-control" placeholder="jurusan" value="<?php echo $a->student_concentration; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				        <label class="col-sm-2 control-label">Email:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $a->student_email; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				        <label class="col-sm-2 control-label">Sosial Media:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="sosial_media" class="form-control" placeholder="sosial media" value="<?php echo $a->student_social_media; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>

				        <div class="form-group">
				        <label class="col-sm-2 control-label">Nomer HP / Telfon:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-5">
				                    	<input type="text" name="nomer" class="form-control" placeholder="nomer hp / telfon" value="<?php echo $a->student_phone_number; ?>" required="true">
				                    </div>
				            	</div>
				            </div>
				        </div>
<!-- 
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
 -->
				    <?php } ?>    


                        <div class="form-actions text-right">
                        	<input type="submit" value="upload" class="btn btn-primary">
                        </div>

				    </div>
				</div>
			</form>

		</div>
</div>
	<!-- <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result).width(150)
                        .height(200);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> -->
  <!--   <script>
      var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
      };
    </script> -->

    <script type="text/javascript">
		$(function(){
			//refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/s_profile_c')?>",
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
				url: "<?php echo base_url('index.php/s_profile_edit_c/update_form/')?>",
				data: $('form.form-horizontal').serialize(),
				mimeType: "multipart/form-data",
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
