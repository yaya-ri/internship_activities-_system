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
				                        <label class="col-lg-2 col-sm-2 control-label">Aktivitas</label>
				                        <div class="col-lg-10">
				                        	<input type="hidden" id="id" name="id">
				                            <input type="text" class="form-control" id="aktivitas" name="aktivitas" placeholder="aktivitas">
				                        </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
				                        <div class="col-lg-10">
				                            <input type="date" class="form-control" id="pengerjaan" name="pengerjaan" placeholder="tanggal">
				                        </div>
				                    </div>    
			                    </div>

			                    <!-- <div>
			                     <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Status</label>
				                        <div class="col-lg-10">
				                            <input type="date" class="form-control" id="status" name="status">
				                        </div>
				                    </div>    
			                    </div
								-->

							<div class="form-group">
								<div class="col-md-12">
							      <label for="select" class="col-lg-2 control-label">Status</label>
							      	<div class="col-lg-10">
								        <select class="form-control" id="status" name="status">
								          <option>To Do</option>
								          <option>Doing</option>
								          <option>Review</option>
								          <option>Done</option>
								        </select>
							    	</div>    
						    	</div>
      						</div> 
      						
			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
				                        <div class="col-lg-10">
				                        	<textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="deskripsi"></textarea>
				                        </div>
				                    </div>
			                    </div>

			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Kendala</label>
				                        <div class="col-lg-10">
				                        	<textarea class="form-control" id="kendala" name="kendala" rows="4" placeholder="Kendala"></textarea>
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
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#status').attr("value",div.data('status'));
            modal.find('#aktivitas').attr("value",div.data('aktivitas'));
            modal.find('#pengerjaan').attr("value",div.data('pengerjaan'));
            modal.find('#deskripsi').html(div.data('deskripsi'));
            modal.find('#kendala').html(div.data('kendala'));            
        	});
    	});
	</script>

	<script type="text/javascript">
		$(function(){
			refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/s_activity_c/doing')?>",
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
				url: "<?php echo base_url('index.php/s_activity_edit_c/update/')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						swal("Berhasil!", "Data berhasil di update", "success");
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

	

	

