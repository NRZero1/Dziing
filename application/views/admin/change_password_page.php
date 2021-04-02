<!DOCTYPE html>
<html lang="en">
<head>
 <title><?php echo SITE_NAME; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/login.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/jquery/jquery.slim.js') ?>"></script>
    <link rel="stylesheet" type="text/css" href="css/code.css">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="page-top">
  <div class="card mb-3">
          <div class="card-header">
            <a class="btn btn-outline-primary shadow-sm" href="<?php if($_SESSION['level']=='company') {echo site_url('company');} if($_SESSION['level']=='admin') {echo site_url('admin');} ?>">
              <span class="fa fa-arrow-left"></span> Back
            </a>
          </div>
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
 	<h3 class="h3 mb-0 text-gray-800">Change Password</h3>
 </div>
 <?php if ($this->session->flashdata('success')): ?>
 <div class="alert alert-success" role="alert">
 	<?php echo $this->session->flashdata('success'); ?>
 </div>
 <?php endif; ?>
 <div class="card mb-3">
 	<div class="card-body">
 		<form action="<?php echo site_url('admin/change/update') ?>" method="post">
 		<div class="form-group">
 			<label for="username">USERNAME*</label>
 			<input class="form-control" type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
 		</div>
 		<div class="form-group">
 			<label for="new_pass">New Password*</label>
 			<input class="form-control" type="password" name="new_pass"
			placeholder="New Password" <?php echo form_error('new password') ? 'isinvalid':'' ?>" />
 			<div class="invalid-feedback">
 				<?php echo form_error('New Password') ?>
 			</div>
 		</div>

 		<div class="form-group">
 			<label for="confirm_pass">Confirm Password*</label>
 			<input class="form-control" type="password" name="confirm_pass"
			placeholder="Confirm Password" <?php echo form_error('confirm password')
			? 'is-invalid':'' ?>" />
 			<div class="invalid-feedback">
 				<?php echo form_error('Confirm Password') ?>
 			</div>
 		</div>
 		<input class="btn btn-primary" type="submit" name="btn"
		value="Change My Password" />
 		</form>
 	</div>
 	<div class="card-footer small text-muted">
 		* required fields
 	</div>
 </div>

</div>

 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
 </div>
 <div class="modal-body">Select "Logout" below if you are ready to end your
current session.</div>
 <div class="modal-footer">
 <button class="btn btn-secondary" type="button" datadismiss="modal">Cancel</button>
 <a class="btn btn-primary" href="<?= site_url('login/logout') ?>">Logout</a>
 </div>
 </div>
 </div>
 </div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
 </div>
 <div class="modal-body">Unsaved changes will be lost.</div>
 <div class="modal-footer">
 <button class="btn btn-secondary" type="button" datadismiss="modal">Cancel</button>
 <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
 </div>
 </div>
 </div>
</div>
   <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('vendor/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('js/demo/chart-pie-demo.js') ?>"></script>
</body>
</html>