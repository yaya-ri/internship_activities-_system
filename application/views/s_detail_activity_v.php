
<br>
<div class="page-content">
	<div id="detail-activity">
		<div class="row">
			<div class="col-md-12">			
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><b>Aktivitas Magang</b></h3>
				  </div>
				  <div class="panel-body">
					    <div class="breadcrumb-line">
							<?php foreach ($path as $b) { ?>
								<ul class="breadcrumb">
									<li><a>Home</a></li>
									<li><a>Aktivitas</a></li>
									<li><a><?php echo $b->student_first_name." ".$b->student_last_name; ?></a></li>
									<?php if($b->student_first_name!=null) break; ?>
							<?php } ?>
									<?php foreach ($description as $a) { ?>
									<li><?php echo $a->activity_name; ?></li>
									<?php break; } ?>											
								</ul>
								
							

							<div class="visible-xs breadcrumb-toggle">
								<a class="btn btn-link btn-lg btn-icon" description-toggle="collapse" description-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
							</div>
						</div>
						
						        <div class="responsive">
						        <?php foreach ($description as $a) { ?>
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
							        <?php break;} ?>
						        	</div>
						           	<br>
						           	     
								</div>
								<div class=" row">
									<div class="col-md-12" >
									
								<!-- form komentar -->
								<div id="komentar">
									<form class="form-horizontal" role="form">
					                    <div class="form-group">
					                    	<div class="col-md-12">
					                    		<div class="col-md-8  text-right">
					                    			<label class="label label-default" style="font-size: 15px; 
					                    			padding-bottom: -10% ;">Mentor: </label>
					                    		</div>
					                    		<div class="col-md-4  text-right">
					                    		<select class="form-control" id="mentor" name="mentor">
					                    		    <?php foreach ($description as $b) { ?>
					                    		      <option><?php echo $b->mentor_first_name;	?></option>
					                    		    <?php } ?>  
					                    		</select>
											    </div>
						                    </div>
					                    </div>
					                    <?php foreach ($description as $c) {
					                    	$id_a = $c->activity_id;
					                     ?>
					                    	<input type="hidden" id="id" name="id" value="<?php echo $c->activity_id; ?>">
					                    <?php break; } ?>
					                    <div class="form-group">
					                    	<div class="col-md-12">
						                        	<textarea class="form-control" id="komentar" name="komentar" rows="4" placeholder="komentar"></textarea>
						                    </div>
					                    </div>

					                    <div class="text-right">
					                    	<button class="btn btn-info" type="submit">kirim</button><br><br>
					                    </div>
					                    
				                	
				                	</form>
				                </div>	




									</div>
								</div>
									<div class="col-md-12">	
										<div id="mention_chat">
									<?php foreach ($mention as $a) { 
										if ($a->mention_status==1){
										?>			
										
											<div class="row">
												<div  class="col-md-6">
													<div class="panel panel-default" style="margin: 1%">
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
										<?php } else { ?>
											<div class="row">
												<div  class="col-md-6 col-md-offset-6 col">
													<div class="text-right">
													<div class="panel panel-info" style="margin: 1%">
													  <div class="panel-heading">
													  	<div><b><?php echo $a->mentor_first_name?></b></div>
													  	<div><small><i><?php echo $a->mention_date; ?></i></small></div>
													  </div>
													  <div class="panel-body">
													    <?php echo $a->mention_chat; ?>
													  </div>
													</div>
													</div>
												</div>
											</div>
									
									<?php } } ?>
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
	</div>			<!-- Breadcrumbs line -->
			
</div>

<script type="text/javascript">
	$(function(){
		//refreshTable();

		function refreshTable(){
			$.ajax({
				type: "get",
				url: "<?php echo base_url()?>index.php/s_detail_activity_c/read/<?php echo $id_a; ?>",
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
			url: "<?php echo base_url('index.php/s_detail_activity_c/mentor_mention/')?>",
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