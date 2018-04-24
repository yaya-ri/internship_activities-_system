
<div class="page-content">
<br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Rencana Pengerjaan</b></h3>
  </div>
  <div class="panel-body">

  <div class="breadcrumb-line">
  	<ul class="breadcrumb">
  		<li><a href="#">Home</a></li>
  		<li class="active">Rencana Pengerjaan</li>
  	</ul>

  	<div class="visible-xs breadcrumb-toggle">
  		<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
  	</div>
  </div>

	<?php $value=0; foreach ($progress as $a) {
		if(isset($a->progress_id)){ 
			$value++;
		}
	} ?>
			<!-- <div class="progress">
			  <div id="progress-bar" class="progress-bar progress-bar-striped active text-center" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> </div>
			</div>  -->

			<label class="label label-default" style="font-size: 13px">Step Pengerjaan Projek: </label><br><br>

			<form class="panelBody col-md-8" id="panelBody1" method="POST" action="<?php echo base_url('index.php/s_progress_c/update'); ?>">
				<?php $v=100/$value; foreach ($progress as $a) { ?>
					<?php if(!empty($a->progress_id)){ ?>
						<input id="progress_p" type="checkbox" class="progressbar_chkbox" name="progress[]" value="<?php echo $a->progress_id;?>" <?php if($a->progress_status==1){?> checked <?php } ?> ><?php echo $a->progress_name ?>
						</input><br>
					<?php } else{ ?>
					<p>belum ada</p>
				<?php } }?>

			    <div class="">
			    	<button class="btn btn-info glyphicon" title="Simpan"><span>Simpan</span></button>
			    </div>
			</form>
			<div id="input-step">
				<div class="col-md-4">
					<form class="form-horizontal" id="form-step">
						<input type="text" name="step" placeholder="masukan step" required="true">
						<button class="btn btn-warning  glyphicon glyphicon-plus" title="tambah step" type="submit"></button>
					</form>
				</div>
				
			</div>

			<!-- /progres -->

  </div>
</div>

<!-- <script type="text/javascript">
	jQuery(document).ready(function() {
	  jQuery('.progressbar_chkbox').on('click', function() {
	    var currValue = 0;
	    
	    jQuery(".progressbar_chkbox:checked").each(function() {
	    	currValue += parseInt($(this).val());
	    });
	    
	    currValue = Math.min(currValue, 100);
	    
	    jQuery('#progress-bar').css('width', currValue + '%').attr('aria-valuenow', currValue);
	  });
	});
</script> -->

<script type="text/javascript">
		$(function(){
			//refreshTable();

			function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/s_progress_c')?>",
					success: function(data){
						debugger;
            			$('section#konten').html(data);
					}
				});
			}
			
			$("#input-step").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/s_progress_c/input_form/')?>",
				data: $('#form-step').serialize(),
					success: function(response){
						swal("Berhasil!", "Data berhasil di update", "success");
						refreshTable();
					},
					error: function(){
						swal("Gagal!", "ada kesalahan", "error");
					}	
				});
			});
		});
	</script>