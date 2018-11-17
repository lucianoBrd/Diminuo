
<?php require_once(PATH_VIEWS.'header.php');?>


<body>

	<!-- Navigation -->
	<nav class="navbar navbar-light bg-light static-top">
		<div class="container">
			<a class="navbar-brand" href="../">Diminuo</a>
		</div>
	</nav>

	<!-- Masthead -->
	<header class="masthead text-white text-center">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-9 mx-auto">
					<h1 class="mb-4">Une URL longue ? Raccourcissez-la!</h1>
					<h3 class="mb-5">Largement meilleur et plus court que les autres.</h3>
				</div>
				<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
					<form action="../" method="post" enctype="multipart/form-data">
						<div class="form-row">
							<div class="col-12 col-md-9 mb-2 mb-md-0">
								<input type="url" class="form-control form-control-lg" placeholder="Collez un lien à raccourcir" name="url">
							</div>
							<div class="col-12 col-md-3">
								<button type="submit" class="btn btn-block btn-lg btn-primary">Raccourcir</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xl-6 mx-auto">
				<?php require_once(PATH_VIEWS.'alert.php');?>
			</div>
		</div>

	</header>

	<!-- Icons Grid -->
	<section class="features-icons bg-light text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
							<i class="icon-screen-desktop m-auto text-primary"></i>
						</div>
						<h3>Diminuo</h3>
						<p class="lead mb-0">Fini les URL à rallonge!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php require_once(PATH_VIEWS.'footer.php');?>
