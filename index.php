<?php include('includes/header.php'); ?>
<section id="banner" class="home">
	<div class="copy-wrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<h2 class="hidden-xs hidden-sm">Stella's Neighborhood Grill</h2>
					<p class="hidden-xs hidden-sm">Serving fresh food, specialty sauces and seasonings</p>
					<p class="hidden-xs hidden-sm">Stella's is a must try for a real taste sensation!</p>
					<a href="menu.html" class="btn btn-primary btn-lg">View Our Menu</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="main" class="home">
	<div class="container">
		<div class="row hidden-xs">
			<div class="col-xs-12 page-heading">
				<h2>Perfection.</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-push-8 col-sm-4 sidebar">
				<?php include('includes/sidebar.php'); ?>
			</div>
			<div class="col-xs-12 col-sm-pull-4 col-sm-8 home-copy">
				<p>For residents of South Cobb who are tired of the same old Tex-Mex or the usual chain restaurant fodder, Stella's Neighborhood Grill is a must try for a real taste sensation. One of South Cobb's newest eateries, Stella's is located at 2810 E. W. Connector in Austell, and is quickly becoming one of the favorite spots in town for lunch and dinner.</p>
				<iframe width="560" height="315" src="//www.youtube.com/embed/HE91bBoka3M" frameborder="0" allowfullscreen></iframe>
				<p>Stella's prides itself on only serving fresh, wholesome food and creating specialty sauces and seasonings for each dish. The homemade barbecue sauce used on the ribs, which are cooked each morning, is a house favorite and has customers clamoring for more. Another menu favorite is Stella's Gocheejong Spicy Shrimp, which is prepared with a sweet and spicy sauce that has all the zing but none of the burn.</p>
				<p>For those with a sweet tooth and who enjoy something extra after their meal, we come back to the display case of desserts that are from our local baker. One slice from any of their massive cakes or pies can easily satisfy two or more people and should not be missed.</p>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(function(){
		$('.home-copy').fitVids();
		$('.home-header .sidebar').addClass('hidden-sm hidden-md hidden-lg').removeClass('hidden-xs col-sm-4');
	});
</script>
<?php include('includes/footer.php'); ?>