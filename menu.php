<?php include('includes/header.php'); ?>
<section id="main" class="menu">
	<div class="container">
		<div class="row page-heading">
			<div class="col-xs-12">
				<h2>Our Menu <a href="tel:17702221331" class="btn btn-default pull-right" style="display:none;">Call In Order</a></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-pills nav-justified">
					<li class="active"><a href="#starters" data-toggle="pill">Starters</a></li>
					<li><a href="#entrees" data-toggle="pill">Entrees</a></li>
					<li><a href="#salads" data-toggle="pill">Salads</a></li>
					<li><a href="#burgers" data-toggle="pill">Sandwiches &amp; Burgers</a></li>
					<li><a href="#grill" data-toggle="pill">From the Grill</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="starters">
						<div class="tab-heading">
							<h3>Starters</h3>
						</div>
						<?php include('includes/menu-starters.php'); ?>
					</div>
					<div class="tab-pane fade" id="entrees">
						<div class="tab-heading">
							<h3>Entrees</h3>
						</div>
						<?php include('includes/menu-entrees.php'); ?>
					</div>
					<div class="tab-pane fade" id="salads">
						<div class="tab-heading">
							<h3>Salads</h3>
						</div>
						<?php include('includes/menu-salads.php'); ?>
					</div>
					<div class="tab-pane fade" id="burgers">
						<div class="tab-heading">
							<h3>Sandwiches &amp; Burgers</h3>
						</div>
						<?php include('includes/menu-burgers.php'); ?>
					</div>
					<div class="tab-pane fade" id="grill">
						<div class="tab-heading">
							<h3>From the Grill</h3>
						</div>
						<?php include('includes/menu-grill.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('includes/footer.php'); ?>