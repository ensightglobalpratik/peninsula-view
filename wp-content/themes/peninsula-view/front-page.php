<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header(); 
?>

<!-- Hero Banner Slider Section Start-->
<section class="banner-sec">
	<div id="banner-slider">
		<div class="banner-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/carousel-banner-2.jpg)">
			<div class="container">
				<div class="row">
					<div class="banner-left-detail">
						<img src="<?php echo get_template_directory_uri(); ?>/images/its-your-time.svg" alt="It's Your Time">
						<p>Lorem ipsum dolor amet kickstarter messenger bag chartreuse.</p>
					</div>
					<a href="#" title="Display Suit" class="banner-right-detail"><img src="<?php echo get_template_directory_uri(); ?>/images/badge-brown.svg" alt="Display Suit"></a>
				</div>
				<a href="#" class="banner-down-arrow"><i class="far fa-arrow-down"></i></a>
			</div>
		</div>
	</div>
</section>
<!-- Hero Banner Slider Section End-->

<!-- Mid Content Strip Section Start -->
<section class="mid-content-strip-sec">
	<div class="container">
		<a href="">display suite now open  |  tue - sun, 11am - 3pm <i class="fas fa-chevron-down"></i></a>
	</div>
</section>
<!-- Mid Content Strip Section End -->


<!-- Community Section Start -->
<section class="community-sec">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<h4>community</h4>
				<h2>Edison bulb hell of woke community pabst hella jang.</h2>
				<p>Ugh pickled meh bushwick, humblebrag kogi vegan crucifix. Gentrify hoodie kitsch schlitz woke squid normcore cronut pork belly. Fran zen wayfarers austin stumptown normcore.</p>
			</div>
			<div class="col-8">
			</div>
		</div>
	</div>
</section>
<!-- Community Section End -->

<!-- Full Width Banner Strat -->
<div class="full-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-17.jpg)"></div>
<!-- Full Width Banner End -->

<!-- Apartments Section Start -->
<section class="apartments-sec">
	<div class="container">
		<div id="apartments-slider">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/box-10.jpg" alt="Apartments">
					<h4>master bathroom</h4>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/box-10.jpg" alt="Apartments">
					<h4>master bathroom</h4>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/box-10.jpg" alt="Apartments">
					<h4>master bathroom</h4>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/box-10.jpg" alt="Apartments">
					<h4>master bathroom</h4>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/box-10.jpg" alt="Apartments">
					<h4>master bathroom</h4>
				</div>
		</div>
		<div class="apartments-details">
			<h4>apartments</h4>
			<div class="row">
				<div class="col-4">
					<h2>Aesthetic mumblecore selvage woRK readymade.</h2>
				</div>
				<div class="col-4">
					<div class="apt-info">
						<p>Everyday carry subway tile banjo wolf, prism XOXO lyft forage. Hella letterpress blue bottle, artisan food truck hexagon tilde before they sold adaptogen fashion.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="apt-features-list">
						<p><strong>features</strong></p>
						<ul>
							<li>Ugh pickled meh bushwick</li>
							<li>Vinyl beard meditation tote bag</li>
							<li>Organic banjo small batch</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Apartments Section End -->


<!-- Location Section Strat -->
<section class="location-sec">
	<div class="container">
		<div class="row">
			<div class="col-8">
			</div>
			<div class="col-4">
				<h4>location</h4>
				<h2>Location street art next level bicycle rights.</h2>
				<p>Kitsch ennui ramps, waistcoat cray pabst vaporware mumblecore bitters YOLO scenester ugh four dollar toast bespoke. Ethical VHS kombucha lomo street art ramps. Marfa meditation food truck vinyl air plant. Vexillologist messenger bag raw denim occupy. Lyft mixtape meditation fashion axe photo booth, raw hammock crucifix migas.</p>
			</div>
		</div>
	</div>
</section>
<!-- Location Section End -->

<!-- Full Width Banner Strat -->
<div class="full-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-17-1.jpg)"></div>
<!-- Full Width Banner End -->

<?php
get_footer();
