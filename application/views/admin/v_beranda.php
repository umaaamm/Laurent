<?php
$data=$jumlah_pengaduan->result_array();
$data1=$jumlah_user->result_array();
$data2=$jumlah_tanggapan->result_array();

// print_r($data);die;
?>

<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              
              <h3><?php echo $data1[0]['total']; ?></h3>
              <p>Jumlah User</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $data[0]['total']; ?></h3>
              <p>Jumlah Pengaduan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $data2[0]['total']; ?></h3>

              <p>Jumlah Tanggapan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        
     
        <!-- ./col -->
      </div>