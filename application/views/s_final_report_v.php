<link href="<?php echo base_url();?>assets/css/s_final_report.css" rel="stylesheet" type="text/css">

<div class="page-content">

	        <!-- Page tabs -->
			<div class="responsive"> <br/>
			    <div class="row">

			    	<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
							<div class="panel-body">

			<!-- Breadcrumbs line -->
								<div class="breadcrumb-line">
									<ul class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active">Final Project</li>
									</ul>

									<div class="visible-xs breadcrumb-toggle">
										<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
									</div>
								</div>
			<!-- /breadcrumbs line -->
								<?php echo form_open_multipart('s_final_report_c/do_upload');?>
								<?php foreach ($mg_project as $a) { ?>
									<div class="col-md-12">
									    <label class="control-label">Select File</label>
									    <?php if(isset($a->project_final_report)){ ?>
	    									<input id="input-1a" type="file" class="file" name="userfile" data-show-preview="false" size="200"><br>
	    									<img src="<?php echo base_url(); ?>/assets/gambar/file.png" " height="100" width="100"/><br>
											<div class="col-md-offset-11">
												<input type="submit" value="upload" class="btn btn-primary">
											</div>
										<?php }else{ ?>
											<input id="input-1a" type="file" class="file" name="userfile" data-show-preview="false" size="200" onchange="loadFile(event)"><br>
	    									<img id="output" height="100" width="100"/><br>
											<div class="col-md-offset-11">
												<input type="submit" value="upload" class="btn btn-primary">
											</div>
										<?php } ?>
									</div>
								<?php } ?>
								</form>

							</div>
						</div>
					</div>  
				</div>
			</div>           

		</div>

		<script>
		  var loadFile = function(event) {
		    var output = document.getElementById('output');
		    output.src = URL.createObjectURL(event.target.files[0]);
		  };
		</script>