function hapus(id) {
    if (confirm("Are you sure?")) {
        $.ajax({
            url: "<?php echo base_url('index.php/s_activity_edit_c/delete')?>",
            type: "POST",
            data: {activity_id:id},
            success: function () {
                alert("ajax success");
            },
            error: function () {
                alert("ajax failure");
            }
        });
    } else {
        alert(id + " not deleted");
    }
}