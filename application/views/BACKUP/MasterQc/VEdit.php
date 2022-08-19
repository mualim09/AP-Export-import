<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

        <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo-gonusa.png" />
        <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/images/logo-gonusa.png">
		<title>G-EXPORT</title>
		<!-- <meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content=""> -->

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/master/css/master.css" />

        <!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/template/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?= base_url(); ?>assets/template/vendor/modernizr/modernizr.js"></script>

		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

</style>	

	</head>
	<body>

<!-- Notifications -->

<?php
  if($this->session->flashdata('warns') != null){ 
?>

<script>
  Swal.fire({
        icon: 'error',
        title: 'Failed',
        text: '<?php echo $this->session->flashdata('warns') ?>',
        // footer: '<a href="">Why do I have this issue?</a>'
      });
</script>

<?php
 }
?>

<?php
  if($this->session->flashdata('success') != null){ 
?>

<script>
  Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?php echo $this->session->flashdata('success') ?>',
        // footer: '<a href="">Why do I have this issue?</a>'
      });
</script>

<?php
 }
?>

<!-- End Notifications -->

<div id="preloader" class="preloader">

<div class="loading">
		<center>
				<div id="loader"></div>
		</center>
  </div>
  <!-- <div class="loading">
      <h1 class="inoaload">G-EXPORT</h1>
      <p>Please Wait..</p>
  </div> -->

</div>

