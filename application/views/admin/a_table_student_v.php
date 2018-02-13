
<?php $no=1; foreach ($md_student as $a) { ?>
        <tr>
            <td class="text-center"><?php echo $no++?></td>
            <td><?php echo $a->student_username;?></td>
            <td><?php echo $a->student_password; ?></td>
            <td><?php echo $a->student_first_name;?></td>
            <td><?php echo $a->student_last_name;?></td>
            <td><?php echo $a->student_email;?></td>
           
            <td class="text-center">
            	                
                <a
                    href="javascript:;"
                    data-sid="<?php echo $a->student_id; ?>"
                    data-susername="<?php echo $a->student_username; ?>"
                    data-spassword="<?php echo $a->student_password; ?>"
                    data-sfirstname="<?php echo $a->student_first_name; ?>"
                    data-slastname="<?php echo $a->student_last_name; ?>"
                    data-semail="<?php echo $a->student_email; ?>"
                    data-toggle="modal" data-target="#edit-data">
                    <button title="Edit" data-toggle="modal" data-target="#ubah-data" class="btn btn-info ">
                    <span class="glyphicon glyphicon-pencil"></span></button>                        
                </a>
               <!--  <button title="lihat detail" type="button" class="btn btn-warning" onclick="hapus( <?php echo $a->student_id; ?> )"><div class="glyphicon glyphicon-trash" ></div></button> -->
                <button title="Reset Password" type="button" class="btn btn-warning" onclick="reset( <?php echo $a->student_id; ?> )"><div class="glyphicon glyphicon-refresh" ></div></button>
            	

            </td>
            
        </tr>
<?php } ?>	