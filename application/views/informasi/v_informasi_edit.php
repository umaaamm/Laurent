<div class="col-md-12">
<?php 

echo $this->session->flashdata('notif');
$data=$data_edit->result_array();
?>
</div>
                        <div class="col-md-5">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Informasi</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url()?>ControllerInformasi/edit_action" method="post" enctype="multipart/form-data">
                                   <div class="box-body">
                                      <input type="hidden" class="form-control" name="id" value="<?php echo $data[0]['id'];?>">
                                        <div class="form-group">
                                          <label>Latar Belakang</label>
                                                <textarea id="editor1" name="latar_belakang" rows="10" cols="80">
                                                       <?php echo $data[0]['latar_belakang'];?>
                                                </textarea>
                                        </div>
                                         <div class="form-group">
                                          <label>Informasi Kekerasan</label>
                                                <textarea id="editor2" name="informasi_kekerasan" rows="10" cols="80">
                                                       <?php echo $data[0]['informasi_kekerasan'];?>
                                                </textarea>
                                        </div>
                                         <div class="form-group">
                                          <label>Informasi Undang-Undang</label>
                                                <textarea id="editor3" name="informasi_uu" rows="10" cols="80">
                                                       <?php echo $data[0]['informasi_uu'];?>
                                                </textarea>
                                        </div>
                                         <div class="form-group">
                                          <label>Informasi Tentang P2TP2a</label>
                                                <textarea id="editor4" name="informasi_p2" rows="10" cols="80">
                                                       <?php echo $data[0]['informasi_p2'];?>
                                                </textarea>
                                        </div>
                                         <div class="form-group">
                                          <label>Informasi Tentang Kemitraan</label>
                                                <textarea id="editor5" name="informasi_kemitraan" rows="10" cols="80">
                                                       <?php echo $data[0]['informasi_kemitraan'];?>
                                                </textarea>
                                        </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                     </div>
                                </form>
                           <!-- /.box -->

                        </div>