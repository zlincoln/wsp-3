<?php include('includes/header.php'); ?>
<section id="main" class="contact-us">
	<div class="container">
		<div class="row page-heading">
			<div class="col-xs-12">
				<h2>Contact Us!</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<h3>Phone: <a href="tel:17702221331">770.222.1331</a></h3>
				<h4>Send us some email love!</h4>
				<form role="form">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control input-lg" id="name" placeholder="Suzy Q">
					</div>
					<div class="form-group">
						<label for="email">Email<span class="small">*</span></label>
						<input type="email" class="form-control input-lg" id="email" placeholder="example@email.com" required>
					</div>
					<div class="form-group">
						<label for="message">Message<span class="small">*</span></label>
						<textarea class="form-control input-lg" id="message" rows="5" placeholder="Delicious :)" required></textarea>
					</div>
					<div class="checkbox">
						<label for="newsletter">
							<input type="checkbox" id="newsletter" checked> I want to join Club Stella!
						</label>
					</div>
					<button type="submit" class="btn btn-primary btn-block btn-lg">Send!</button>
				</form>
			</div>
			<?php include('includes/sidebar.php'); ?>
		</div>
	</div>
</section>
<?php include('includes/footer.php'); ?>