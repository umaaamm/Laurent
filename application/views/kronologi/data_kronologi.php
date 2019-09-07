<div class="col-md-12">
<?php 

echo $this->session->flashdata('notif');
?>
</div>
						
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Data Kronologi</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="Admin" class="table table-bordered table-striped">
                                         <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>id_pelayanan</th>
											<th>Kronologi</th>
                                            <th>file</th>
                                            <th>Id User</th>
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
											<td><?php echo $key["kronologi"];?></td>

                                            <td align="center">
                                                <a href="img/<?php echo $key['file'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:20px; hegith:20px;margin-bottom:10px;" id="picturebox" ><!-- <a
                                    href="" class="
                        btn btn-success btn-warning fa fa-edit"></a> --></a><br>


                                            <?php echo $key["file"];?></td>	
                                            <td><?php echo $key["id_user"];?></td>
                                            
                                                <td><button class="btn btn-info btn-sm" onclick="tanggapan('<?php echo $key["id"]; ?>')">Berikan Tanggapan</button>
                                          <!--   <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#mymodal" onclick="edit('<?php echo $key["id"]; ?>','<?php echo $key["nama"]; ?>','<?php echo $key['kronologi'];?>')">Edit</button>  -->
											</tr>
										<?php $a++; } ?>

                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
</div>



                            <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Data tanggapan</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="Adminz" class="table table-bordered table-striped">
                                         <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Id Kronologi</th>
                                            <th>id pelayanan</th>
                                            <th>Id User</th>
                                            <th>Nama</th>
                                            <th>Kronologi</th>
                                            <th>Tanggapan</th>
                                             <th>file</th>
                                            <!-- <th>Action</th> -->

                                            </tr>
                                        </thead>
                                        
                                            <?php
                                                $a=1;
                                                foreach ($tampil_join->result_array() as $key) {
                                            ?>
                                            <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $key["id"];?></td>
                                            <td><?php echo $key["id_pelayanan"];?></td>   
                                            <td><?php echo $key["id_user"];?></td>
                                            
                                            <td><?php echo $key["nama"];?></td>
                                            <td><?php echo $key["kronologi"];?></td>
                                            
                                    
                                                    <td><?php echo $key["tanggapan"];?></td>
                                           
                                            


                                            <td align="center">
                                                <a href="img/<?php echo $key['file'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:20px; hegith:20px;margin-bottom:10px;" id="picturebox" ><!-- <a
                                    href="" class="
                        btn btn-success btn-warning fa fa-edit"></a> --></a><br>


                                            <?php echo $key["file"];?></td> 
                                           
                                            
                                            <!-- <td>
                                                <button class="btn btn-info btn-sm" onclick="tanggapan('<?php echo $key["id"]; ?>')">Berikan Tanggapan</button> -->
                                         
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


function tanggapan($id){
    document.location='<?php echo base_url(); ?>ControllerKronologi/tanggapan/'+$id;
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

