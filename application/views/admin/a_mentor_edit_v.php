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
				                        	<input type="hidden" id="mid" name="mid">
				                            <input type="text" class="form-control" id="musername" name="musername" placeholder="username" required="true">
				                        </div>
			                        </div>
			                    </div>

			                  <!--   <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Password</label>
				                        <div class="col-lg-10">
				                            <input type="password" class="form-control" id="mpassword" name="mpassword" placeholder="password">
				                        </div>
				                    </div>    
			                    </div> -->
      						
			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">First Name</label>
				                        <div class="col-lg-10">
				                        	<input type="text" class="form-control" id="mfirstname" name="mfirstname" placeholder="first Name" required="true"></input>
				                        </div>
				                    </div>
			                    </div>

			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Last Name</label>
				                        <div class="col-lg-10">
				                        	<input type="text" class="form-control" id="mlastname" name="mlastname" placeholder="Last Name" required="true"></input>
				                        </div>
				                    </div>
			                    </div>

			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Email</label>
				                        <div class="col-lg-10">
				                        	<input type="text" class="form-control" id="memail" name="memail" placeholder="Email" required="true"></input>
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
            modal.find('#mid').attr("value",div.data('mid'));
            modal.find('#musername').attr("value",div.data('musername'));
           
            modal.find('#mfirstname').attr("value",div.data('mfirstname'));
            modal.find('#mlastname').attr("value",div.data('mlastname'));
            modal.find('#memail').attr("value",div.data('memail'));            
        	});
    	});
	</script>

	<script type="text/javascript">
		$(function(){
			refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/admin/a_mentor_management_c/')?>",
					success: function(data){
						debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}
			
			$("#edit-data form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/admin/a_mentor_management_c/update_form/')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						swal("Berhasil!", "Data berhasil di diupdate", "success");
						//$('#tabel').append(response);

						$('#edit-data').modal('hide');
						refreshTable();
						//$("#data-aktivitas").replaceWith($('#data-aktivitas', $(html)));

						
					},
					error: function(){
						swal("Gagal!", "Username sudah dipakai!!", "error");
					}	
				});
			});
		});
	</script>

	

	

