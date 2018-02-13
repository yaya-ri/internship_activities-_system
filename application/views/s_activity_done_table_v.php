<div>
	<input type="hidden" id="id" name="id">
</div>
<?php $no=1;
foreach ($mg_activity as $a) { ?>
      <?php $x="Done";
       if($a->activity_status==$x){ ?>
        <tr>
            <td class="text-center"><?php echo $no++?></td>
            <td><?php echo $a->activity_name;?></td>
            <td class="text-center"><?php echo $a->activity_status;?></td>
            <td class="text-center"><?php if($a->activity_verification==1) { ?>
                    <span class="glyphicon glyphicon-ok" style="color:rgb(95, 111, 235); font-size:1.5em;" title="verivikasi"></span>
                <?php } else { ?>
                    <span class="glyphicon glyphicon-remove" style="color: rgb(228, 82, 94); font-size:1.5em;" title="verivikasi"></span>
                <?php } ?>
            </td>
            <td class="text-center"><?php echo $a->activity_date;?></td>
           
            <td class="text-center">
            	<?php echo anchor('s_detail_activity_c/read/'.$a->activity_id, ' ', array('class' => 'btn btn-primary btn-xs, glyphicon glyphicon-eye-open ','title'=>'lihat detail')); ?>
            	
            	<a
            		href="javascript:;"
            		data-id="<?php echo $a->activity_id; ?>"
            		data-aktivitas="<?php echo $a->activity_name; ?>"
            		data-status="<?php echo $a->activity_status; ?>"
            		data-deskripsi="<?php echo $a->activity_description; ?>"
            		data-kendala="<?php echo $a->activity_problem; ?>"
            		data-pengerjaan="<?php echo $a->activity_date; ?>"
            		data-toggle="modal" data-target="#edit-data">
            		<button title="edit" data-toggle="modal" data-target="#ubah-data" class="btn btn-info ">
            		<span class="glyphicon glyphicon-pencil"></span></button>			             
            	</a>
            	<button title="hapus" type="button" class="btn btn-danger" onclick="hapus(<?php echo $a->activity_id;?>)"><div class="glyphicon glyphicon-trash"></div></button>
            	

            </td>
            
        </tr>
<?php } } ?>	



