<div class="page-content">


			<!-- /breadcrumbs line -->


	        <!-- Page tabs -->
           <div class="table-responsive">
			    
			    <table class="table table-striped custab">
			    <thead>
			        <tr>
			            <th>No</th>
			            <th>Aktivitas</th>
			            <th>Status</th>
			            <th>Verivikasi</th>
			            <th>Tanggal</th>
			            <th class="text-center">Action</th>
			        </tr>
			    </thead>
			    
			    <?php $no=1;
			    foreach ($mg_activity as $a) { 
			    if($a->activity_verification==0){	
			    	$verivikasi="belum Verifitasi";
			    }else{
			    	$verivikasi="Terverifikasi";
			    }
			    ?>
			            <tr>
			            	
			                <td><span class="span-email caption"><?php echo $no++?></span><input type="number" value<?php echo $no++?>input></td>
			                <td><?php echo $a->activity_name;?></td>
			                <td><?php echo $a->activity_status;?></td>
			                <td><?php echo $verivikasi; ?></td>
			                <td><?php echo $a->activity_date;?></td>
			                <td class="text-center">
			                	<?php echo anchor('s_mention_activity_c/read/'.$a->activity_id, 'Buka', array('class' => 'btn btn-info btn-xs')); ?>
			                	<?php echo anchor('s_activity_edit_c/edit_form/'.$a->activity_id, 'Edit', array('class' => 'btn btn-danger btn-xs')); ?>
			                	

			                	<!--<a href="" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Edit</a>-->
			                </td>
			            </tr>
			    <?php  } ?>			            
			    </table>
			  
			</div>


	        <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left"><a href="http://themeforest.net/user/Kopyov"></a></div>
	        	<div class="pull-right icons-group">
	        		<a href="#"><i class="icon-screen2"></i></a>
	        		<a href="#"><i class="icon-balance"></i></a>
	        		<a href="#"><i class="icon-cog3"></i></a>
	        	</div>
	        </div>
	        <!-- /footer -->

	        
		</div>

		<script type="text/javascript">
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
		</script>