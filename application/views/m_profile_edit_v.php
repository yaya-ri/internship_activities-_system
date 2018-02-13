<div class="page-content">
<br>
	<div id="update-data">		
			<!-- Form bordered -->
		<form class="form-horizontal form-bordered" role="form" enctype="multipart/form-data">
	        <div class="panel panel-default">
	            <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i> Form Edit Profile</h6></div>
	            <div class="panel-body">

	            <div class="breadcrumb-line">
	            	<ul class="breadcrumb">
	            		<li><a href="index.html">Home</a></li>
	            		<li><a href="forms.html">Profile</a></li>
	            		<li class="active">Edit</li>
	            	</ul>

	            	<div class="visible-xs breadcrumb-toggle">
	            		<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
	            	</div>	
	            </div>

			<?php foreach ($md_mentor as $a) { ?>
			
					        

			        <div class="form-group">
			            <label class="col-sm-2 control-label">Nama Depan:</label>
			            <div class="col-sm-10">
			            	<div class="row">
			            		<div class="col-sm-5">
			            			<input type="text" name="nama_depan" class="form-control" placeholder="nama depan" value="<?php echo $a->mentor_first_name; ?>">
			            		</div>
			            	</div>
			            </div>
			        </div>

			        <div class="form-group">
			            <label class="col-sm-2 control-label">Nama belakang:</label>
			            <div class="col-sm-10">
			                <div class="row">
			                	<div class="col-sm-5">
			                    	<input type="text" name="nama_belakang" class="form-control" placeholder="nama" value="<?php echo $a->mentor_last_name; ?>">
			                    </div>
			            	</div>
			            </div>
			        </div>
			        
			        <div class="form-group">
			        <label class="col-sm-2 control-label">Tanggal lahir:</label>
			            <div class="col-sm-10">
			                <div class="row">
			                	<div class="col-sm-5">
			                    	<input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal lahir" value="<?php echo $a->mentor_born_date; ?>">
			                    </div>
			            	</div>
			            </div>
			        </div>

			        <div class="form-group">
			        <label class="col-sm-2 control-label">Alamat :</label>
			            <div class="col-sm-10">
			                <div class="row">
			                	<div class="col-sm-5">
			                    	<input type="text" name="alamat" class="form-control" placeholder="tempat lahir" value="<?php echo $a->mentor_place; ?>">
			                    </div>
			            	</div>
			            </div>
			        </div>

			        
			        <div class="form-group">
			        <label class="col-sm-2 control-label">Email:</label>
			            <div class="col-sm-10">
			                <div class="row">
			                	<div class="col-sm-5">
			                    	<input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $a->mentor_email; ?>">
			                    </div>
			            	</div>
			            </div>
			        </div>

			        <div class="form-group">
			        	<label class="col-sm-2 control-label">Nomer HP / Telfon:</label>
			            <div class="col-sm-10">
			                <div class="row">
			                	<div class="col-sm-5">
			                    	<input type="text" name="nomer" class="form-control" placeholder="nomer hp / telfon" value="<?php echo $a->mentor_phone_number; ?>" >
			                    </div>
			            	</div>
			            </div>
			        </div>

			       <!--  <div class="form-group">
			        	<label class="col-sm-2 control-label">Profil:</label>
			            <div class="col-sm-10">
			                <div class="row">
			                	<div class="col-sm-5">
			                    	<input name="userfile"  type="file" class="file" onchange="loadFile(event)"><br>
			                    	<img id="output" height="100" width="100"/>
			                    </div>
			            	</div>
			            </div>
			        </div> -->

			    <?php } ?>    


	                <div class="form-actions text-right">
	                	<input type="submit" value="Submit form" class="btn btn-primary">
	                </div>

			    </div>
			</div>
		</form>
	</div>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

    <script type="text/javascript">
		$(function(){
			//refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/m_profile_c')?>",
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
				url: "<?php echo base_url('index.php/m_profile_edit_c/update_form/')?>",
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
