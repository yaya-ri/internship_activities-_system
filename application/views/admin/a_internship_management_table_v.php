<?php $j=1; 
if($table!=null){
	foreach ($table as $a) {?>

	<tr>
		<td class="text-center"><?php echo $j; ?></td>
		<td><?php echo $a->student_first_name." ".$a->student_last_name; ?></td>
		<td><?php echo $a->mentor_first_name." ".$a->mentor_last_name; ?></td>
		<td class="text-center"><?php if(!empty($a->project_final_report)){
			echo "Sudah selesai";
		}else {
			echo "belum selesai";
		} ?></td>
	</tr>
<?php $j++; } } ?>	