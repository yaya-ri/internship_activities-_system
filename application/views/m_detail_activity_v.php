
<br>
<div class="page-content">
	<div id="detail_activity">
		<div class="row">
			<div class="col-md-12">			
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><b>Aktivitas Magang</b></h3>
				  </div>
				  <div class="panel-body">
					    <div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Aktivitas</a></li>
								<li class="active">detail</li>
							</ul>

							<div class="visible-xs breadcrumb-toggle">
								<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
							</div>
						</div>
						
						        <div class="responsive">
						        <?php foreach ($mg_activity as $a) { $id_a = $a->activity_id; ?>
						        	<div class="row">
							        	<div class=" col-md-12">
							        		<label class="control-label label label-info" style="font-size: 13px;">Deskripsi:</label>
							        			<div class=" col-md-12">
									        		<div><br>
									           			<?php echo $a->activity_description; ?>
									           		</div>
							           			</div>
							        	</div>
							        </div>
							        <br><br>
							        <div class="row">	
						        		<div class="col-md-12">
						        			<label class="label label-info" style="font-size: 13px;">Kendala:</label>
							        			<div class=" col-md-12">
								        			<div><br>
								           				<?php echo $a->activity_problem; ?>
								           			</div>
							           			</div>
						        		</div>
							       
						        	</div><br>
						        		<div class="col-md-12">
						        		<?php if($a->activity_verification == 0){ ?>
						        			<div class="col-md-1 col-md-offset-11 text-right">
						        				<button id="verifikasi" title="Verivikasi" type="button" class="btn btn-warning btn-s text-right" onclick="verifikasi(<?php echo $a->activity_id;?>)"><div class="glyphicon glyphicon-remove" style="padding: : 0%;"></div></button>
						        			</div>
						        		<?php } else { ?>
						        			<div class="col-md-1 col-md-offset-11 text-right">
						        				<button title="Batal verivikasi" type="button" class="btn btn-primary btn-s text-right"><div class="glyphicon glyphicon-ok" style="padding: : 0%;"></div></button>
						        			</div>
						        		<?php } ?>
						        			<br>
						        		</div>
						        		<!-- <label class="label label-default" style="font-size: 10px">Status: </label><br> -->
						           	<br><br>
						           	 <?php break;} ?>
								</div>
								<div class=" row">
								<div class="col-md-12" >
									
								<!-- form komentar -->
								<div id="komentar">
									<form class="form-horizontal" role="form">
					                    <?php foreach ($mg_activity as $c) { 
					                    	
					                    	?>
					                    	<input type="hidden" id="id" name="id" value="<?php echo $c->activity_id; ?>">
					                    <?php break; } ?>
					                    <div class="form-group">
					                    	<div class="col-md-12">
						                        	<textarea class="form-control" id="komentar" name="komentar" rows="6" placeholder="komentar"></textarea>
						                    </div>
					                    </div>

					                    <div class="text-right">
					                    	<button class="btn btn-info" type="submit">kirim</button>
					                    </div>                  	
				                	</form>
				                </div>
								</div>
								</div><br><br>
									<div class="col-md-12">	
									<div id="mention_chat">
									<?php foreach ($mg_student as $a) { 
										if ($a->mention_status==2){?>			
											<div class="row">
												<div  class="col-md-6">
													<div class="panel panel-default">
													  <div class="panel-heading">
													  		<div><b>saya</b></div>
													  		<div><small><i><?php echo $a->mention_date; ?></i></small></div>
													  </div>
													  <div class="panel-body">
													   	<?php echo $a->mention_chat; ?>
													  </div>
													</div>
												</div>
											</div>
										<?php } else if($a->mention_status==1){ ?>
											<div class="row">
												<div  class="col-md-6 col-md-offset-6 col">
													<div class="text-right">
													<div class="panel panel-info">
													  <div class="panel-heading">
													  	<?php echo $a->student_first_name?>
													  	<div><small><i><?php echo $a->mention_date; ?></i></small></div>
													  </div>
													  <div class="panel-body">
													    <?php echo $a->mention_chat; ?>
													  </div>
													</div>
													</div>
												</div>
											</div>
										
										<?php } 
										} ?>
										</div>
									</div>
							</div><br>
				
							
								
				
								
						        <!-- Footer -->
						     <!--    <div class="footer clearfix">
						        	<div class="pull-right icons-group">
						        		<a href="#"><i class="icon-screen2"></i></a>
						        		<a href="#"><i class="icon-balance"></i></a>
						        		<a href="#"><i class="icon-cog3"></i></a>
						        	</div>
						        </div> -->
					        <!-- /footer -->
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
		$(function(){
			//refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url()?>index.php/m_detail_activity_c/read/<?php echo $id_a; ?>",
					success: function(data){
						debugger;
            			$('section#konten').html(data);
						//$("#data").html(html);
					}
				});
			}
			
			$("#komentar form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/m_detail_activity_c/mentor_mention/')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						// swal("Berhasil!", "Data berhasil di update", "success");
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

	<script type="text/javascript">

		function refreshTable(){
					$.ajax({
						type: "get",
						url: "<?php echo base_url()?>index.php/m_detail_activity_c/read/<?php echo $id_a; ?>",
						success: function(data){
							debugger;
	            			$('section#konten').html(data);
							//$("#data").html(html);
						}
					});
				}

		function verifikasi(id) {
	    if (confirm("verivikasi?")) {
	        $.ajax({
	            url: "<?php echo base_url('index.php/m_detail_activity_c/update_status/')?>",
	            type: "POST",
	            data: {id:id},
	            success: function () {
	                swal("Berhasil!", "berhasil verifikasi", "success")
	                refreshTable();
	            },
	            error: function () {
	                swal("Gagal!", "ada kesalahan", "error");
	            }
	        });
	    } else {
	        swal("Gagal!", "data tidak terhapus", "error");
	    }
	}
	</script>