<div class="col-md-12">
<?php 

echo $this->session->flashdata('notif');
?>
</div>
						<div class="col-md-4">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Kelola Data User</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo base_url()?>SimpanUser" method="post">
                                   
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                        </div>
                                         <div class="form-group">
                                            <label>TTL</label>
                                            <input type="text" class="form-control" name="ttl" placeholder="TTL" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No KK</label>
                                            <input type="text" class="form-control" name="no_kk" placeholder="Nomor Kartu Keluarga" required>
                                        </div>
                                        <div class="form-group">
                                            <label>NO KTP</label>
                                            <input type="text" class="form-control" name="no_ktp" placeholder="Nomor KTP" required>
                                        </div>
                                          <div class="form-group">
                                            <label>Nomor Telpon</label>
                                            <input type="text" class="form-control" name="no_telpon" placeholder="Nomor TELPON" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                            

 <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                    </div>
                    <div class="modal-body">
                    <form role="form" action="<?php echo base_url()?>ControllerUser/edit" method="post">
                                   
                                    <div class="box-body">
                                        <input type="hidden" class="form-control" name="id" id="id" >

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama" id="nm" required>
                                        </div>
                                         <div class="form-group">
                                            <label>TTL</label>
                                            <input type="text" class="form-control" name="ttl" placeholder="TTL" id="tl" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email" id="em"  required>
                                        </div>
                                        <div class="form-group">
                                            <label>No KK</label>
                                            <input type="text" class="form-control" name="no_kk" id="kk" placeholder="Nomor Kartu Keluarga" required>
                                        </div>
                                        <div class="form-group">
                                            <label>NO KTP</label>
                                            <input type="text" class="form-control" name="no_ktp" id="ktp" placeholder="Nomor KTP" required>
                                        </div>
                                          <div class="form-group">
                                            <label>Nomor Telpon</label>
                                            <input type="text" class="form-control" name="no_telpon" id="tlp" placeholder="Nomor TELPON" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" placeholder="Alamat" id="alm" required></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password" id="pwd" placeholder="Password" required>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                </div>
            </div>
        </div>                           
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-8">
                            <!-- general form elements disabled -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Data User</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="Admin1" class="table table-bordered table-striped">
                                         <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Email</th>
											<th>No KK</th>
											<th>No KTP</th>
                                            <th>No Telpon</th>
                                            <th>Alamat</th>
                                             <th>Password</th>
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
                                            <td><?php echo $key["ttl"];?></td>
                                            <td><?php echo $key["email"];?></td> 	
											<td><?php echo $key["no_kk"];?></td>
                                            <td><?php echo $key["no_ktp"];?></td>
                                            <td><?php echo $key["no_telpon"];?></td>
                                            <td><?php echo $key["alamat"];?></td>	
											<td><?php echo $key["password"];?></td>
											<td><button class="btn btn-danger btn-sm" onclick="hapus('<?php echo $key["id_user"]; ?>')">Hapus</button>
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mymodal" onclick="edit('<?php echo $key["id_user"]; ?>','<?php echo $key["nama"]; ?>','<?php echo $key["ttl"]; ?>','<?php echo $key["email"]; ?>','<?php echo $key["no_kk"]; ?>','<?php echo $key["no_ktp"]; ?>','<?php echo $key["no_telpon"]; ?>','<?php echo $key["alamat"]; ?>','<?php echo $key['password'];?>')">Edit</button> 
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
		document.location='<?php echo base_url(); ?>ControllerUser/hapus/'+$id;
	}
}

function edit(id_user,nama,ttl,email,no_kk,no_ktp,no_telpon,alamat,password){
    $('#id').val(id_user);
	$('#nm').val(nama);
    $('#tl').val(ttl);
    $('#em').val(email);
	$('#kk').val(no_kk);
    $('#ktp').val(no_ktp);
    $('#tlp').val(no_telpon);
    $('#alm').val(alamat);
	$('#pwd').val(password);  
}

</script>

