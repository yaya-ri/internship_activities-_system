<!-- Modal Ubah -->

		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-management" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
		                <h4 class="modal-title">Tambahkan Mentor Untuk Mahasiswa</h4>
		            </div>

		            <form class="form-horizontal">
			            <div class="modal-body">
			            	<div class="responsive">
			                    <div class="form-group">
			                    <br>
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Student</label>
				                        <div class="col-lg-10">
				                        	<select name="student" id="student" class="form-control" required="true">
				                        	<option disabled selected value>-</option>
				                        		<!-- <option selected="true">-</option> -->
				                        	<?php foreach ($student as $a) { ?>
				                        		<option value="<?php echo $a->student_id?>"> <?php echo $a->student_username?> </option>
				                        	<?php } ?>
				                        	</select>
				                        </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                    <br>
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Mentor 1</label>
				                        <div class="col-lg-10">
				                        	<select name="mentor1" id="mentor1" class="form-control" required="true">
				                        	<!-- <option selected="true">-</option> -->
				                        	<option disabled selected value>-</option>
				                        	<?php foreach ($mentor as $a) { ?>	
				                        		<option value="<?php echo $a->mentor_id?>"> <?php echo $a->mentor_username?> </option>
				                        	<?php } ?>
				                        	</select>
				                        </div>
			                        </div>
			                    </div>
			                    <div class="form-group">
			                    <br>
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Mentor 2</label>
				                        <div class="col-lg-10">
				                        	<select name="mentor2" id="mentor2" class="form-control" required="true">
				                        	<option disabled selected value>-</option>
				                        	<!-- <option selected="true">-</option> -->
				                        	<?php foreach ($mentor as $a) { ?>	
				                        		<option value="<?php echo $a->mentor_id?>"> <?php echo $a->mentor_username?> </option>
				                        	<?php } ?>
				                        	</select>
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
					url: "<?php echo base_url('index.php/admin/a_internship_management_c/')?>",
					success: function(data){
						debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}
			
			$("#add-management form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/admin/a_internship_management_c/add_relation')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						swal("Berhasil!", "Berhasil", "success");
						//$('#tabel').append(response);

						$('#add-management').modal('hide');
						refreshTable();
						//$("#data-aktivitas").replaceWith($('#data-aktivitas', $(html)));

						
					},
					error: function(){
						swal("Gagal!", "Mentor 1 dan 2 harus beda", "error");
					}	
				});
			});
		});
	</script>

	

	

