<?php
include 'classes/classes.php';

//html
$head->render('material');
$header->class_header = '';
$header->render();
$banner->render('banner-2.jpg');
?>
    <div class="vk-blog__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="vk-blog__title-box">
                        <h1 class="vk-blog__title">Vật liệu dự án</h1>
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


            <div class="tab-content">
                <div class="tab-pane fade show active" id="home">
                    <div class="row vk-project__list">
                        <?php
                        $content1 = 'Được thành lập bởi nhiều chuyên gia, kiến trúc sư 10 năm kinh nghiệm thực tế và đội ngũ thi công vững vàng, tay nghề cao, AAA HOME luôn có khát vọng tạo nên những công trình độc đáo, đầy sáng tạo';
                        $listItem->projectItem__data = array(
                            ['p-1.jpg', 'Đồ da', $content1],
                            ['p-2.jpg', 'Vải, nỉ', $content1],
                            ['p-3.jpg', 'Sành sứ', $content1],
                            ['p-4.jpg', 'Kim loại', $content1],

                            ['p-5.jpg', 'Gỗ', $content1],
                            ['p-6.jpg', 'Nhựa', $content1],
                            ['p-7.jpg', 'Mẫu', $content1],
                            ['p-8.jpg', 'Mẫu', $content1],

                            ['p-9.jpg', 'Mẫu', $content1],
                            ['p-10.jpg', 'Mẫu', $content1],
                            ['p-11.jpg', 'Mẫu', $content1],
                            ['p-12.jpg', 'Mẫu', $content1],

                            ['p-13.jpg', 'Mẫu', $content1],
                            ['p-14.jpg', 'Mẫu', $content1],
                            ['p-15.jpg', 'Mẫu', $content1],
                            ['p-16.jpg', 'Mẫu', $content1],

                            ['p-17.jpg', 'Mẫu', $content1],
                            ['p-18.jpg', 'Mẫu', $content1],
                        );
                        $listItem->project_item_1();
                        ?>
                    </div>


                </div>

                <div class="tab-pane fade" id="profile">

                    2

                </div>
            </div>


        </div>
    </div>
    <div id="materialContent">
        <div class="vk-material-detail__wrapper" id="test">
            <div class="container">
                <div class="vk-material-detail">
                    <div class="vk-material-detail__for ">
                        <div class="slider-for">

                            <?php

                            for ((int)$i = 0; $i < 18; $i++) {

                                ?>

                                <div class="_item">
                                    <div class="vk-md-item">
                                        <div class="vk-img">
                                            <img src="images/material-detail.jpg" alt="">
                                        </div>
                                    </div>
                                </div><!--./item-->


                                <?php


                            }

                            ?>


                        </div> <!--./slider-->

                        <div class="vk-material-detail__for-nav">
                            <div class="_count _item">1/30</div>
                            <button class="vk-btn  _item" id="prev"><i class="ti-angle-left"></i></button>
                            <button class="vk-btn  _item" id="next"><i class="ti-angle-right"></i></button>
                        </div>
                    </div>


                    <div class="vk-material-detail__nav">
                        <div class="slider-nav">
                            <?php

                            for ((int)$i = 0; $i < 18; $i++) {
                                ?>
                                <div class="_item">
                                    <div class="vk-md-item">
                                        <div class="vk-md-item__brief">
                                            <h3 class="vk-md-item__title">Vải nỉ <?php echo $i ?></h3>
                                            <div class="vk-md-item__text">
                                                <p>
                                                    Được thành lập bởi nhiều chuyên gia, kiến trúc sư 10 năm kinh nghiệm
                                                    thực tế và
                                                    đội ngũ thi công vững vàng, tay nghề cao, AAA HOME luôn có khát vọng
                                                    tạo nên
                                                    những công trình độc đáo, đầy sáng tạo đem đến sự hài lòng cho khách
                                                    hàng. Với
                                                    đam mê mãnh liệt và sự chuyên nghiệp trong bộ máy công ty, AAA HOME
                                                    hướng tới
                                                    chinh phục những khách hàng khó tính nhất, không chỉ trong nước mà
                                                    còn vươn ra
                                                    thế giới
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div><!--./item-->
                                <?php
                            }

                            ?>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade " id="materialDetail" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">


        </div>
    </div>
<?php
//Footer
$footer->render();

//srcipt
include 'template/modules/end.temp.php';

