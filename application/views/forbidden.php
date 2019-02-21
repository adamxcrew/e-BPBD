<html>
<head>
	<title>Access Denied</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/logo-icon.png"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
    .turun {margin-top: 10%;}
    </style>
</head>
<body>
<section class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default turun">
				<div class="panel-heading">
					<img src="<?php echo base_url(); ?>assets/images/brand.png" class="pull-right hidden-xs">
					<h3 class="text-danger"><i class="fa fa-warning"></i> Access Denied!</h3>
				</div>
			  <div class="panel-body">
			    Dear <span class="text-danger">{User}</span>,
			    <p>that the pages you visit may not be accessed directly, please go back to the application.</p>
			  </div>
			  <div class="panel-footer">
			  	<small>Powered By :</small>
			  	<img src="<?php echo base_url(); ?>assets/images/icon.png" width="50">
			  	<a href="<?php echo site_url(); ?>" class="btn btn-default pull-right"><i class="fa fa-sign-out"></i> Back to application</a>
			  </div>
			</div>
		</div>
	</div>
</section>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>