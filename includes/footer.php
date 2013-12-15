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
						<ul class="nav navbar-nav navbar-right social-nav">
							<li><a href="https://www.facebook.com/pages/Stellas-Neighborhood-Grill/126483137434242?sk=wall" target="_blank">f</a></li>
							<li><a href="https://twitter.com/stellasgrill" target="_blank">l</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</footer>
	<script type="text/javascript">
		$(function(){
			$('html').removeClass('no-js');
			var url = window.location.pathname;
			var filename = url.substring(url.lastIndexOf('/')+1);
			var part = filename.split(".");
			if(part[0] != ''){
				filename = (part[0] == 'employment') ? 'contactus' : part[0];
				$('nav .nav li').removeClass('active');
				$('nav .nav a[href*="'+filename+'"]').parent().addClass('active');
			}
			//check if on homepage
			var $homeElement = $('#main.home');
			var $navbar = $('nav.navbar-fixed-top');
			var $window = $(window);
			function ctrlNavFade(){
				if($navbar.hasClass('out') && $window.scrollTop() > 10){
					$navbar.removeClass('out');
				}else if(!$navbar.hasClass('out') && $window.scrollTop() < 10){
					$navbar.addClass('out');
				}
			}
			if($homeElement.length > 0){
				$(document).on('scroll', ctrlNavFade);
				ctrlNavFade();
			}
		});
	</script>
</body>
</html>