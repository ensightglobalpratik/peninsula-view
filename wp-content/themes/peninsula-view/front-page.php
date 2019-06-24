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

    $community_panel_show_hide=get_field('community_panel_show_hide');    
        if(!empty($community_panel_show_hide==1)):
            $highlighted_text_com=get_field('highlighted_text_com');
            $panel_link_com=get_field('panel_link_com');
            $section_title=get_field('section_title');
            $heading_com=get_field('heading_com');
            $content_com=get_field('content_com');
            $image_grid_com_group=get_field('image_grid_com_group');
                if($panel_link_com):
                    $panel_link_com=$panel_link_com;
                else:
                    $panel_link_com="#display";
                endif;
?>  
                <!-- Mid Content Strip Section Start -->
                <?php if(!empty($panel_link_com)):?>
                            <section class="mid-content-strip-sec">
                                <div class="container">
                                    <a href="<?php echo $panel_link_com;?>"><?php echo $highlighted_text_com;?><i class="fas fa-chevron-down"></i></a>
                                </div>
                            </section>
                <?php endif;?>
                <!-- Mid Content Strip Section End -->
                <?php
                    $strtolower=strtolower($section_title);
                    if(!empty($strtolower)):
                        $strtolower=$strtolower;
                    else:
                        $strtolower="community";
                    endif;
                ?>
                <?php if($section_title || $heading_com || $content_com || $image_grid_com_group):?>
                        <!-- Community Section Start -->
                            <section class="community-sec" id="<?php echo $strtolower;?>">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="community-content">
                                                <?php echo (!empty($section_title)?'<h4>'.$section_title.'</h4>':'');?>
                                                <?php echo (!empty($heading_com)?'<h2>'.$heading_com.'</h2>':'');?>
                                                <?php echo (!empty($content_com)?$content_com:'');?>
                                            </div>
                                        </div>
                                        <?php if(!empty($image_grid_com_group)):?>
                                                    <div class="col-8">
                                                        <div class="community-img-outer row">
                                                            <div class="community-first-col">
                                                                <?php echo (!empty($image_grid_com_group['image_one']['url'])? '<figure style="background-image: url('.$image_grid_com_group['image_one']['url'].')"></figure>' : '');?>
                                                                <?php echo (!empty($image_grid_com_group['image_two']['url'])? '<figure style="background-image: url('.$image_grid_com_group['image_two']['url'].')"></figure>' : '');?>
                                                            </div>
                                                            <div class="community-second-col">
                                                                <?php echo (!empty($image_grid_com_group['image_three']['url'])? '<figure style="background-image: url('.$image_grid_com_group['image_three']['url'].')"></figure>' : '');?>
                                                                <?php echo (!empty($image_grid_com_group['image_four']['url'])? '<figure style="background-image: url('.$image_grid_com_group['image_four']['url'].')"></figure>' : '');?>
                                                            </div>
                                                        </div>
                                                    </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </section>
                <?php endif; ?>
        <?php endif; ?>
                    <!-- Community Section End -->

<!-- Full Width Banner Strat -->
<div class="full-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-17.jpg)"></div>
<!-- Full Width Banner End -->

<!-- Apartments Section Start -->
<section class="apartments-sec" id="apartments">
	<div class="container">
		<div id="apartments-slider">
				<div>
					<div class="apt-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10.jpg)"></div>
					<h4>master bathroom</h4>
				</div>
				<div>
					<div class="apt-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10-1.jpg)"></div>
					<h4>master bathroom</h4>
				</div>
				<div>
					<div class="apt-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10.jpg)"></div>
					<h4>master bathroom</h4>
				</div>
				<div>
					<div class="apt-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10-1.jpg)"></div>
					<h4>master bathroom</h4>
				</div>
				<div>
					<div class="apt-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10.jpg)"></div>
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

