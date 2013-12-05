	<footer>
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="navbar-text navbar-left">
							<a href="#">&copy; 2011 Stella's Neighborhood Grill</a>
							<span>All rights reserved</span>
							<span>Dev: <a href="http://zacharylincoln.com" target="_blank">Zachary Lincoln</a></span>
						</div>
						<ul class="nav navbar-nav navbar-right hidden-xs social-nav">
							<li><a href="#">f</a></li>
							<li><a href="#">l</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</footer>
	<script type="text/javascript">
		$(function(){
			var url = window.location.pathname;
			var filename = url.substring(url.lastIndexOf('/')+1);
			var part = filename.split(".");
			if(part[0] != ''){
				filename = (part[0] == 'employment') ? 'contactus' : part[0];
				$('nav .nav li').removeClass('active');
				$('nav .nav a[href*="'+filename+'"]').parent().addClass('active')
			}
		});
	</script>
</body>
</html>