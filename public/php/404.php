<?php
include 'classes/classes.php';

//html
$head->render('blog');
$header->class_header = '';
$header->render();

?>
<div class="vk-404">
    <div class="container">
        <div class="vk-404__content">
            <img src="images/404.png" alt="">
            <div class="vk-404__button">
                <a href="index.php" class="vk-btn vk-btn--outline-white mt-5">Trang chủ <i class="fa fa-angle-right"></i></a>

            </div>
        </div>
    </div>
</div>


<?php
//Footer
$footer->render();

//srcipt
include 'template/modules/end.temp.php';

