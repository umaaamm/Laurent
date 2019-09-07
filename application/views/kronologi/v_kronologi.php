<div class="col-md-12">
<?php 

echo $this->session->flashdata('notif');
?>
</div>
						<div class="col-md-5">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Data Kronologi</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url()?>SimpanKronologi" method="post" enctype="multipart/form-data">
                                   
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Pelayanan</label>
                                            <select class="form-control" name="jenis_pelayanan">
                                                <option value="-">-- Nama Pelayanan --</option>
                                              <?php foreach($tampil_pelayanan->result_array() as $keyy)
                                              {
                                                ?>
                                                    
                                                    <option value="<?php echo $keyy['id_pelayanan'];?>"><?php echo $keyy['nama_pelayanan'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                             <label>Kronologi *Silahkan ceritakan kronologi kejadian.</label>
                                                <textarea id="editor1" name="kronologi" rows="10" cols="80">
                                                                       
                                                </textarea>
                                        </div>
                                           <div class="form-group">
                                              <label>File input</label>
                                              <input type="file" name="file">
                                            </div>

                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                            

                
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-7">
                            <!-- general form elements disabled -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Data Kronologi</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="Admin1" class="table table-bordered table-striped">
                                         <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>id_pelayanan</th>
                                            <th>Id User</th>
											<th>Kronologi</th>
                                            <th>file</th>
                                            
                                            <th>Waktu Penginputan</th>
											<th>Action</th>

                                            </tr>
                                        </thead>
                                        
											<?php
												$a=1;
												foreach ($tampil->result_array() as $key) {
											?>
											<tr>
											<td><?php echo $a; ?></td>
											<td><?php echo $key["nama"];?></td>
                                            <td><?php echo $key["id_pelayanan"];?></td> 
                                             <td><?php echo $key["id_user"];?></td>	
											<td><?php echo $key["kronologi"];?></td>

                                            <td align="center">
                                                <a href="img/<?php echo $key['file'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:30px; hegith:30px;margin-bottom:10px;" id="picturebox" ><!-- <a
                                    href="" class="
                        btn btn-success btn-warning fa fa-edit"></a> --></a><br>


                                            <?php echo $key["file"];?></td>	
                                           
											<td><?php echo $key["waktu"];?></td>
											<td><button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id"]; ?>')">Hapus</button>
                                                <button class="btn btn-info btn-sm" onclick="edit_data('<?php echo $key["id"]; ?>')">Edit</button>
                                          <!--   <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mymodal" onclick="edit('<?php echo $key["id"]; ?>','<?php echo $key["nama"]; ?>','<?php echo $key['kronologi'];?>')">Edit</button>  -->
											</tr>
										<?php $a++; } ?>

                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                           
                       <!--  </div>/.col (right)  -->
                    

<script type="text/javascript">
function hapus($id){
	var	conf=window.confirm('Data Akan Dihapus ?');
	if (conf) {
		document.location='<?php echo base_url(); ?>ControllerKronologi/hapus/'+$id;
	}
}


function edit_data($id){
    document.location='<?php echo base_url(); ?>ControllerKronologi/edit/'+$id;
}
// function hapusakses($id){
//     var conf=window.confirm('Data Akan Dihapus ?');
//     if (conf) {
//         document.location='<?php echo base_url(); ?>Rs/hapusakses/'+$id;
//     }
// }
function edit(id,nama,kronologi){
    $('#id').val(id);
	$('#nm').val(nama);
    // $('#idp').val(id_pelayanan);
	// $('#kl').val(kronologi);
	// $('#fl').val(file);
    // $("#showImga").empty();
    // $("#showImga").append("<center><img class='img-responsive' src='img/" +file+ "' /></center>")
  
//}
}

// function editakses(id_akses,id_dokter,username,password){
//     //var   conf=window.confirm('Apakah Data Akan Diedit ?');
//     //if (conf) {
//     $('#id').val(id_akses);
//     $('#kode').val(id_dokter);
//     $('#usr').val(username);
//     $('#pwd').val(password);
  
// //}
// }

</script>

