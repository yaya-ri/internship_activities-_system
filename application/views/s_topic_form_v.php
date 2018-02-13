<div class="page-content">


			<!-- Page header -->
			<!-- <div class="page-header">
				<div class="page-title">
					<h3>Form Topik Magang <small>Vertical, horizontal form layouts inside and outside panel</small></h3>
				</div>
				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<div class="date-range"></div>
					<span class="label label-danger">9</span>
				</div>
			</div> -->
			<!-- /page header -->

			<!--isi-->
			
			
			<!--/isi-->


			<!-- Breadcrumbs line -->
			<!-- <div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="forms.html">Forms</a></li>
					<li class="active">Form components</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

				
			</div> -->
			<!-- /breadcrumbs line -->


			<!-- Callout -->
			<!-- <div class="callout callout-danger fade in">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<h5>Form Topik Magang</h5>
				<p>Isi semua dengan lengkap dan sesuai aturan. jika masih bingung tanyakan kepada admin</p>
			</div> -->
            <!-- /callout -->


			<!-- Form bordered -->
			<br>
			<?php foreach ($md_student as $a) {?>
			<?php if(isset($a->student_id)){ ?>
				<form class="form-horizontal form-bordered" action="<?php echo base_url('index.php/s_topic_form_c/update_topic'); ?>" role="form" method="POST">
			<?php } else { ?>
			<form class="form-horizontal form-bordered" action="<?php echo base_url('index.php/s_topic_form_c/input_topic'); ?>" role="form" method="POST">
			<?php } ?>
	            <div class="panel panel-default">
	                <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i> Form Topik Magang</h6></div>
	                <div class="panel-body">
	                

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Judul:</label>
				            <div class="col-sm-10">
				            	<input type="text" name="judul" class="form-control" placeholder="Judul topik magang" value="<?php if(isset($a->project_title)){echo $a->project_title;} ?>">
				            </div>
				        </div>

				        <?php foreach ($md_student as $aa) {?>
					        <div class="form-group">
					            <label class="col-sm-2 control-label">Mentor 1:</label>
					            <div class="col-sm-10">
					            	<input type="text" name="mentor1" class="form-control" placeholder="<?php if(isset($aa->mentor_first_name)){ echo $aa->mentor_first_name; } ?>" readonly>
					            </div>
					        </div>
				        <? } ?>
				 

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Lama Pengerjaan:</label>
				            <div class="col-sm-10">
				                <div class="row">
				                	<div class="col-sm-4">
				                    	<input type="date" name="mulai" class="form-control" value="<?php if(isset($a->project_started)){ echo $a->project_started; } ?>">
				                    	<span class="help-block">Tanggal mulai</span>
				                    </div>
				                	<div class="col-sm-4">
				                    	<input type="date" name="selesai" class="form-control" value="<?php if(isset($a->project_expired)){ echo $a->project_expired; } ?>">
				                    	<span class="help-block text-center">Tanggal selesai</span>
				                    </div>
				            	</div>
				            </div>
				        </div>
				        
				        <div class="form-group">
				            <label class="col-sm-2 control-label">Deskripsi:</label>
				            <div class="col-sm-10">
				            	<textarea rows="5" cols="5" name="deskripsi" class="form-control" placeholder="Deskripsi topik yang akah dikerjakan" value=""><?php if(isset($a->project_description)){ echo $a->project_description;  }?></textarea>
				            </div>
				        </div>

                        <div class="form-actions text-right">
                        	<input type="submit" value="Submit form" class="btn btn-primary">
                        </div>
                    <?php break; } ?>

				    </div>
				</div>
			</form>
			<!-- /form striped -->


	        <!-- Footer -->
	        <!-- <div class="footer clearfix">
		        <div class="pull-left">&copy; 2013. Londinium Admin Template by <a href="http://themeforest.net/user/Kopyov">Eugene Kopyov</a></div>
	        	<div class="pull-right icons-group">
	        		<a href="#"><i class="icon-screen2"></i></a>
	        		<a href="#"><i class="icon-balance"></i></a>
	        		<a href="#"><i class="icon-cog3"></i></a>
	        	</div>
	        </div> -->
	        <!-- /footer -->


		</div>