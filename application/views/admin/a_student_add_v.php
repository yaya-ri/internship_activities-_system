<!-- Modal Ubah -->

		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-data" class="modal fade">
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
				                        	<input type="hidden" id="id" name="id">
				                            <input type="text" class="form-control" id="username" name="username" placeholder="username" required="true">
				                        </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Password</label>
				                        <div class="col-lg-10">
				                            <input type="password" class="form-control" id="password" name="password" placeholder="password" required="true">
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

	<script type="text/javascript">
		$(function(){
			refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/admin/a_student_management_c/')?>",
					success: function(data){
						debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}
			
			$("#add-data form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/admin/a_student_management_c/add_data')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						swal("Berhasil!", "Data berhasil di diupdate", "success");
						//$('#tabel').append(response);

						$('#add-data').modal('hide');
						refreshTable();
						//$("#data-aktivitas").replaceWith($('#data-aktivitas', $(html)));

						
					},
					error: function(){
						swal("Gagal!", "Username sudah digunakan!!", "error");
					}	
				});
			});
		});
	</script>

	

	

