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
                                    <h3 class="box-title">Edit Kronologi</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url()?>ControllerKronologi/edit_kronologi" method="post" enctype="multipart/form-data">
                                   <input type="hidden" class="form-control" name="id" value="<?php echo $data[0]['id'];?>">
                                   <input type="hidden" class="form-control" name="flag" value="<?php echo $data[0]['flag'];?>">
                                   <input type="hidden" class="form-control" name="id_user" value="<?php echo $data[0]['id_user'];?>">
                                   <input type="hidden" class="form-control" name="file_name" value="<?php echo $data[0]['file'];?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="<?php echo $data[0]['nama'];?>" name="nama" placeholder="Nama" required>
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Pelayanan</label>
                                            <select class="form-control" name="jenis_pelayanan">
                                                <option value="-">-- Nama Pelayanan --</option>
                                              <?php foreach($tampil_pelayanan->result_array() as $keyy)
                                              {
                                                ?>
                                                    
                                                    <option <?php if($keyy['id_pelayanan'] == $data[0]['id_pelayanan']){echo "selected"; } ?> value="<?php echo $keyy['id_pelayanan'];?>"><?php echo $keyy['nama_pelayanan'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                          <label>Kronologi</label>
                                                <textarea id="editor1" name="kronologi" rows="10" cols="80">
                                                       <?php echo $data[0]['kronologi'];?>
                                                </textarea>
                                        </div>
                                           <div class="form-group">
                                              <label>File input</label>
                                              <br>
                                              <label>Nama File Sebelumnya: <?php echo $data[0]['file'];?> </label>
                                              <input type="file" name="file">
                                            </div>

                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                        </div>