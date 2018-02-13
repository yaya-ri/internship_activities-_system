<div class="page-content">
	<div id="input-activity">
				<!-- Form bordered -->
		<br>
		<form class="form-horizontal form-bordered" role="form">
	        <div class="panel panel-default">
	            <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i> Form Aktivitas Magang</h6></div>
	            <div class="panel-body">

			        

			        <div class="form-group">
			            <label class="col-sm-2 control-label">Aktivitas:</label>
			            <div class="col-sm-10">
			            	<input type="text" name="aktivitas" class="form-control" placeholder="Aktivitas Harian" required="true">
			            </div>
			        </div>

			        <div class="form-group">
			            <label class="col-sm-2 control-label">Tanggal Pengerjaan:</label>
			            <div class="col-sm-10">
			                <div class="row">
			                	<div class="col-sm-4">
			                    	<input type="date" placeholder="tanggal pengerjaan" name="pengerjaan" class="form-control" required="true">
			                    </div>
			            	</div>
			            </div>
			        </div>
			        
			        <div class="form-group">
			            <label class="col-sm-2 control-label">Deskripsi:</label>
			            <div class="col-sm-10">
			            	<textarea rows="5" cols="5" name="deskripsi" class="form-control" placeholder="Deskripsi aktivitas yang dilakukan" required="true"></textarea>
			            </div>
			        </div>

			        <div class="form-group">
			            <label class="col-sm-2 control-label">Kendala/Masalah:</label>
			            <div class="col-sm-10">
			            	<textarea rows="5" name="kendala" cols="5" class="form-control" placeholder="Deskripsi masalah" required="true"></textarea>
			            </div>
			        </div>


	                <div class="form-actions text-right">
	                	<input type="submit" value="Submit form" class="btn btn-primary">
	                </div>

			    </div>
			</div>
		</form>
		<!-- /form striped -->
	</div>
</div>

<script type="text/javascript">
		$(function(){
			//refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/s_activity_form_c')?>",
					success: function(data){
						debugger;
            			$('section#konten').html(data);
						//$("#data").html(html);
					}
				});
			}
			
			$("#input-activity form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/s_activity_form_c/input_activity/')?>",
				data: $('form.form-horizontal').serialize(),
				//mimeType: "multipart/form-data",
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