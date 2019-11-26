<div class="col-md-12">
<?php 

echo $this->session->flashdata('notif');
?>
</div>
						

                    
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Data Informasi</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="Admin1" class="table table-bordered table-striped">
                                         <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
											<th>Username</th>
											<th>Password</th>
                                            <th>Level</th>
											<th>Action</th>

                                            </tr>
                                        </thead>
                                        
											<?php
												$a=1;
												foreach ($tampil->result_array() as $key) {
											?>
											<tr>
											<td><?php echo $a; ?></td>
											<td><?php echo $key["latar_belakang"];?></td>
                                            <td><?php echo $key["informasi_kekerasan"];?></td> 	
											<td><?php echo $key["informasi_uu"];?></td>	
											<td><?php echo $key["informasi_p2"];?></td>
                                             <td><?php echo $key["informasi_kemitraan"];?></td> 
											<td>
                                            <button class="btn btn-info btn-sm" onclick="edit_data('<?php echo $key["id"]; ?>')">Edit</button> </td>
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
		document.location='<?php echo base_url(); ?>ControllerAdmin/hapus/'+$id;
	}
}
// function hapusakses($id){
//     var conf=window.confirm('Data Akan Dihapus ?');
//     if (conf) {
//         document.location='<?php echo base_url(); ?>Rs/hapusakses/'+$id;
//     }
// }

function edit_data($id){
    document.location='<?php echo base_url(); ?>ControllerInformasi/edit/'+$id;
}


function edit(id,nama,email,username,password){
	//var	conf=window.confirm('Apakah Data Akan Diedit ?');
	//if (conf) {
    $('#id').val(id);
	$('#nm').val(nama);
    $('#em').val(email);
	$('#us').val(username);
	$('#pw').val(password);
  
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

