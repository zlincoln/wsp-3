<?php include('includes/header.php'); ?>
<section>
	<div class="container">
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
						<?php include('includes/menu-starters.php'); ?>
					</div>
					<div class="tab-pane fade" id="entrees">
						<?php include('includes/menu-entrees.php'); ?>
					</div>
					<div class="tab-pane fade" id="salads">
						<?php include('includes/menu-salads.php'); ?>
					</div>
					<div class="tab-pane fade" id="burgers">
						<?php include('includes/menu-burgers.php'); ?>
					</div>
					<div class="tab-pane fade" id="grill">
						<?php include('includes/menu-grill.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('includes/footer.php'); ?>