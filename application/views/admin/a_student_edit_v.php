<!-- Modal Ubah -->

		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
		                <h4 class="modal-title">Ubah Data</h4>
		            </div>

		            <form class="form-horizontal">
			            <div class="modal-body">
			            	<div class="responsive">
			                    <div class="form-group">
			                    <br>
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Username</label>
				                        <div class="col-lg-10">
				                        	<input type="hidden" id="sid" name="sid">
				                            <input type="text" class="form-control" id="susername" name="susername" placeholder="username" required="true">
				                        </div>
			                        </div>
			                    </div>

			                   <!--  <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Password</label>
				                        <div class="col-lg-10">
				                            <input type="password" class="form-control" id="spassword" name="spassword" placeholder="password">
				                        </div>
				                    </div>    
			                    </div> -->
      						
			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">First Name</label>
				                        <div class="col-lg-10">
				                        	<input type="text" class="form-control" id="sfirstname" name="sfirstname" placeholder="first Name" required="true"></input>
				                        </div>
				                    </div>
			                    </div>

			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Last Name</label>
				                        <div class="col-lg-10">
				                        	<input type="text" class="form-control" id="slastname" name="slastname" placeholder="Last Name" required="true"></input>
				                        </div>
				                    </div>
			                    </div>

			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Email</label>
				                        <div class="col-lg-10">
				                        	<input type="text" class="form-control" id="semail" name="semail" placeholder="Email" required="true"></input>
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
		<!-- END Modal Ubah -->

	<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#sid').attr("value",div.data('sid'));
            modal.find('#susername').attr("value",div.data('susername'));
            // modal.find('#spassword').attr("value",div.data('spassword'));
            modal.find('#sfirstname').attr("value",div.data('sfirstname'));
            modal.find('#slastname').attr("value",div.data('slastname'));
            modal.find('#semail').attr("value",div.data('semail'));            
        	});
    	});
	</script>

	<script type="text/javascript">
		$(function(){
			refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/admin/a_student_management_c/')?>",
					success: function(data){
						//debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}
			
			$("#edit-data form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/admin/a_student_management_c/update_form/')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						swal("Berhasil!", "Data berhasil di diupdate", "success");
						//$('#tabel').append(response);

						$('#edit-data').modal('hide');
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

	

	

