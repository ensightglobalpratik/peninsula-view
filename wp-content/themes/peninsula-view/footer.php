<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peninsula_View
 */
    $copyright_content=get_option_value('copyright_content');
    $footer_image=get_option_value('footer_image');
    $footer_image_link=get_option_value('footer_image_link');
    $bottom_content=get_option_value('bottom_content');    
?>
<!-- Footer Strip Start -->
<div class="footer-strip">
    <div class="container">
        <div class="row">
            <?php
                echo (!empty($copyright_content)?$copyright_content:'');
                echo (!empty($footer_image_link)?'<a href="'.$footer_image_link.'"><img src="'.$footer_image['url'].'" alt="'.$footer_image['alt'].'"></a>':'');
            ?>            
        </div>
    </div>
</div>
<!-- Footer Strip End -->
<!-- Footer Section Strat-->
<?php 
    echo (!empty($bottom_content)?'<footer class="footer-sec"> <div class="container">'.$bottom_content.'</div> </footer>':'');
?>
<!-- Footer Section End-->
<?php wp_footer(); ?>
</div>
</body>
</html>
