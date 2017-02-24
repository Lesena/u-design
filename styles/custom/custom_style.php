<?php 
/*
Theme Name: U-Design
Theme URI: http://themeforest.net/item/udesign-wordpress-theme/253220?ref=internq7
Description: CSS for the 'U-Design Theme'.
Version: 1.7.0
Author: Andon
Author URI: http://themeforest.net/user/internq7/portfolio?ref=internq7
*/

$root = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}

global $style;
// get the current color scheme subdirectory
$style = ( $udesign_options['color_scheme'] ) ? "style{$udesign_options['color_scheme']}": "style1";
$logo_img_url = ( $udesign_options['custom_logo_img'] ) ? $udesign_options['custom_logo_img'] : get_bloginfo('template_url').'/styles/'.$style.'/images/logo.png';

$font_family = preg_replace('/:.*/','', $udesign_options['font_family']);
$title_headings_font_family = preg_replace('/:.*/','', $udesign_options['title_headings_font_family']);
$top_nav_font_family = preg_replace('/:.*/','', $udesign_options['top_nav_font_family']);


header("Content-type: text/css");

/* Styles Other Than "Custom Colors" section
------------------------------------------------------------------------------*/ ?>
/* Custom Styles */
body { font-family:'<?php echo $font_family; ?>'; }
body { font-size:<?php echo $udesign_options['font_size']; ?>px; }
h1, h2, h3, h4, h5, h6, #slogan, .single-post-categories { font-family:'<?php echo $title_headings_font_family; ?>'; }
#top-elements { height:<?php echo $udesign_options['top_area_height']; ?>px; }
#logo h1 a, #logo .site-name a { background:transparent url( <?php echo esc_url($logo_img_url); ?> ) no-repeat 0 100%; width:<?php echo $udesign_options['logo_width']; ?>px; height:<?php echo $udesign_options['logo_height']; ?>px; }
#slogan { top:<?php echo $udesign_options['slogan_distance_from_the_top']; ?>px; left:<?php echo $udesign_options['slogan_distance_from_the_left']; ?>px; }
#slogan { font-size:<?php echo $udesign_options['slogan_font_size']; ?>px; }
.js_on .cufon-on #slogan { font-size:<?php echo ($udesign_options['slogan_font_size']+2); ?>px; }
#navigation-menu { font-family:'<?php echo $top_nav_font_family; ?>'; }
#navigation-menu { font-size:<?php echo $udesign_options['top_nav_font_size']; ?>px; }
<?php if ($udesign_options['remove_border_under_menu'] == 'yes') : ?>
    #main-menu { background:none; }
