<script type="text/javascript">

	function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/admin/a_student_management_c/')?>",
					success: function(data){
						debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}

	function hapus(id) {
    if (confirm("hapus?"+id)) {
        $.ajax({
            url: "<?php echo base_url('index.php/admin/a_student_management_c/delete_form/')?>",
            type: "POST",
            data: {id:id},
            success: function (data) {
                swal("Berhasil!", "Data berhasil di dihapus", "success")
                refreshTable();
            },
            error: function () {
                swal("Gagal!", "ada kesalahan", "error");
            }
        });
    }
}
</script>

<script type="text/javascript">

	function refreshTable(){
				$.ajax({
					type: "get",
					url: "<?php echo base_url('index.php/admin/a_student_management_c/')?>",
					success: function(data){
						debugger;
            			$('tbody#data').html(data);
						//$("#data").html(html);
					}
				});
			}

	function reset(id) {
    if (confirm("Reset password?")) {
        $.ajax({
            url: "<?php echo base_url('index.php/admin/a_student_management_c/reset_pass/')?>",
            type: "POST",
            data: {id:id},
            success: function (data) {
                swal("Berhasil!", "Password berhasil di Reset", "success")
                refreshTable();
            },
            error: function () {
                swal("Gagal!", "ada kesalahan", "error");
            }
        });
    }
}
</script>

<div class="page-content"><br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Akun Mahasiswa</h3>
  </div>
  <div class="panel-body">
    <div class="table-responsive">

   				 <div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">akun mahasiswa</li>
					</ul>

					<div class="visible-xs breadcrumb-toggle">
						<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
					</div>
				</div>
				
				<div class="text-right">
					<button data-toggle="modal" title="tambar user" data-target="#add-data" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></button>
			    </div>

			    <table class="table table-striped custab" id="tabel">
			    <thead>
			        <tr>
			            <th class="text-center">No</th>
			            <th>Username</th>
			            <th>Password</th>
			            <th>Nama depan</th>
			            <th>Nama belakang</th>
			            <th>Email</th>
			            <th class="text-center">aksi</th>
			            
			        </tr>
			    </thead>
			    	<tbody id="data">
						<?php $this->load->view('admin/a_table_student_v') ; ?>			    
			    	</tbody>		            
			    </table>
			  
			</div>


	        
		</div>

		<!-- Modal detail -->
		
		
  </div>
</div>


<?php $this->load->view('admin/a_student_edit_v') ; ?>

<?php $this->load->view('admin/a_student_add_v') ; ?>           
		<!-- END Modal Ubah -->

