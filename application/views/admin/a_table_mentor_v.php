
<?php $no=1; foreach ($md_mentor as $a) { ?>
        <tr>
            <td class="text-center"><?php echo $no++?></td>
            <td><?php echo $a->mentor_username;?></td>
            <td><?php echo $a->mentor_password; ?></td>
            <td><?php echo $a->mentor_first_name;?></td>
            <td><?php echo $a->mentor_last_name;?></td>
            <td><?php echo $a->mentor_email;?></td>
           
            <td class="text-center">
            	                
                <a
                    href="javascript:;"
                    data-mid="<?php echo $a->mentor_id; ?>"
                    data-musername="<?php echo $a->mentor_username; ?>"
                    data-mpassword="<?php echo $a->mentor_password; ?>"
                    data-mfirstname="<?php echo $a->mentor_first_name; ?>"
                    data-mlastname="<?php echo $a->mentor_last_name; ?>"
                    data-memail="<?php echo $a->mentor_email; ?>"
                    data-toggle="modal" data-target="#edit-data">
                    <button title="Edit" data-toggle="modal" data-target="#ubah-data" class="btn btn-info ">
                    <span class="glyphicon glyphicon-pencil"></span></button>                        
                </a>
                <!-- <button title="lihat detail" type="button" class="btn btn-warning" onclick="hapus( <?php echo $a->mentor_id; ?> )"><div class="glyphicon glyphicon-trash" ></div></button> -->
                <button title="Reset Password" type="button" class="btn btn-warning" onclick="reset( <?php echo $a->mentor_id; ?> )"><div class="glyphicon glyphicon-refresh" ></div></button>
            	

            </td>
            
        </tr>
<?php } ?>	