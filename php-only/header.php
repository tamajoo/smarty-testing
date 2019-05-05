<!DOCTYPE html>

<html>

<head>
	
	<title><?php echo $pageTitle ?> | My Website</title>

	<meta charset="utf-8">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="./index.php">Navbar</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item <?php if ($activePage == 'index') : ?>active<?php endif; ?>">
							<a class="nav-link" href="./index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if ($activePage == 'about') : ?>active<?php endif; ?>" href="./about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if ($activePage == 'blog') : ?>active<?php endif; ?>" href="./blog.php">Blog</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
								Dropdown
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#" tabindex="-1">Disabled</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>

	</header>
	
	<div class="content">
		<div class="container">