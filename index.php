<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.3.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Home</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Profil</a></li>
				<li><a href="#">Kategori</a></li>
				<li><a href="#">Kategori</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Cari</button>
			</form>
			
		</div>
	</nav>

	<div role="tabpanel">
	    <!-- Nav tabs -->
	    <ul class="nav nav-tabs" role="tablist">
	        <li role="presentation" class="active">
	            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
	        </li>
	        <li role="presentation">
	            <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
	        </li>
	    </ul>
	
	    <!-- Tab panes -->
	    <div class="tab-content">
	        <div role="tabpanel" class="tab-pane active" id="home">...</div>
	        <div role="tabpanel" class="tab-pane" id="tab">...</div>
	    </div>
	</div>
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Title</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	<--
</div>
</body>
</html>