<html>
<head>
<title><?php echo $title ?></title>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url() ?>assets/js/page.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="row">
			<div class="col-md-2"><div class="row"><div class="col-md-3"><span style="font-size:3.5em;" class="img-circle glyphicon glyphicon-phone" style="" aria-hidden="true"></span></div> <div class="col-md-9"> <div ><h4 style="font-size:2.0em;"><strong>S-ALERT</strong></h4></div></div></div></div>
			<div class="col-md-9">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!--<ul class="nav navbar-nav">
        <li><span class="img-circle glyphicon glyphicon-phone"></span></li>-->
        <!--<li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
         <!-- </ul>
        </li>
      </ul>-->
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control input-sm" style="width:200%;" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url().'index.php/User_Managment/signup'?>"><strong>Sign up</strong></a></li>
        <li><a href="<?php echo base_url().'index.php/User_Managment/'?>"><strong>Sign in</strong></a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Dropdown</strong> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div><!--/. col-md -4 -->
<div class="col-md-1"></div>
</div><!-- /.row -->
</nav>

<div class="container-fluid">
	<!--<div class="page-header">
<h1>Welcome to Works.</h1>
</div>-->
<?php $this->load->view($content); ?>
<!-- js files -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</div>
</body>
</html>