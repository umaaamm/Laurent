<!DOCTYPE html>
<html lang="en">
<head>
	<title>Layanan Pengaduan Kekerasan Perempuan dan Anak P2TP2A Provinsi Lampung</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	 <!-- <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/timepicker/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/login2/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	<?php 

echo $this->session->flashdata('notif_l');
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				  
				<form class="login100-form validate-form" method="post" action="<?php echo base_url()?>CekLogin">
					<span class="login100-form-title p-b-43">
						Login Admin
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

				<!-- 	<div class="flex-sb-m w-full p-t-3 p-b-32">
						
						<div>
							<a href="<?php echo base_url()?>ControllerUser/daftar">Belum Memiliki Akun ?, Daftar Disini.</a><br>
                            <a href="<?php echo base_url()?>ControllerUser/lupa_pass">Lupa Password ?, Klik disini.</a>
						</div>
					</div> -->
			

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" style="background-color: blue;">
							Login
						</button>
					</div>
					
					

					
				</form>
				<!-- style="background-image: url('<?php echo base_url();?>asset/login2/images/bg-01.jpg'); -->

				<div class="login100-more">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
     <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/1.jpeg" alt="Chania">
      <div class="carousel-caption">
        <h3>Penguatan kepada mitra korban kasus KDRT sebelum sidang</h3>
        <!-- <p></p> -->
      </div>
    </div>

    <div class="item">
      <img src="img/2.jpeg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Penjangkauan kasus pencabulan anak bawah umur ke kabupaten lampung timur</h3>
        <!-- <p></p> -->
      </div>
    </div>

    <div class="item">
      <img src="img/3.jpeg" alt="New York">
      <div class="carousel-caption">
        <h3>Koordinasi kasus persetubuhan dan kasus pencabulan anak bawah umur oleh guru ngaji di polsek abung selatan kabupaten lampung utara</h3>
        <!-- <p></p> -->
      </div>
    </div>

     <div class="item">
      <img src="img/4.jpeg" alt="New York">
      <div class="carousel-caption">
        <h3>Konseling dan penerimaan berkas2 unt pembuatan surat kuasa unt kasus pelecehan seksual anak bawah umur</h3>
        <!-- <p></p> -->
      </div>
    </div>

     <div class="item">
      <img src="img/5.jpeg" alt="New York">
      <div class="carousel-caption">
        <h3>Koordinasi kasus di polsek abung selatan kabupaten lampung utara</h3>
        <!-- <p></p> -->
      </div>
    </div>



  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	<!-- wkowkowkokwok -->

	</div>
	<script src="<?php echo base_url();?>asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>asset/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>asset/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>asset/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>asset/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>asset/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>asset/dist/js/demo.js"></script>

<script src="<?php echo base_url();?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/bower_components/Chart.js/Chart.js"></script>
<script src="<?php echo base_url();?>asset/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>asset/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>asset/bower_components/ckeditor/ckeditor.js"></script>
<script src="https://www.w3schools.com/js/myScript1.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>asset/login2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>asset/login2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>asset/login2/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>asset/login2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>asset/login2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>asset/login2/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>asset/login2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>asset/login2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>asset/login2/js/main.js"></script>

</body>
</html>