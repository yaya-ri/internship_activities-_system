<li id="header_inbox_bar" class="dropdown">
    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
        <i class="fa fa-envelope-o"></i>
        <?php $jumlah_n_mhs=0; foreach ($notifikasi as $a) { 
            if($a->mention_read==0 && $a->mention_status==2){
              $jumlah_n_mhs++;
            }
          } ?>
        <span class="badge bg-theme"><?php echo $jumlah_n_mhs; ?></span>
    </a>
    <ul class="dropdown-menu extended inbox">
        <div class="notify-arrow notify-arrow-green"></div>
        <li>
            <p class="green">You have <?php echo $jumlah_n_mhs; ?> new messages</p>
        </li>
            <?php foreach ($notifikasi as $a) { 
              $batas=1;
              if($a->mention_read==0 && $a->mention_status==2 && $batas<=1 ){
              ?>
              <li>
                  <a href="<?php echo base_url('index.php/s_detail_activity_c/read');?>/<?php echo $a->activity_id; ?>">
                      <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/gambar/<?php echo $a->mentor_profile; ?>"></span>
                      <span class="subject">
                      <span class="from"><?php echo $a->mentor_first_name; ?></span>
                      <span class="time"><?php echo $a->mention_date; ?></span>
                      </span>
                      <span class="message">
                          <?php echo $a->mention_chat; ?>
                      </span>
                  </a>
              </li>
            <?php } $batas++; } ?>
            <a href="index.html#">See all messages</a>
        </li>
    </ul>
</li>