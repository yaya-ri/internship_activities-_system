<?php $id; ?>
<div class="page-content">
<br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Management Magang</b></h3>
  </div>
  <div class="panel-body"><br>
  <div class="col-md-1">
  	<button data-toggle="modal" data-target="#add-management" title="tambah mentor untuk mahasiswa" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> tambah</button>
  </div><br><br><br><br>
  	<div class="col-md-12">
  		<div id="search-mentor">
	  		<form class="form-horizontal" role="form">
	  			<div class="col-md-11">
	  				<!-- <select name="nama" class="form-control" id="id">
	  				<?php foreach ($student as $a) { ?>	
	  					<option value="<?php echo $a->student_id; ?>"><?php echo $a->student_first_name?> </option>
	  					<?php  $id = $a->student_id; ?>
	  				<?php } ?>
	  				</select> -->
	  				
	  			</div>
	  			<!-- <div class="col-md-1"> -->
	  			<!-- 	<button type="submit" class="btn btn-primary" title="cari mentor">Cari</button> -->
	  			<!-- </div> -->
	  				
	  				
	  		</form>
  		</div>
  		
  	</div><br><br><br>
  	<div class="col-md-12">
	    <table class="table table-striped custab" id="tabel">
	    <thead>
	        <tr>
	            <th class="text-center">No</th>
	            <th>Mahasiswa (Username)</th>
	            <th>Mentor</th>
	            <th class="text-center">Status</th>	            
	        </tr>
	    </thead>
	    	<tbody id="data">
				<?php $this->load->view('admin/a_internship_management_table_v') ?>		    
	    	</tbody>		            
	    </table>
  	</div>
  </div>
</div>
</div>
<?php $this->load->view('admin/a_internship_management_add_v'); ?>

<script type="text/javascript">
	$(function(){
		//refreshTable();

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
		
		$("#search-mentor form").on('submit',function(e){
			
			e.preventDefault();

			$.ajax({
			type: "POST",
			url: "<?php echo base_url('index.php/admin/a_internship_management_c/set_id')?>",
			data: $('form.form-horizontal').serialize(),
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

