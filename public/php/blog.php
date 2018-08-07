<?php
include 'classes/classes.php';

//html
$head->render('blog');
$header->class_header = '';
$header->render();
$banner->render();
?>
    <div class="vk-blog__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="vk-blog__title-box">
                        <h1 class="vk-blog__title">Tin tức</h1>
                        <div class="vk-blog__title-sub">
                            <p>
                                Chúng tôi hiểu rõ cả ưu và nhược điểm của từng loại vật liệu để có thể sử dụng chúng một
                                cách
                                hiệu quả nhất nhằm tạo nên những công trình ấn tượng, mang tính thẩm mỹ cao và mang đến
                                sự an
                                tâm, hài lòng cho Quý khách hàng.
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="vk-blog__bot">
    <div class="container">
        <div class="row vk-blog__list">
            <?php $listItem->blogItem(); ?>
        </div>

        <div class="vk-blog__button">
            <a href="#" class="vk-btn vk-btn--outline-yellow-1">XEM THÊM</a>
        </div>
    </div>
</div>


<?php
//Footer
$footer->render();

//srcipt
include 'template/modules/end.temp.php';

