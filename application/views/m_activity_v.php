<div class="page-content"><br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Aktivitas Mahasiswa Magang</b></h3>
  </div>
  <div class="panel-body">
  		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="task_list.html">Task manager</a></li>
				<li class="active">Task list</li>
			</ul>

			<div class="visible-xs breadcrumb-toggle">
				<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
			</div>
		</div>
    	<div class="responsive">
			        <div class="row">
			        <ul class="thumbnails">
			        <?php foreach ($md_student as $a ) { ?>
			            <div class="col-md-2 col-sm-2">
			                <div class="thumbnail">
			                    <img src="http://millennialchild.com/CDCatalog/Resources/ClassPlays_files/placeholder.png" alt="ALT NAME" class="img-responsive" />
			                    
			                    <div class="caption">
			                         <h4><?php echo $a->project_title; ?></h4>
			                        <p><?php echo $a->project_description; ?></p>
			                        <p align="center"><?php echo anchor('m_activity_open_c/read/'.$a->student_id, 'Buka', array('class' => 'btn btn-primary btn-block')); ?>
			                        </p>


			                    </div>
			                    
			                </div>
			            </div>
			            <?php } ?>
			        </ul>
			    </div>
			</div>
  </div>
</div>
			
			    
            <!-- /page tabs -->
</div>