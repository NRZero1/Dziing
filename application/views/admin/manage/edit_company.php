<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_includes/head.php") ?>
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view("_includes/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php $this->load->view("_includes/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Company</h1>
          </div>
          <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="card mb-3">
          <div class="card-header">
             <a class="btn btn-outline-primary shadow-sm" href="<?php echo site_url('admin/manage/') ?>">
              <span class="fa fa-arrow-left"></span> Back
            </a>
          </div>
          <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="username">Username*</label>
                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                 type="text" name="username" placeholder="Username" value="<?php echo $manage->username ?>" readonly/>
                <div class="invalid-feedback">
                  <?php echo form_error('username') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="first_name">First Name*</label>
                <input class="form-control <?php echo form_error('first_name') ? 'is-invalid':'' ?>"
                 type="text" name="first_name" placeholder="First Name" value="<?php echo $manage->first_name ?>"/>
                <div class="invalid-feedback">
                  <?php echo form_error('first_name') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="last_name">Last Name*</label>
                <input class="form-control <?php echo form_error('last_name') ? 'is-invalid':'' ?>"
                 type="text" name="last_name" placeholder="Last Name" value="<?php echo $manage->last_name ?>"/>
                <div class="invalid-feedback">
                  <?php echo form_error('last_name') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="email">Email*</label>
                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                 type="email" name="email" placeholder="E-mail" value="<?php echo $manage->email ?>"/>
                <div class="invalid-feedback">
                  <?php echo form_error('email') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="country">Country*</label>
                <input class="form-control <?php echo form_error('country') ? 'is-invalid':'' ?>"
                 type="text" name="country" placeholder="Country" value="<?php echo $manage->country ?>"/>
                <div class="invalid-feedback">
                  <?php echo form_error('country') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="phone">Phone*</label>
                <input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
                 type="text" name="phone" placeholder="Phone" value="<?php echo $manage->phone ?>"/>
                <div class="invalid-feedback">
                  <?php echo form_error('phone') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="photo">Photo</label>
                <input class="form-control-file"
                 type="file" name="photo" value="<?php echo $manage->photo ?>"/>
                <input type="hidden" name="old_image" value="<?php echo $manage->photo ?>" />
              </div>
              <input class="btn btn-outline-success shadow-sm" type="submit" name="btn" value="Update" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>

      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("_includes/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("_includes/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("_includes/javascript.php") ?>

</body>

</html>