<!-- Indicative Section Start -->
<section class="indicative-sec">
	<div class="row">
		<div class="col-6 indicative-deatils">
			<h2>INDICATIVE FLOOR PLANS</h2>
			<ul class="ul_accordion">
               <li>
                	<a class="acco_link" href="#">1 Bed + 1 Bath Apartment</a>
                  	<div class="accordion_content">
                  		<ul class="indicative-feature">
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-size.svg" alt="Property Icon">
	                			<p>57 – 64m2</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bed.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bath.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-car.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
                		</ul>
                  		<div class="indicative-details">
                  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                  			<a href="#enquire-sec" class="btn indicative-btn">enquire</a>
                  		</div>
                  	</div>
               </li>
               <li>
                  	<a class="acco_link" href="#">2 Bed + 2 Bath Apartment</a>  
                  	<div class="accordion_content">
                  		<ul class="indicative-feature">
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-size.svg" alt="Property Icon">
	                			<p>57 – 64m2</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bed.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bath.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-car.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
                		</ul>
                  		<div class="indicative-details">
                  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                  			<a href="#enquire-sec" class="btn indicative-btn">enquire</a>
                  		</div>
                  	</div>               
               </li>
               <li>
                  	<a class="acco_link" href="#">3 Bed + 2 Bath Apartment</a>
                  	<div class="accordion_content">
                  		<ul class="indicative-feature">
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-size.svg" alt="Property Icon">
	                			<p>57 – 64m2</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bed.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bath.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-car.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
                		</ul>
                  		<div class="indicative-details">
                  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                  			<a href="#enquire-sec" class="btn indicative-btn">enquire</a>
                  		</div>
                  	</div>
               </li>
               <li>
                  	<a class="acco_link" href="#">2 Bed + 2 Bath Apartment</a>
                  	<div class="accordion_content">
                  		<ul class="indicative-feature">
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-size.svg" alt="Property Icon">
	                			<p>57 – 64m2</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bed.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bath.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-car.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
                		</ul>
                  		<div class="indicative-details">
                  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                  			<a href="#enquire-sec" class="btn indicative-btn">enquire</a>
                  		</div>
                  	</div>
               </li>
               <li>
                  	<a class="acco_link" href="#">3 Bed + 2 Bath Apartment</a>
                  	<div class="accordion_content">
                  		<ul class="indicative-feature">
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-size.svg" alt="Property Icon">
	                			<p>57 – 64m2</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bed.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-bath.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
	                		<li>
	                			<img src="<?php echo get_template_directory_uri(); ?>/images/property-icon-car.svg" alt="Property Icon">
	                			<p>1</p>
	                		</li>
                		</ul>
                  		<div class="indicative-details">
                  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
                  			<a href="#enquire-sec" class="btn indicative-btn">enquire</a>
                  		</div>
                  	</div>
               </li>
            </ul>
		</div>
		<div class="col-6 floor-img">
			<div class="floor-img-wrapper">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/floor-plan-1.svg" alt="Floor Plan">
				</figure>
				<figure>
					<img  class="compass-img" src="<?php echo get_template_directory_uri(); ?>/images/floor-plan-compass.svg" alt="Floor Plan">
				</figure>
			</div>
			<div class="floor-img-wrapper">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/floor-plan-1.svg" alt="Floor Plan">
				</figure>
			</div>
		</div>
	</div>
</section>
<!-- Indicative Section End -->

<!-- Location Section Strat -->
<section class="location-sec" id="location">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<div id="location-slider">
					<div>
						<div class="location-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10-1.jpg)"></div>
						<h4>Mornington Peninsula</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					</div>
					<div>
						<div class="location-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10.jpg)"></div>
						<h4>Lorem ipsum</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					</div>
					<div>
						<div class="location-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10-1.jpg)"></div>
						<h4>Mornington Peninsula</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					</div>
					<div>
						<div class="location-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10.jpg)"></div>
						<h4>Lorem ipsum</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					</div>
					<div>
						<div class="location-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-10-1.jpg)"></div>
						<h4>Mornington Peninsula</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="location-details">
					<h4>location</h4>
					<h2>Location street art next level bicycle rights.</h2>
					<p>Kitsch ennui ramps, waistcoat cray pabst vaporware mumblecore bitters YOLO scenester ugh four dollar toast bespoke. Ethical VHS kombucha lomo street art ramps. Marfa meditation food truck vinyl air plant. Vexillologist messenger bag raw denim occupy. Lyft mixtape meditation fashion axe photo booth, raw hammock crucifix migas.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Location Section End -->

<!-- Full Width Banner Strat -->
<div class="full-banner green-overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-17-1.jpg)"></div>
<!-- Full Width Banner End -->