<?php endif; ?>
<?php $heading_font_size_coefficient = $udesign_options['heading_font_size_coefficient']; ?>
h1 {font-size:<?php echo (1.883 * $heading_font_size_coefficient); ?>em !important; }
h2 {font-size:<?php echo (1.667 * $heading_font_size_coefficient); ?>em !important; }
h3 {font-size:<?php echo (1.5 * $heading_font_size_coefficient); ?>em !important; }
h4 {font-size:<?php echo (1.333 * $heading_font_size_coefficient); ?>em !important; }
h5 {font-size:<?php echo (1.25 * $heading_font_size_coefficient); ?>em !important; }
h6 {font-size:<?php echo (1.083 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on h1 {font-size:<?php echo (2.3 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on h2 {font-size:<?php echo (2.18 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on h3 {font-size:<?php echo (1.883 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on h4 {font-size:<?php echo (1.667 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on h5 {font-size:<?php echo (1.5 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on h6 {font-size:<?php echo (1.333 * $heading_font_size_coefficient); ?>em !important; }

#page-content-title #page-title h1,
#page-content-title #page-title h2,
#page-content-title #page-title h3,
#page-content-title #page-title .single-post-categories {font-size:<?php echo (1.883 * $heading_font_size_coefficient); ?>em !important; }

.js_on .cufon-on #page-content-title #page-title h1,
.js_on .cufon-on #page-content-title #page-title h2,
.js_on .cufon-on #page-content-title #page-title h3,
.js_on .cufon-on #page-content-title #page-title .single-post-categories {font-size:<?php echo (2.3 * $heading_font_size_coefficient); ?>em !important; }

.post-top h1, .post-top h2, .post-top h3 {font-size:<?php echo (1.5 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on .post-top h1, .js_on .cufon-on .post-top h2, .post-top h3 {font-size:<?php echo (1.883 * $heading_font_size_coefficient); ?>em !important; }

#sidebarSubnav h3 {font-size:<?php echo (1.25 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on #sidebarSubnav h3 {font-size:<?php echo (1.5 * $heading_font_size_coefficient); ?>em !important; }

.portfolio-items-wrapper h2 {font-size:<?php echo (1.333 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on .portfolio-items-wrapper h2 {font-size:<?php echo (1.667 * $heading_font_size_coefficient); ?>em !important; }
h2.portfolio-single-column {font-size:<?php echo (1.667 * $heading_font_size_coefficient); ?>em !important; }
.js_on .cufon-on h2.portfolio-single-column {font-size:<?php echo (2.18 * $heading_font_size_coefficient); ?>em !important; }

h3.bottom-col-title {font-size:<?php echo (1.5 * ($heading_font_size_coefficient - 0.1)); ?>em !important; }
.js_on .cufon-on h3.bottom-col-title {font-size:<?php echo (1.883 * ($heading_font_size_coefficient - 0.1)); ?>em !important; }

#gs-header #header-content { width:<?php echo $udesign_options['gs_image_width']; ?>px; }
<?php if ($udesign_options['c1_remove_image_frame'] == 'yes') : ?>
    #c1-slider { background-image:none; width:940px; }
    #c1-slider li { width: 940px; }
    #c1-header .c1-slideshow { padding: 10px 0; }
    .c1-slide-img-wrapper { padding: 13px 0; }
    #c1-shadow { margin:-309px auto 0; }
<?php endif; ?>
#c2-slider .slide-desc h2, #c2-slider .slide-desc { color:#<?php echo $udesign_options['c2_text_color']; ?>; }
#c2-slider .slide-desc h2 { font-size:<?php echo ($udesign_options['c2_slider_text_size']+0.6); ?>em !important; font-family:'<?php echo $font_family; ?>'; line-height:<?php echo $udesign_options['c2_slider_text_line_height']; ?>; }
#c2-slider .slide-desc p, #c2-slider .slide-desc ul { font-size:<?php echo $udesign_options['c2_slider_text_size']; ?>em; line-height:<?php echo $udesign_options['c2_slider_text_line_height']; ?>; }
#c3-slider .sliding-text { color:#<?php echo $udesign_options['c3_text_color']; ?>; font-size:<?php echo $udesign_options['c3_slider_text_size']; ?>em; line-height:<?php echo $udesign_options['c3_slider_text_line_height']; ?>; }

<?php if ($udesign_options['feedback_position_fixed'] == 'yes') : ?>
    #feedback a.feedback { position: fixed; }
<?php endif; ?>

<?php if ($udesign_options['percent_based_column_width'] == 'yes') : ?>
    .one_fourth, .one_third, .one_half, .two_third, .three_fourth { margin-right:4%; }
    .one_fourth { width:22%; }
    .one_third { width:30%; }
    .one_half { width:48%; }
    .two_third { width:65%; }
    .three_fourth { width:74%; }
    .full_width { width:100%; }
<?php endif; ?>
    
<?php
/* Styles from "Custom Colors" section
------------------------------------------------------------------------------*/
if ( $udesign_options['custom_colors_switch'] == 'enable' ) { ?>

body, .post-top h2 a, .post-top h3 a, .posts-counter { color:#<?php echo $udesign_options['body_text_color']; ?>; }
a { color:#<?php echo $udesign_options['main_link_color']; ?>; }
a:hover, .post-top h2 a:hover, .post-top h3 a:hover { color:#<?php echo $udesign_options['main_link_color_hover']; ?>; }
.custom-formatting li.current_page_item > a, .custom-formatting li.current-menu-item > a, .custom-formatting li.current-cat > a, .custom-formatting li.current > a { color: #<?php echo $udesign_options['main_link_color_hover']; ?>; }
.custom-formatting li.current_page_item > a:hover, .custom-formatting li.current-menu-item > a:hover,.custom-formatting li.current-cat > a:hover, .custom-formatting li.current > a:hover { color: #<?php echo $udesign_options['main_link_color']; ?>; }
h1,h2,h3,h4,h5,h6 { color:#<?php echo $udesign_options['main_headings_color']; ?>; }
<?php if ($udesign_options['top_bg_img'] != '') : ?>
    #top-wrapper { background: url("<?php echo $udesign_options['top_bg_img']; ?>") <?php echo $udesign_options['top_bg_img_repeat']; ?> scroll <?php echo $udesign_options['top_bg_img_position_horizontal']; ?> <?php echo $udesign_options['top_bg_img_position_vertical']; ?> #<?php echo $udesign_options['top_bg_color']; ?>; }
<?php else : ?>
    #top-wrapper { background-color:#<?php echo $udesign_options['top_bg_color']; ?>; }
<?php endif; ?>
#slogan, #top-elements .phone-number, #top-elements .social_media_title, #search input.blur, #search input.inputbox_focus { color:#<?php echo $udesign_options['top_text_color']; ?>; }
#slogan{ color:#<?php echo $udesign_options['top_text_color']; ?>; }
<?php if ($udesign_options['header_bg_img'] != '') : ?>
    #gs-header, #piecemaker-header, #c1-header, #c2-header, #c3-header { background: url("<?php echo $udesign_options['header_bg_img']; ?>") <?php echo $udesign_options['header_bg_img_repeat']; ?> scroll <?php echo $udesign_options['header_bg_img_position_horizontal']; ?> <?php echo $udesign_options['header_bg_img_position_vertical']; ?> #<?php echo $udesign_options['header_bg_color']; ?>; }
<?php else : ?>
    #gs-header, #piecemaker-header, #c1-header, #c2-header, #c3-header { background-color:#<?php echo $udesign_options['header_bg_color']; ?>; }
<?php endif; ?>
#navigation-menu ul.sf-menu > li > a > span { color:#<?php echo $udesign_options['top_nav_link_color']; ?>; }
#navigation-menu ul.sf-menu > li.current-menu-item > a > span, #navigation-menu ul.sf-menu > li.current_page_item > a > span { color:#<?php echo $udesign_options['top_nav_active_link_color']; ?>; }
#navigation-menu ul.sf-menu > li.current-menu-item > a > span:hover, #navigation-menu ul.sf-menu > li.current_page_item > a > span:hover { color:#<?php echo $udesign_options['top_nav_hover_link_color']; ?>; }
#navigation-menu ul.sf-menu > li > a:hover span { color:#<?php echo $udesign_options['top_nav_hover_link_color']; ?>; }
#page-content-title #page-title h1, .js_on .cufon-on #page-content-title #page-title h1,
#page-content-title #page-title h2, .js_on .cufon-on #page-content-title #page-title h2,
#page-content-title #page-title h3, .js_on .cufon-on #page-content-title #page-title h3,
#page-content-title #page-title .single-post-categories, .js_on .cufon-on #page-content-title #page-title .single-post-categories { color:#<?php echo $udesign_options['page_title_color']; ?>; }
<?php if ($udesign_options['page_title_bg_img'] != '') : ?>
    #page-content-title { background: url("<?php echo $udesign_options['page_title_bg_img']; ?>") <?php echo $udesign_options['page_title_bg_img_repeat']; ?> scroll <?php echo $udesign_options['page_title_bg_img_position_horizontal']; ?> <?php echo $udesign_options['page_title_bg_img_position_vertical']; ?> #<?php echo $udesign_options['page_title_bg_color']; ?>; }
<?php else : ?>
    #page-content-title { background-color:#<?php echo $udesign_options['page_title_bg_color']; ?>; }
<?php endif; ?>
<?php if ($udesign_options['main_content_bg_img'] != '') : ?>
    #home-page-content, #page-content { background: url("<?php echo $udesign_options['main_content_bg_img']; ?>") <?php echo $udesign_options['main_content_bg_img_repeat']; ?> scroll <?php echo $udesign_options['main_content_bg_img_position_horizontal']; ?> <?php echo $udesign_options['main_content_bg_img_position_vertical']; ?> #<?php echo $udesign_options['main_content_bg']; ?>; }
<?php else : ?>
    #home-page-content, #page-content { background-color:#<?php echo $udesign_options['main_content_bg']; ?>; }
<?php endif; ?>
h3.before_cont_title { color:#<?php echo $udesign_options['widget_title_color']; ?>; }
#before-content { color:#<?php echo $udesign_options['widget_text_color']; ?>; }
<?php if ($udesign_options['home_page_before_content_bg_img'] != '') : ?>
    #before-content { background: url("<?php echo $udesign_options['home_page_before_content_bg_img']; ?>") <?php echo $udesign_options['home_page_before_content_bg_img_repeat']; ?> scroll <?php echo $udesign_options['home_page_before_content_bg_img_position_horizontal']; ?> <?php echo $udesign_options['home_page_before_content_bg_img_position_vertical']; ?> #<?php echo $udesign_options['widget_bg_color']; ?>; }
<?php else : ?>
    #before-content { background-color:#<?php echo $udesign_options['widget_bg_color']; ?>; }
<?php endif; ?>
<?php if ($udesign_options['bottom_bg_img'] != '') : ?>
    #bottom-bg { background: url("<?php echo $udesign_options['bottom_bg_img']; ?>") <?php echo $udesign_options['bottom_bg_img_repeat']; ?> scroll <?php echo $udesign_options['bottom_bg_img_position_horizontal']; ?> <?php echo $udesign_options['bottom_bg_img_position_vertical']; ?> #<?php echo $udesign_options['bottom_bg_color']; ?>; }
<?php else : ?>
    #bottom-bg { background: none repeat scroll 0 0 #<?php echo $udesign_options['bottom_bg_color']; ?>; }
<?php endif; ?>
h3.bottom-col-title { color: #<?php echo $udesign_options['bottom_title_color']; ?>; }
#bottom, #bottom .textwidget, #bottom #wp-calendar, #bottom .posts-counter { color: #<?php echo $udesign_options['bottom_text_color']; ?>; }
#bottom a { color: #<?php echo $udesign_options['bottom_link_color']; ?>; }
#bottom a:hover { color: #<?php echo $udesign_options['bottom_hover_link_color']; ?>; }
#bottom .custom-frame, #bottom .small-custom-frame { border: 1px solid #EAEAEA; }
h3.bottom-col-title, #bottom ul.small-thumb li, #bottom .widget_recent_entries li a, #bottom .widget_categories li a, #bottom .widget_pages li a, #bottom .widget_subpages li a, #bottom .widget_archive li a, #bottom .widget_links li a, #bottom .widget_rss li a, #bottom .widget_meta li a, #bottom .loginform li a, #bottom .widget_nav_menu li a {
    background: url("../style1/images/heading_underline.png") repeat-x scroll 0 100% transparent;
}
#bottom .widget_recent_comments li { background: url("../style1/images/heading_underline.png") repeat-x scroll 0 100% transparent; }
<?php if ($udesign_options['footer_bg_img'] != '') : ?>
    #footer-bg { background: url("<?php echo $udesign_options['footer_bg_img']; ?>") <?php echo $udesign_options['footer_bg_img_repeat']; ?> scroll <?php echo $udesign_options['footer_bg_img_position_horizontal']; ?> <?php echo $udesign_options['footer_bg_img_position_vertical']; ?> #<?php echo $udesign_options['footer_bg_color']; ?>; }
<?php else : ?>
    #footer-bg { background: url("../common-images/home-page-content-top.png") repeat-x scroll 50% 0 #<?php echo $udesign_options['footer_bg_color']; ?>; }
<?php endif; ?>
body { background-color: #<?php echo $udesign_options['footer_bg_color']; ?>; }
#footer, #footer_text { color: #<?php echo $udesign_options['footer_text_color']; ?>; }
#footer a, #footer_text a { color: #<?php echo $udesign_options['footer_link_color']; ?>; }
#footer a:hover, #footer_text a:hover { color: #<?php echo $udesign_options['footer_hover_link_color']; ?>; }

<?php if ($udesign_options['one_continuous_bg_img'] != '') : 
    $one_continuous_bg_img_fixed = ($udesign_options['one_continuous_bg_img_fixed'] == 'yes') ? 'fixed' : 'scroll';
    $one_continuous_bg_img_with_other_bg_imgs = ($udesign_options['one_continuous_bg_img_with_other_bg_imgs'] == 'yes') ? 'background-color:transparent;' : 'background:none;'; ?>
    body { background: url("<?php echo $udesign_options['one_continuous_bg_img']; ?>") <?php echo $udesign_options['one_continuous_bg_img_repeat']; ?> <?php echo $one_continuous_bg_img_fixed; ?>  <?php echo $udesign_options['one_continuous_bg_img_position_horizontal']; ?> <?php echo $udesign_options['one_continuous_bg_img_position_vertical']; ?> #<?php echo $udesign_options['top_bg_color']; ?>; }
    #wrapper-1, #top-wrapper, #gs-header, #piecemaker-header, #c1-header, #c2-header, #c3-header,
    #page-content-title, #home-page-content, #page-content, #before-content, #bottom-bg, #footer-bg { <?php echo $one_continuous_bg_img_with_other_bg_imgs; ?> }
<?php endif; ?>

<?php
}
