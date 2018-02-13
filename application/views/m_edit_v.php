<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detail" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">

		            <div class="modal-header">
		                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
		                <h4 class="modal-title">Deskripsi projek</h4>
		            </div>
		            	<br>
		            		<!-- <div id="description" name="description"></div> -->
								<form class="form-horizontal form-bordered">
											<div class="form-group">
												<div class="col-md-12">
										            <label class="col-lg-2 col-sm-2 control-label">Judul:</label>
										            <div class="col-sm-10">
										            	<input type="text"  id="judul" name="judul" class="form-control" disabled>
										            </div>
										        </div>
									        </div>
									        <div class="form-group">
									        	<div class="col-md-12">
										            <label class="col-sm-2 control-label">Lama Pengerjaan:</label>
										            <div class="col-sm-10">
										                <div class="row">
										                	<div class="col-sm-4">
										                    	<input type="date" id="mulai" name="mulai" class="form-control" disabled>
										                    	<span class="help-block">Tanggal mulai</span>
										                    </div>
										                	<div class="col-sm-4">
										                    	<input type="date" id="selesai" name="selesai" class="form-control" disabled>
										                    	<span class="help-block text-center">Tanggal selesai</span>
										                    </div>
										            	</div>
										            </div>
										        </div>
									        </div>
									        
									        <div class="form-group">
									        	<div class="col-md-12">
										            <label class="col-sm-2 control-label">Deskripsi:</label>
										            <div class="col-sm-10">
										            	<textarea rows="5" id="deskripsi" cols="5" name="deskripsi" class="form-control" disabled></textarea>
										            </div>
										        </div>
									        </div>
								</form>

		                        <!-- <div class="form-actions text-right">
		                        	<input type="submit" value="Submit form" class="btn btn-primary">
		                        </div> -->
		            	<br>
		            </div>
		        </div>
		    </div>
		</div>
		
		<!-- modal nilai --> <!-- kurang bagian tombol simpan nilai -->
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="nilai-modal" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">

		            <div class="modal-header">
		                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
		                <h4 class="modal-title">Nilai</h4>
		            </div>
		            	<br>
		            		<!-- <div id="description" name="description"></div> -->
								<form class="form-horizontal form-bordered">
										<div class="form-group">
											<div class="col-md-12">
									            <label class="col-lg-2 col-sm-2 control-label">Pengetahuan:</label>
									            <div class="col-sm-10">
									            	<input type="text"  id="knowledge" name="knowledge" class="form-control" >
									            	<input type="hidden"  id="id-nilai" name="id-nilai" class="form-control" >
									            </div>
									        </div>
								        </div>
								        <div class="form-group">
											<div class="col-md-12">
									            <label class="col-lg-2 col-sm-2 control-label">Ketepatan Waktu:</label>
									            <div class="col-sm-10">
									            	<input type="text"  id="due" name="due" class="form-control" >
									            </div>
									        </div>
								        </div>
								        <div class="form-group">
											<div class="col-md-12">
									            <label class="col-lg-2 col-sm-2 control-label">Etika:</label>
									            <div class="col-sm-10">
									            	<input type="text"  id="ethic" name="ethic" class="form-control" >
									            </div>
									        </div>
								        </div>
								        <div class="form-group">
											<div class="col-md-12">
									            <label class="col-lg-2 col-sm-2 control-label">Inisiatif:</label>
									            <div class="col-sm-10">
									            	<input type="text"  id="inisiative" name="inisiative" class="form-control" >
									            </div>
									        </div>
								        </div>
								         <div class="form-group">
											<div class="col-md-12">
									            <label class="col-lg-2 col-sm-2 control-label">Kedisiplinan:</label>
									            <div class="col-sm-10">
									            	<input type="text"  id="discipline" name="discipline" class="form-control" >
									            </div>
									        </div>
								        </div>

								        <div class="form-group">
											<div class="col-md-12">
									            <label class="col-lg-2 col-sm-2 control-label">total nilai:</label>
									            <div class="col-sm-10">
									            	<input type="text"  id="total" name="total" class="form-control" disabled>
									            </div>
									        </div>
								        </div>
								        <div class="modal-footer">
						                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
						                    <button type="button" class="btn btn-danger glyphicon glyphicon-floppy-save" data-dismiss="modal" title="Simpan PDF"></button>
						                </div>
								</form>
		            	<br>
		            </div>
		        </div>
		    </div>
		</div>

		<script>
		    $(document).ready(function() {
		        // Untuk sunting
		        $('#detail').on('show.bs.modal', function (event) {
		            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
		            var modal          = $(this)

		            // Isi nilai pada field
		            modal.find('#id').attr("value",div.data('id'));
		            modal.find('#judul').attr("value",div.data('judul'));
		            modal.find('#mulai').attr("value",div.data('mulai'));
		            modal.find('#selesai').attr("value",div.data('selesai'));
		            modal.find('#deskripsi').html(div.data('deskripsi'));           
		        });
		    });
		</script>

		<script>
		    $(document).ready(function() {
		        // Untuk sunting
		        $('#nilai-modal').on('show.bs.modal', function (event) {
		            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
		            var modal          = $(this)

		            // Isi nilai pada field
		            modal.find('#id-nilai').attr("value",div.data('id-nilai'));
		            modal.find('#knowledge').attr("value",div.data('knowledge'));
		            modal.find('#due').attr("value",div.data('due'));
		            modal.find('#ethic').attr("value",div.data('ethic'));
		            modal.find('#inisiative').attr("value",div.data('inisiative'));
		            modal.find('#discipline').attr("value",div.data('discipline'));
		            modal.find('#total').attr("value",div.data('total'));
		            //modal.find('#deskripsi').html(div.data('deskripsi'));           
		        });
		    });
		</script>

	<script type="text/javascript">
		$(function(){
			refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/m_magang_c/')?>",
					success: function(data){
						debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}
			
			$("#nilai-modal form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/m_nilai_edit_c/update_form/')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						swal("Berhasil!", "Data berhasil di diupdate", "success");
						//$('#tabel').append(response);

						$('#nilai-modal').modal('hide');
						refreshTable();
						//$("#data-aktivitas").replaceWith($('#data-aktivitas', $(html)));

						
					},
					error: function(){
						swal("Gagal!", "ada kesalahan", "error");
						refreshTable();
					}	
				});
			});
		});
	</script>
