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
		<nav id="mobile-nav-fallback">
			<ul class="nav nav-stacked">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="menu.html">Menu</a></li>
				<li><a href="events.html">Events</a></li>
				<li><a href="photos.html">Photos</a></li>
				<li><a href="contactus.html">Contact Us</a></li>
			</ul>
		</nav>
	</footer>
	<div id="directions" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Directions</h4>
				</div>
				<div class="modal-body">
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=stella's+grill+austell+ga&amp;aq=&amp;sll=43.871754,-72.451472&amp;sspn=3.401564,8.453979&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;iwloc=A&amp;ll=33.86638,-84.625964&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=stella's+grill+austell+ga&amp;aq=&amp;sll=43.871754,-72.451472&amp;sspn=3.401564,8.453979&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;iwloc=A&amp;ll=33.86638,-84.625964&amp;spn=0.006295,0.006295" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="newsletter-form" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Join Club Stella's!</h4>
				</div>
				<div class="modal-body">
					<form class="form">
						<div class="form-group">
							<label for="email">Email<span class="small">*</span></label>
							<input type="email" class="form-control input-lg" id="email" placeholder="example@email.com" required>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-lg">Join!</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
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