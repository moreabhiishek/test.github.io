<!doctype html>
<html lang="en">
	<head>
		<?php include_once "../partials/head.php"; ?>
		<link rel="stylesheet" href="../css/profile.css">
		<title>Profile</title>

		<style>
			.padsRow
			{
				padding-top: 2%
			}

			.titleH
			{
				color: #317eac;
				font-size: 20px;
				font-family: Roboto, sans-serif;
				font-weight: normal;
			}
		</style>
	</head>
	<body>

	<?php include_once "../partials/navbar-employee.php"; ?>
	<script>$( '#nav-profile' ).addClass( 'active' );</script>

	<main role="main" class="container">
		
		<h3 class="mt-3">Profile</h3>
		
		<nav class="mt-3" aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user"></i> Profile</li>
		  </ol>
		</nav>

			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="team-view-tab" data-toggle="tab" href="#team-view" role="tab" aria-controls="profile" aria-selected="false">Team View</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="team-matrix-tab" data-toggle="tab" href="#team-matrix" role="tab" aria-controls="matrix" aria-selected="false">Team Matrix</a>
				</li>
			
			</ul>
			<div class="tab-content" id="myTabContent">

				<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
					<div class="row">
						<div class="col cb-res cb-hide-submit">
							<script type="text/javascript" src="https://c0hcq689.caspio.com/dp/c561a0005134188ac88641a58d13/emb"></script>
						</div>
					</div>	

					<div class="row">
						<div class="col cb-res cb-hide-submit cb-authority-limit">
							<script type="text/javascript" src=""></script>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="team-view" role="tabpanel" aria-labelledby="profile-tab">
					<div class="row padsRow">
						<div class="col">
							<h3 class="titleH">Team View</h3>
							<hr>
							<div class="col cb-res cb-hide-submit team_view_class">
								<script type="text/javascript" src="https://c6bkr396.caspio.com/dp/D83C900029fee3b9044e47479380/emb"></script>
							</div>							
							
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="team-matrix" role="tabpanel" aria-labelledby="matrix-tab">
					<div class="row padsRow">
						<div class="col">
							<h3 class="titleH">Team Matrix</h3>
							<hr>								
							<script type="text/javascript" src="https://c6bkr396.caspio.com/dp/D83C900062dff7d36e7948b19176/emb"></script>
						</div>
					</div>
				</div>
			</div>


				
	</main><!-- /.container -->
	<?php include_once '../partials/modal.php'; ?>
	<?php include_once "../partials/footer.php"; ?>
	</body>

</html>
