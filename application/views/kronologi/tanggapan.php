<div class="col-md-12">
<?php 

echo $this->session->flashdata('notif');
$data=$data_tanggapan->result_array();
?>
</div>
                        <div class="col-md-5">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> Tanggapan</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url()?>ControllerKronologi/simpan_tanggapan" method="post" enctype="multipart/form-data">
                                   <input type="hidden" class="form-control" name="id" value="<?php echo $data[0]['id'];?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="<?php echo $data[0]['nama'];?>" name="nama" placeholder="Nama" required>
                                        </div>

                                        
                                        <div class="form-group">
                                          <label>Tanggapan</label>
                                                <textarea id="editor1" name="tanggapan" rows="10" cols="80">
                                                      
                                                </textarea>
                                        </div>
                                      

                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                        </div>