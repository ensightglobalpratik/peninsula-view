<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peninsula_View
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
    $header_logo=get_option_value('header_logo');
    $call_us_button_label=get_option_value('call_us_button_label');
    $call_us_button_link=get_option_value('call_us_button_link');
    $enquire_button_label=get_option_value('enquire_button_label');
    $enquire_button_link=get_option_value('enquire_button_link');
?>    
<div class="wrapper">
	<header id="header">
		<div class="container">
			<div class="row">
                            <?php echo (!empty($header_logo)?'<a href="'.home_url().'" class="logo" title="Peninsula View"><img src="'.$header_logo['url'].'" alt="'.$header_logo['alt'].'"></a>':'');?>
                            <a href="#" class="mob-logo" title="Peninsula View"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-peninsula-view-2.svg" alt="Peninsula View"></a>

				<div class="header-right-sec">
					<?php 
                                            wp_nav_menu(array('menu_class' => 'enumenu_ul menu', 'menu' => 'Main Menu'));
                                            echo (!empty($call_us_button_link)?'<a href="'.$call_us_button_link.'" title="'.$call_us_button_label.'" class="call-btn">'.$call_us_button_label.'</a>':'');
                                            echo (!empty($enquire_button_link)?'<a href="'.$enquire_button_link.'" title="'.$enquire_button_label.'" class="btn enq-btn">'.$enquire_button_label.'</a>':'');
					?>
				</div>
			</div>
		</div>
	</header>
        <?php
            $banner_panel_show_hide=get_field('banner_panel_show_hide');
            $add_banner_slider=get_field('add_banner_slider');
            if(!empty($add_banner_slider) && $banner_panel_show_hide==1):
        ?>
        <!-- Hero Banner Slider Section Start-->
                <section class="banner-sec">
                    <div id="banner-slider">
                        <?php
                            foreach($add_banner_slider as $row):
                                $banner_background_image=$row['banner_background_image'];
                                $banner_left_image=$row['banner_left_image'];
                                $banner_left_content=$row['banner_left_content'];
                                $banner_right_image=$row['banner_right_image'];
                                $banner_image_link=$row['banner_image_link'];
                                $down_arrow_link=$row['down_arrow_link'];
                        ?>
                                    <div>
                                        <div class="banner-bg" style="background-image: url(<?php echo $banner_background_image['url']; ?>)">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="banner-left-detail">
                                                        <?php echo (!empty($banner_left_image)?'<img src="'.$banner_left_image['url'].'" alt="'.$banner_left_image['alt'].'">':'');?>
                                                        <?php echo (!empty($banner_left_content)? $banner_left_content :'');?>
                                                    </div>
                                                    <?php echo (!empty($banner_image_link)? '<a href="'.$banner_image_link.'" title="Display Suit" class="banner-right-detail"><img src="'.$banner_right_image['url'].'" alt="'.$banner_right_image['alt'].'"></a>' :'');?>
                                                    
                                                </div>
                                                <?php echo (!empty($down_arrow_link)? '<a href="'.$down_arrow_link.'" class="banner-down-arrow"><i class="far fa-arrow-down"></i></a>' :'');?>
                                                
                                            </div>
                                        </div>
                                    </div>
                        <?php endforeach;?>
                    </div>
                </section>
        <?php endif;?>
        <!-- Hero Banner Slider Section End-->    
