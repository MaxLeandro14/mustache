	<footer>
		<div class="container">
			<hr>
			<div class="rodape">
				
				<p>Agencia Mustache</p>
				<?php
                $args = array(
                        'menu' => 'rodape',
                        'theme_location' => 'footer-menu',
                        'container' => false
                    );
            	wp_nav_menu( $args );
            ?>
			</div>
		</div>
	<?php wp_footer(); ?>

	<script type="text/javascript">
		var btn = document.getElementById('mobile-btn');
		var menu = document.getElementById('menu');

		// Atribui evento de click para o btn
		btn.addEventListener("click", function(){
			console.log('dd')
			btn.classList.toggle('active')
			menu.classList.toggle('active')
		})
	$('.carousell').slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 4,
		slidesToScroll: 4,
		prevArrow:"",
      	nextArrow:"",
		appendDots: $('.slick-slider-dots'),
		responsive: [
			{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
			},
			{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
			},
			{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			}
		]
		});
		$(".next-button-slick").click(function(){
			$(".carousell").slick("slickNext");
		});

		$(".prev-button-slick").click(function(){
		$(".carousell").slick("slickPrev");
		});
    
	</script>
</body>
</html>