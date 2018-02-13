<?php $no=1;
			    foreach ($mg_project as $a) { 
			    
			    ?>
			            <tr>
			            	<td class="text-center"><?php echo $no; $no++; ?></td>
			            	<td><?php echo $a->student_first_name." ".$a->student_last_name; ?> </td>
			            	<td><?php echo $a->project_title; ?></td>
			            	<td>Universitas Islam Indonesia</td>
			            	<td class="text-center"><?php echo $a->project_started; ?></td>
			            	<td class="text-center"><?php echo $a->project_expired; ?></td>
			            	<td class="text-center">
			            		<a
			                		href="javascript:;"
			                		data-id="<?php echo $a->project_id; ?>"
			                		data-judul="<?php echo $a->project_title; ?>"
			                		data-mentor1=""
			                		data-mentor2 = ""
			                		data-mulai="<?php echo $a->project_started; ?>"
			                		data-selesai="<?php echo $a->project_expired; ?>"
			                		data-deskripsi="<?php echo $a->project_description; ?>"
			                		data-toggle="modal" data-target="#detail">
			                		<button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info  glyphicon glyphicon-eye-open" title="Detail"></button>			             
			                	</a>
			                	<a
			                		href="javascript:;"
			                		data-id-nilai="<?php echo $a->project_id; ?>"
			                		data-knowledge="<?php echo @$a->project_knowledge; ?>"
			                		data-due="<?php echo @$a->project_due_date; ?>"
			                		data-ethic="<?php echo @$a->project_work_ethic; ?>"
			                		data-inisiative="<?php echo @$a->project_inisiative; ?>"
			                		data-discipline="<?php echo @$a->project_discipline; ?>"
			                		<?php @$total= ($a->project_knowledge + $a->project_due_date + $a->project_work_ethic + $a->project_inisiative + $a->project_discipline) / 5?>
			                		data-total="<?php echo $total; ?>"
			                		data-toggle="modal" data-target="#nilai-modal">
			                		<button  data-toggle="modal" data-target="#ubah-data" class="btn btn-warning  glyphicon glyphicon-pencil" title="Nilai"></button>			             
			                	</a>
			                	<?php echo anchor('m_activity_open_c/read/'.$a->student_id, ' ', array('class' => 'btn btn-danger btn-xs, glyphicon glyphicon-pushpin','title'=>"Lihat aktitas")); ?>

			                	<!-- <button title="download <?php echo $a->project_final_report; ?>" type="button" class="btn btn-default" onclick="download(<?php echo $a->project_final_report; ?>)" ><div class="glyphicon glyphicon-download"></div></button>

			                	<a role="button" class="btn btn-default" href="<?php echo base_url(); ?>assets/final_project/<?php echo $a->project_final_report; ?>" title="<?php echo $a->project_final_report; ?>" download="final_project" ><i class="glyphicon glyphicon-download"></i></a> -->
			                	<?php if(!empty($a->project_final_report)) {?>
			                	<a role="button" class="btn btn-default" href="<?php echo base_url(); ?>assets/final_project/<?php echo $a->project_final_report; ?>" title="<?php echo $a->project_final_report; ?>"  ><i class="glyphicon glyphicon-download"></i></a>
			                	<?php } else { ?>
			                	<a role="button" class="btn btn-default disabled " title="projek belum diupload"  ><i class="glyphicon glyphicon-download"></i></a>
			                	<?php } ?>
			                
			                </td>
			            </tr>
			    <?php  } ?>	