<!-- Display Section Start -->
<section class="desplay-sec" id="display"> 
	<div class="container">
		<div class="row">
			<div class="col-4">
				<h4>display</h4>
				<h2>Display suite now open</h2>
				<p>Offal pickled venmo vaporware mixtape banh mi, humblebrag chicharrones literally thundercats.</p>
				<div class="visit-box">
					<h5>visit us today</h5>
					<p>24 - 28 Moorooduc Highway, Frankston South VIC 3199</p>
					<p><strong>TUES - SUN:</strong> 11AM - 3PM</p>
				</div>
				<div class="contact-box">
					<h5>CONTACT OUR AGENT</h5>
					<p><strong>Eira Dalton</strong></p>
					<span>Property Sales Consultant</span>
					<p><strong>M:</strong> 0432 123 456</p>
				</div>
			</div>
			<div class="col-8">
				<div class="display-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/display-suite.jpg)"></div>
			</div>
		</div>
	</div>
</section>
<!-- Display Section End -->

<!-- Map Section Start -->
<div class="map-sec-strip">
	<div class="container">
		<a href="">view map</a>
	</div>
</div>
<div class="map-sec">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12544.203143995177!2d145.1392694!3d-38.1854944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x22c27f91ecd36ffe!2sBaptcare+Peninsula+View+community!5e0!3m2!1sen!2sin!4v1561019128238!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- Map Section End -->

<!-- Enquire Section Strat -->
<section class="enquire-sec" id="enquire-sec">
	<div class="container">
		<h2>Enquire today</h2>
		<p>Wayfarers humblebrag sartorial stumptown photo booth succulents irony cardigan shabby knausgaard hashtag. Street art gluten-free sartorial.</p>
		<p>For further information please call <strong>13 BAPTCARE (13 22 78)</strong></p>
		<div class="enquire-form">
			<?php echo do_shortcode('[contact-form-7 id="35" title="Enquire Today"]');?>
		</div>
	</div>
</section>
<!-- Enquire Section End -->

<!-- Testimonial SEction Start -->
<section class="testimonial-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-25.PNG)">
	<div class="container">
		<div class="testimonial-content">
			<h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. exercitation ullamc laboris commodo consequat."</h3>
			<p>Gertrude Daniels, Community Resident</p>
		</div>
	</div>
</section>
<!-- Testimonial SEction End -->

<!-- About Section Start -->
<section class="about-sec">
	<div class="container">
		<h4>about baptcare</h4>
		<h2>Building communities ipsum dolor amet</h2>
		<div class="row">
			<div class="col-4">
				<p>Heirloom locavore skateboard cray palo santo tilde chicharrones bespoke DIY woke master cleanse cornhole scenester truffaut. Fixie locavore bespoke butcher gluten-free vinyl, live-edge jianbing. Celiac iPhone whatever kale chips. meggings gastropub knausgaard VHS seitan.</p>
			</div>
			<div class="col-4">
				<p>Pinterest everyday carry mlkshk farm-to-table. Tote bag hell of ugh cloud bread butcher. Pitchfork shabby chic fam banh mi fanny pack kombucha hella. Locavore disrupt fixie, edison bulb salvia bushwick waistcoat la croix bitters kogi.</p>
			</div>
			<div class="col-4">
				<div class="comminities-details">
					<h4>Current Comminities</h4>
					<ul>
						<li><a href="" title="Strathalan"><img src="<?php echo get_template_directory_uri(); ?>/images/strathalan-logo.svg" alt="Navid Sedanghati"></a></li>
						<li><a href="" title="Orchards"><img src="<?php echo get_template_directory_uri(); ?>/images/orchards-logo.svg" alt="Navid Sedanghati"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="further-enquiries">
					<p><strong>For further enquiries please call</strong></p> 
					<h5>1800 BAPTCARE (13 22 78)</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About Section Start -->

<!-- Footer Community Section Strat-->
<section class="footer-community-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/box-28.PNG)">
	<div class="container">
		<div class="row">
			<figure>
				<img class="community-logo" src="<?php echo get_template_directory_uri(); ?>/images/your-community.svg" alt="Your Community">
				<img class="couple-img" src="<?php echo get_template_directory_uri(); ?>/images/sign-off-couple.png" alt="Couple">
			</figure>
		</div>
	</div>
</section>
<!-- Footer Community Section End-->

<?php
get_footer();



