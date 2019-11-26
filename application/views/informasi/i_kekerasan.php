<?php 

$data=$tampil->result_array();
?>
<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                 <div class="panel box box-warning">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="true" class="">
                        Latar Belakang
                      </a>
                    </h4>
                  </div>
                  <div id="collapsesix" class="panel-collapse collapse " aria-expanded="true" style="">
                    <div class="box-body">
                    <?php echo $data[0]['latar_belakang'];?>
                    </div>
                  </div>
                </div>





                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="">
                        Informasi kekerasan
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse " aria-expanded="false" style="">
                    <div class="box-body">
                     <?php echo $data[0]['informasi_kekerasan'];?>
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                       Informasi Undang Undang yang menjadi payung hukum P2TP2A Provinsi Lampung
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="box-body">
                    <?php echo $data[0]['informasi_uu'];?>
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
Informasi tentang P2TP2A Provinsi Lampung                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="box-body">
                     <?php echo $data[0]['informasi_p2'];?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion1">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" aria-expanded="false" class="">
                        Informasi tentang Kemitraan P2TP2A Provinsi Lampung
                      </a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse " aria-expanded="false" style="">
                    <div class="box-body">

                     <center><img src="./img/Picture1.png" class="img-thumbnail img-responsive"
                             style="width:500px; hegith:500px;margin-bottom:10px;" id="picturebox" ></center>
                             <br>
                      <?php echo $data[0]['informasi_kemitraan'];?>
                    </div>
                  </div>
                </div>
               
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>