<div class="wrapet">
  <section class="body">

  <!-- start: header -->
  <header class="header">
				<div class="logo-container">
					<a href="#" class="logo">
						<img src="<?= base_url(); ?>assets/images/gexim_600.png" height="35" alt="Gonusa" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<!-- <span class="separator"></span> -->
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?= base_url(); ?>assets/template/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo($this->session->userdata('logged_gexp_in')->AccountName); ?></span>
								<span class="role"><?php echo($this->session->userdata('logged_gexp_in')->UserName); ?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user"></i> My Profile</a>
								</li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo base_url('LoginSys/doLogout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
	</header>
			<!-- end: header -->


            <div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header" style="background-color: #172774;">
						<div class="sidebar-title">
							<h6 style="color: white; font-weight:bold;">G-EXPORT</h6>
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content" style="background-color: #172774;">

						<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">

							<?php include_once "mastermenus.php"; ?>

								<ul>
						</nav>

						<!-- Start Menus -->

							<!-- <nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">

									<li>
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
                                    </li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Pages</span>
										</a>
										<ul class="nav nav-children">
											
											<li>
												<a href="pages-404.html">
 													<i class="fa fa-copy" aria-hidden="true"></i> 404
												</a>
											</li>
											<li>
												<a href="pages-500.html">
													<i class="fa fa-copy" aria-hidden="true"></i> 500
												</a>
											</li>
											<li>
												<a href="pages-log-viewer.html">
													<i class="fa fa-copy" aria-hidden="true"></i> Log Viewer
												</a>
											</li>
											
										</ul>
									</li>

								</ul>
							</nav> -->

							<!-- End Menus -->
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6 style="color: white;">User Group</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
									<li><a style="color: white;" href="#"><?php echo $groupname->GroupDesc; ?></a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header"></div>
								<div class="widget-content">
									<ul>
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>
<!-- end: sidebar -->
<section role="main" class="content-body">
<!-- start: page -->

<header class="page-header" style="background-color: #172774;">
						<h2>QC Check</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<!-- <li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li> -->
								<!-- <li><span>Icons</span></li> -->
							</ol>
					
							<a class="sidebar-right-toggle"><i class="fa fa-cube"></i></a>
						</div>
</header>

<section class="panel panel-warning">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<!-- <a href="#" class="fa fa-times"></a> -->
								</div>
						
								<h5 style="color:white;">Dashboard QC : Edit QC Check </h5>
							</header>
							<div class="panel-body">

<div class="container-fluid">

<a class="btn btn-warning" href="<?php echo base_url('MasterQc/');?>"><i class="fa fa-arrow-left"></i> Back</a>

<br>
<br>
											<div class="form-group">
												<label class="col-md-2" for="inputDefault" style="font-weight: bold;">QC No</label>
												<div class="col-md-3">
												<input type="text" value="<?php echo $details_qc->gexp_qc_no?>" class="form-control col-md-2" id="inputDefault" disabled>
													<!-- <input type="date" value="<?php echo $details_qc->gexp_qc_expired_date?>" class="form-control" id="inputDefault" disabled> -->
												</div>
											</div>

<!-- <input type="text" value="<?php echo $details_qc->gexp_qc_no?>" class="form-control col-md-2" id="inputDefault" disabled> -->
<!-- <a class="btn btn-danger" href="<?php echo base_url('MasterQc/CreateNew');?>"><i class="fa fa-print"></i> Print</a> -->
<!-- <div class="form-group"> -->
												<!-- <label class="col-md-5" style="font-weight: bold;">QC Numbers : <?php echo $details_qc->gexp_qc_no ?></label> -->
												<!-- <div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_no ?>" class="form-control" id="inputDefault" disabled>
												</div>
											</div> -->

</div>

<hr>
<div class="container-fluid">
							<form class="form-horizontal form-bordered" method="POST" action="<?php echo base_url('MasterQc/save_edit_qc/');?>">

                                            <!-- <div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">QC Numbers</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_no ?>" class="form-control" id="inputDefault" disabled>
												</div>
                                            </div> -->
                                            
                                            <input type="hidden" value="<?php echo $details_qc->gexp_qc_id ?>" name="qc_id">

											<div class="form-group">
												<label class="col-md-2" for="inputDefault" style="font-weight: bold;">QC Details</label>
												<div class="col-md-3">
													<!-- <input type="date" value="<?php echo $details_qc->gexp_qc_expired_date?>" class="form-control" id="inputDefault" disabled> -->
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Product Name</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->ItemName ?>" name="qc_item_id" class="form-control" id="inputDefault" disabled>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Production Date</label>
												<div class="col-md-3">
													<input type="date" value="<?php echo $details_qc->gexp_qc_production_date ?>" name="prd_date" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Expired Date</label>
												<div class="col-md-3">
													<input type="date" value="<?php echo $details_qc->gexp_qc_expired_date?>" name="exp_date" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-5" for="inputDefault" style="font-weight: bold;">ORGANOLETIC, PHYSICAL, CHEMICAL TEST</label>
												<div class="col-md-3">
													<!-- <input type="date" value="<?php echo $details_qc->gexp_qc_expired_date?>" class="form-control" id="inputDefault"> -->
												</div>
											</div>


											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Aroma</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_aroma ?>" name="aroma" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Taste</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_taste ?>" name="taste" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Value</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_value?>" name="value" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Moisture</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_moisture ?>" name="moisture" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">PH</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_ph?>" name="ph" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">BRIX</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_brix?>" name="brix" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Finish Good Check Date</label>
												<div class="col-md-3">
													<input type="date" value="<?php echo $details_qc->gexp_qc_finish_goodcheck?>" class="form-control" name="finish_godcek" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-5" for="inputDefault" style="font-weight: bold;">MICROBIOLOGY</label>
												<div class="col-md-3">
													<!-- <input type="date" value="<?php echo $details_qc->gexp_qc_expired_date?>" class="form-control" id="inputDefault"> -->
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Start Analysis Date</label>
												<div class="col-md-3">
													<input type="date" value="<?php echo $details_qc->gexp_qc_start_analysis?>" class="form-control" name="analisis_start" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Finish Analysis Date</label>
												<div class="col-md-3">
													<input type="date" value="<?php echo $details_qc->gexp_qc_end_analysis?>" class="form-control" name="analisis_end" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Total Plate Count</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_total_plate_count ?>" name="plate_count" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Yeast & Mold</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_yeast_mold?>"  name="yeasmold" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Salmonella</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_salmonella ?>" name="salmonella" class="form-control" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Enterobacteriaceae</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $details_qc->gexp_qc_enterobacteria ?>" class="form-control" name="enterobacteria" id="inputDefault" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Status</label>
												<div class="col-md-3">
													<!-- <input type="text" value="<?php echo $details_qc->gexp_qc_status?>" class="form-control" name="status_text" id="inputDefault"> -->
													<select name="status_text" class="form-control">
														<option value="<?php echo $details_qc->gexp_qc_status?>">Selected : 
														<?php if($details_qc->gexp_qc_status=='1'){
															echo "Aman";
														}else{
															echo "Tidak Aman";
														} ?></option>
														<option value="1">Aman</option>
														<option value="2">Tidak Aman</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault">Release Date</label>
												<div class="col-md-3">
													<input type="date" value="<?php echo $details_qc->gexp_qc_release_date?>" class="form-control" name="release_qcdate" id="inputDefault" required>
												</div>
                                            </div>
                                            

											<div class="form-group">
												<label class="col-md-2 control-label" for="inputDefault"></label>
												<div class="col-md-2">
													<button type="submit" class="btn btn-block btn-warning"><i class="fa fa-save"></i> Update</button>
												</div>
											</div>
							</form>
</div>
<!-- Button trigger modal -->
<!-- <button type="button" class="mb-md mt-xs mr-xs btn btn-success" data-toggle="modal" data-target="#exampleModal">
  NEW
</button> -->

<!-- Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">

        <h5 class="modal-title" id="exampleModalLabel">Create Master TOP</h5>
        
      </div>
      <div class="modal-body">

	  <form class="form-horizontal form-bordered form-bordered" action="<?php echo base_url('DataSetTop/createnewtop');?>" id="inputdatagroup" method="POST">
                                           
											<div class="form-group">
												<label class="col-md-3 control-label" for="textareaDefault">TOP Description</label>
												<div class="col-md-8">
													<input class="form-control" name="topdesc" data-plugin-maxlength maxlength="50" />
													<p>
														<code>max-length</code> set to 50 character <code>uppercase</code>.
													</p>
												</div>
                                            </div>
											
											
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-success">Save changes</button> -->
		<input type="submit" class="btn btn-success" value="Confirm">
		</form>
      </div>
    </div>
  </div>
</div>

<!-- End Modal Insert Group -->

<br>
<br>


								
</div>
</section>


<!-- end: page -->
</section>
</div>






  </section>
</div>


<!-- Vendor -->
        <script src="<?= base_url(); ?>assets/template/vendor/jquery/jquery.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
<!-- Specific Page Vendor -->
		<script src="<?= base_url(); ?>assets/template/vendor/select2/select2.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?= base_url(); ?>assets/template/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url(); ?>assets/template/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url(); ?>assets/template/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= base_url(); ?>assets/template/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?= base_url(); ?>assets/template/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?= base_url(); ?>assets/template/javascripts/tables/examples.datatables.row.with.details.js"></script>
        <script src="<?= base_url(); ?>assets/template/javascripts/tables/examples.datatables.tabletools.js"></script>
        <script src="<?= base_url(); ?>assets/template/javascripts/ui-elements/examples.modals.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<!-- <script src="<?= base_url(); ?>assets/template/javascripts/forms/examples.advanced.form.js"></script> -->
        
<script>

$('#tables1').dataTable();
$('#tables2').dataTable();
$('#tables3').dataTable();
$('#tables4').dataTable();
$('#tables5').dataTable();
$('#tables6').dataTable();
$('#tables7').dataTable();
$('#tables8').dataTable();

$( window ).on("load", function() {
        // Handler for .load() called.
        // alert("window is loaded");
        $(".preloader").delay(1000).fadeOut("slow");
});

// POST GROUP

$(document).ready(function(){

$("#tambahgroup").click(function(){
    var kirim = $('#inputdatagroup').serialize();
    
    $.ajax({
        type	 : 'POST',
        url	     : "<?php echo base_url(); ?>/GroupMaster/simpanMasterGroup",
        data     : kirim,
        dataType : "JSON",
        cache	 : false,
        success	 : function(response){

                if(response.success == "1"){

                    // Swal.fire({
                    //     title: 'Sedang Di Proses',
                    //     showDenyButton: false,
                    //     showCancelButton: false,
                    //     confirmButtonText: 'OK',
                    //     denyButtonText: `Don't save`,
                    //     }).then((result) => {
                    //     /* Read more about isConfirmed, isDenied below */
                    //         if (result.isConfirmed) {
                    //             Swal.fire(response.messages, '', 'error')
                    //         }
                    //     });
                    
                    alert(response.messages);
                    location.reload();

                }else if(response.success == "0"){

                    alert(response.messages);
                    location.reload();

                        // Swal.fire({
                        // title: 'Sedang Di Proses',
                        // showDenyButton: false,
                        // showCancelButton: false,
                        // confirmButtonText: 'OK',
                        // denyButtonText: `Don't save`,
                        // }).then((result) => {
                        // /* Read more about isConfirmed, isDenied below */
                        //     if (result.isConfirmed) {
                        //         Swal.fire(response.messages, '', 'success')
                        //     }
                        // });
                    
                    // alert(response.messages);
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Success',
                    //     text: 'response.messages',
                    //     // footer: '<a href="">Why do I have this issue?</a>'
                    // });
                    // location.reload("<?php echo base_url(); ?>/MasterUserTest/crudmasteruser");
                    // $('#suksesgroup').load("<?php echo base_url(); ?>/MasterUserTest/crudmasteruser"); 
                    // $('#tampil').load("<?php echo base_url(); ?>/mahasiswa/tampilMahasiswa"); 

                }
        }
        // error    : function(data){
        // //         console.log(data.status); 
        //            alert('Eror');

        
        
    });
   
    
});


// $.ajax({
//         type: 'POST',
//         url: "<?php echo base_url(); ?>/mahasiswa/tampilMahasiswa",
//         cache: false,
//         success: function(data) {
//             $("#listingmastergroup").html(data);
//         }
// });


$("#tambahusers").click(function(){
    var user = $('#inputdatausers').serialize();
    
    $.ajax({
        type	 : 'POST',
        url	     : "<?php echo base_url(); ?>/RootTest/simpanMasterUser",
        data     : user,
        dataType : "JSON",
        cache	 : false,
        success	 : function(response){

                if(response.success == "1"){
                    
                    alert(response.messages);
                    location.reload();

                }else if(response.success == "0"){

                    alert(response.messages);
                    location.reload();

                }
        }
    
    });
      
});


$("#tambahusers").click(function(){
    var user = $('#inputdatausers').serialize();
    
    $.ajax({
        type	 : 'POST',
        url	     : "<?php echo base_url(); ?>/RootTest/simpanMasterUser",
        data     : user,
        dataType : "JSON",
        cache	 : false,
        success	 : function(response){

                if(response.success == "1"){
                    
                    alert(response.messages);
                    location.reload();

                }else if(response.success == "0"){

                    alert(response.messages);
                    location.reload();

                }
        }
    
    });
      
});



});

</script>

	</body>
</html>