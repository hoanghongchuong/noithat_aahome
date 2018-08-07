<?php
include('xtpl/xtemplate.class.php');

include('modules/head.class.php');

include('modules/button.class.php');
include('modules/alertbox.class.php');
include('modules/counter.class.php');
include('modules/divider.class.php');
include('modules/faq.class.php');
include('modules/heading.class.php');
include('modules/iconbox.class.php');
include('modules/icon.class.php');
include('modules/image_slider.class.php');
include('modules/pricing_table.class.php');
include('modules/tab.class.php');
include ('modules/list-item.class.php');
include ('modules/testimonial.class.php');
include ('modules/accordion.class.php');

include('sections/media.class.php');
include('sections/header.class.php');
include('sections/footer.class.php');
include('sections/breadcrumb.class.php');
include('sections/pagination.class.php');
include('sections/banner.class.php');
include('sections/shop.class.php');
include('sections/section.class.php');
include('sections/sidebar.class.php');

//init
$head = new Head();
$header = new Header();
$banner = new Banner();
$breadcrumb = new Breadcrumb();
$pagination = new Pagination();
$footer = new Footer();

//shortcodes
$alertbox = new AlertBox();

$accordion = new Accordion();

$button = new Button();

$slider = new ImageSlider();

$divider = new Divider();

$counter = new Counter();

$iconbox = new Iconbox();

$listItem  = new ListItem();

$testimonial = new Testimonial();

$faq = new Faq();

$tab = new Tab();

$section = new Section();

$heading = new Heading();

$shop = new Shop();

$sidebar = new Sidebar();



