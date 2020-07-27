		<section class="gift container fix pd100">
			<h1 class="common_heding">gift registation</h1>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
			<div class="gift_brand owl-carousel">
				<div class="single_logo">
					<img src="asset/img/logo/logo-1.png" alt="logo" />
				</div>
				<div class="single_logo">
					<img src="asset/img/logo/logo-2.png" alt="logo" />
				</div>
				<div class="single_logo">
					<img src="asset/img/logo/logo-3.png" alt="logo" />
				</div>
				<div class="single_logo">
					<img src="asset/img/logo/logo-4.png" alt="logo" />
				</div>
				<div class="single_logo">
					<img src="asset/img/logo/logo-1.png" alt="logo" />
				</div>
			</div>
		</section>
<!--FOOTER SECTION START-->
		<footer id="blog" class="footer_area">
			<div class="footer container fix pd100">
				<div class="footer_content_area">
					<div class="footer_content">
						<h1>thank you</h1>
						<p>for being with us</p>
					</div>
				</div>
			</div>
		</footer>
<!-- JAVASCRIPT PLUGIN -->
		<script type="text/javascript" src="asset/js/jquery.min.js"></script>	
		<script type="text/javascript" src="asset/js/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="asset/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="asset/js/typed.js"></script>
		<script type="text/javascript" src="asset/js/owl.carousel.js"></script>
		<script type="text/javascript" src="asset/js/jquery.smoothscroll.min.js"></script>
		<script type="text/javascript">
		//active link
		$(function(){
    $('#navbar a').click(function () {
        $('#navbar a').removeClass('active');
        $(this).addClass('active');
     });
 });
		//smoth scrolling
		$(function() {
		$('.scroll').smoothScroll(500);
		});
		//count down
			  $("#countdown")
			  .countdown("2019/01/01", function(event) {
			    $('.months').text(
				  event.strftime('%m')
				);
				$('.days').text(
				  event.strftime('%d')
				);
				$('.hours').text(
				  event.strftime('%H')
				);
				$('.min').text(
				  event.strftime('%M')
				);
				$('.sec').text(
				  event.strftime('%S')
				);
			  });
			  
		//type	  
			  var typed = new Typed(".element", {
				strings: [
					"save our date",
					"don't forget..."
					],
			typeSpeed:50,
			backSpeed:50,
			loop:true
		});
		//slide bar
		$(document).ready(function(){
			$('.gift_brand').owlCarousel({
			items:4,
			margin:10,
			autoplay:true,
			loop:true
			});
		});
		</script>
	</body>
</html>