<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo SITE_NAME; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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

  <body>
    <div class="card mb-3">
          <div class="card-header">
            <a class="btn btn-outline-primary shadow-sm" href="<?php echo site_url('login') ?>">
              <span class="fa fa-arrow-left"></span> Back
            </a>
          </div>
          <div class="card-body">

            <form action="<?php echo site_url('manage') ?>" method="post" enctype="multipart/form-data" >
               <div class="form-group">
                <label for="first_name">First Name*</label>
                <input class="form-control <?php echo form_error('first_name') ? 'is-invalid':'' ?>"
                 type="text" name="first_name" placeholder="First Name" />
                <div class="invalid-feedback">
                  
                </div>
              </div>

        <div class="form-group">
                <label for="last_name">Last Name*</label>
                <input class="form-control <?php echo form_error('last_name') ? 'is-invalid':'' ?>"
                 type="text" name="last_name" placeholder="Last Name" />
                <div class="invalid-feedback">
                 
                </div>
              </div>

       <div class="form-group">
                <label for="email">Email*</label>
                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                 type="email" name="email" placeholder="E-mail" />
                <div class="invalid-feedback">
                  
                </div>
              </div>


              <div class="form-group">
    <label for="country">Country*</label>
                <input class="form-control <?php echo form_error('country') ? 'is-invalid':'' ?>"
                 type="text" name="country" placeholder="Country" />
                <div class="invalid-feedback">
                  
                </div>
              </div>

           
              <div class="form-group">
                <label for="phone">Phone*</label>
                <input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
                 type="text" name="phone" placeholder="Phone" />
                <div class="invalid-feedback">
                  
                </div>
              </div>

              <div class="form-group">
                <label for="username">Username*</label>
                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                 type="text" name="username" placeholder="Username" />
                <div class="invalid-feedback">
                  
                </div>
              </div>

        <div class="form-group">
                <label for="password">Password*</label>
                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                 type="password" name="password" placeholder="Password" />
                <div class="invalid-feedback">
                 
                </div>
              </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input class="form-control-file" type="file" name="photo" />
              </div>
              <input class="btn btn-primary shadow-sm" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>
    </div>
</body>
</html>
