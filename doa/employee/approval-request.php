<!doctype html>
<html lang="en">
	<head>
		<?php include_once "../partials/head.php"; ?>
		<link rel="stylesheet" href="../css/approval-request.css">
		<title>Approval Requests</title>
	</head>
	<body>

	<?php include_once "../partials/navbar-employee.php"; ?>
	<script>$( '#nav-approval-request' ).addClass( 'active' );</script>

	<main role="main" class="container">
		
		<h3 class="mt-3">Approval Requests</h3>
		
		<nav class="mt-3" aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-clipboard-check"></i> Approval Requests</li>
		  </ol>
		</nav>
		
		<div class="row">
			<div class="col cb-res cb-hide-submit-submission" >
				<script type="text/javascript" src="https://c6bkr396.caspio.com/dp/D83C9000eefc918a77e643659e9d/emb"></script>
			</div>
		</div>
		<div class="row">
			<div class="col cb-res cb-request-pending" >
				<script type="text/javascript" src="https://c6bkr396.caspio.com/dp/D83C90002b4fec46b58c44f7b6c7/emb"></script>
			</div>
		</div>
		<div class="row">
			<div class="col cb-res cb-request-approved" >
				<script type="text/javascript" src="https://c6bkr396.caspio.com/dp/D83C90004024ed650ef247b2ad94/emb"></script>
			</div>
		</div>	
		<div class="row">
			<div class="col cb-res cb-request-rejected" >
				<script type="text/javascript" src="https://c6bkr396.caspio.com/dp/D83C9000f97979f4d6434d6986bf/emb"></script>
			</div>
		</div>	

	</main><!-- /.container -->

	<?php include_once "../partials/footer.php"; ?>
	</body>

</html>
