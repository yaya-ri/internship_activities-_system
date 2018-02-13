<!-- <script type="text/javascript">

	function download(id) {
		
    if (confirm("hapus?")) {
        $.ajax({
            url: "<?php echo base_url('index.php/m_downloadn_project_c/')?>",
            type: "POST",
            data: {id:id},
            success: function () {
                swal("Berhasil!", "Data berhasil di hapus", "success");
                //refreshTable();
            },
            error: function () {
                swal("Error!", "ada kesalahan", "error");
            }
        });
    } else {
        swal("Gagal!", "gagal menghapus", "error");
    }
}
</script> -->

<div class="page-content"><br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel primary</h3>
  </div>
  <div class="panel-body">
    <div class="table-responsive">

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
						
			    
			    <table class="table table-striped custab" id="tabel">
			    <thead>
			        <tr>
			            <th class="text-center">No</th>
			            <th>Nama</th>
			            <th>Judul</th>
			            <th>Instansi</th>
			            <th class="text-center">Tanggal Mulai</th>
			            <th class="text-center">Tanggal Selesai</th>
			            <th class="text-center">Aksi</th>
			        </tr>
			    </thead>
			    	<tbody id="data">
						<?php $this->load->view('m_table_v') ; ?>			    
			    	</tbody>		            
			    </table>
			  
			</div>


	        
		</div>

		<!-- Modal detail -->
		
		
  </div>
</div>

<?php $this->load->view('m_edit_v') ; ?>
           
		<!-- END Modal Ubah -->

