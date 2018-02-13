<script type="text/javascript">

	function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/s_activity_c/review')?>",
					success: function(data){
						debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}

	function hapus(id) {
		
    if (confirm("hapus?")) {
        $.ajax({
            url: "<?php echo base_url('index.php/s_activity_edit_c/delete/')?>",
            type: "POST",
            data: {id:id},
            success: function () {
                swal("Berhasil!", "Data berhasil di hapus", "success");
                refreshTable();
            },
            error: function () {
                swal("Error!", "ada kesalahan", "error");
            }
        });
    } else {
        swal("Gagal!", "gagal menghapus", "error");
    }
}
</script>

<div class="page-content">
<br>
<div class="panel panel-default">
  <div class="panel-heading"><h2 class="panel-title"> <b> Daftar Semua Aktivitas Review</b></h3></div>
  <div class="panel-body">
    <div class="breadcrumb-line">
			<?php foreach ($mg_activity as $b) { ?>
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="task_list.html">Aktivitas</a></li>
					<li class="active"><?php echo $b->student_first_name;
					echo " ";
					echo $b->student_last_name; ?></li>
				</ul>
				<?php if($b->student_first_name!=null) break; ?>
			<?php } ?>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
			<!-- /breadcrumbs line -->
			<!-- <style type="text/css">
				td {
					cursor: pointer;
				}.editor{
					display: none;
				}
			</style> -->


	        <!-- Page tabs -->
           <div class="table-responsive" id="data_aktivitas">
			    
			    <table class="table table-striped custab" id="tabel">
			    <thead>
			        <tr>
			            <th class="text-center">No</th>
			            <th >Aktivitas</th>
			            <th class="text-center">Status</th>
			            <th class="text-center">Verivikasi</th>
			            <th class="text-center">Tanggal</th>
			            <th class="text-center">Action</th>
			        </tr>
			    </thead>
			    <tbody id="data">
			    	<?php $this->load->view('s_activity_review_table_v') ?>
			    </tbody>		            
			    </table>
			  
			</div>
  </div>
</div>
			<!-- Breadcrumbs line -->
</div>
		<!-- <script type="text/javascript">
			$(function(){
				$.ajaxSetup({
					type:"post",
					cache:false,
					dataType: "json"
				});
				
				$(document).on("click","td",function(){
					$(this).find("span[class~='caption']").hide();
					$(this).find("input[class~='editor']").fadeIn().focus();
				});
			});
		</script> -->

		<?php $this->load->view('s_activity_review_edit_v'); ?>

		