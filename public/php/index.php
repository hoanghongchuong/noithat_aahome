<?php
include 'classes/classes.php';

//html
$head->render('Home');
$header->class_header = '';
$header->render();
?>

    <div class="vk-home vk-home--slider vk-slider vk-slider--style-2 vk-banner vk-slider--slider-2" data-slider="home">
        <div class="_item">
            <img src="images/slider-1.jpg" alt="">
        </div>

        <div class="_item">
            <img src="images/slider-1.jpg" alt="">
        </div>
    </div>

    <div class="vk-home vk-home--about">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Tại sao chọn chúng tôi ?</h2>
                <div class="vk-home__title-sub">
                    <p>
                        Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu <br> thật
                        kĩ trước khi quyết định, cần thống nhất về mặt chi phí
                    </p>
                </div>
            </div>


            <div class="vk-service__list row">

                <?php $listItem->service_item(); ?>

            </div>
        </div>

    </div>

    <div class="vk-home vk-home--service">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Dịch vụ</h2>
                <div class="vk-home__title-sub">
                    <p>
                        Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu thật kĩ
                        trước khi quyết định, cần
                        <br>thống nhất về mặt chi phí, chất liệu với công ty thi công nội thất trọn gói trước khi thuê
                        họ.
                    </p>
                </div>
            </div>


            <div class="vk-service__list row" data-layout="masonry">


            <?php $listItem->service_item_2() ?>



            </div>
        </div>

    </div>


    <div class="vk-home vk-home--project">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Dự án tiêu biểu</h2>
                <div class="vk-home__title-sub">
                    <p>
                        Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu thật kĩ
                        trước khi quyết định, cần
                        <br>thống nhất về mặt chi phí, chất liệu với công ty thi công nội thất trọn gói trước khi thuê
                        họ.
                    </p>
                </div>
            </div>


            <div class="vk-home__nav nav">
                <a class="active" data-toggle="tab" href="#opt1">Biệt thự</a>
                <a class="" data-toggle="tab" href="#opt2">Nhà phố liền kề</a>
                <a class="" data-toggle="tab" href="#opt3">Khách sạn, nhà hàng</a>
                <a class="" data-toggle="tab" href="#opt4">Văn phòng</a>
                <a class="" data-toggle="tab" href="#opt5">Home stay</a>
                <a class="" data-toggle="tab" href="#opt6">Chung cư</a>
            </div>
            <div class="tab-content">
                <div id="opt1" class="tab-pane fade show active">
                    <div class="vk-project__list row">
                        <?php
                        $title1 = 'Những cách thiết kế nội thất khiến ngôi nhà rộng rãi hơn';
                        $content1 = 'Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp';

                        $listItem->projectItem__data = array(
                            ['p-1.jpg', 'VP- Hoàng Quốc Việt', $content1],
                            ['p-2.jpg', 'VP- Văn phòng Kaopiz', $content1],
                            ['p-3.jpg', 'VP- Biệt thự Mr. Huy', $content1],
                            ['p-4.jpg', 'Nhà hàng ẩm thực quê ta', $content1],

                            ['p-5.jpg', 'VP- Hoàng Quốc Việt', $content1],
                            ['p-6.jpg', 'VP- Văn phòng Kaopiz', $content1],
                            ['p-7.jpg', 'VP- Biệt thự Mr. Huy', $content1],
                            ['p-8.jpg', 'Nhà hàng ẩm thực quê ta', $content1],

                            ['p-9.jpg', 'VP- Hoàng Quốc Việt', $content1],
                            ['p-10.jpg', 'VP- Văn phòng Kaopiz', $content1],
                            ['p-11.jpg', 'VP- Biệt thự Mr. Huy', $content1],
                            ['p-12.jpg', 'Nhà hàng ẩm thực quê ta', $content1],

                            ['p-13.jpg', 'VP- Hoàng Quốc Việt', $content1],
                            ['p-14.jpg', 'VP- Văn phòng Kaopiz', $content1],
                            ['p-15.jpg', 'VP- Biệt thự Mr. Huy', $content1],
                            ['p-16.jpg', 'Nhà hàng ẩm thực quê ta', $content1],
                        );
                        $listItem->project_item()
                        ?>
                    </div>
                </div>
                <div id="opt2" class="tab-pane fade">
                    <div class="vk-project__list row">
                        <?php  $listItem->project_item(); ?>
                    </div>

                </div>
                <div id="opt3" class="tab-pane fade">
                    <div class="vk-project__list row">
                        <?php  $listItem->project_item(); ?>
                    </div>
                </div>
                <div id="opt4" class="tab-pane fade">
                    <div class="vk-project__list row">
                        <?php  $listItem->project_item(); ?>
                    </div>
                </div>
                <div id="opt5" class="tab-pane fade">
                      <div class="vk-project__list row">
                        <?php  $listItem->project_item(); ?>
                    </div>
                </div>
                <div id="opt6" class="tab-pane fade">
                    <div class="vk-project__list row">
                        <?php  $listItem->project_item(); ?>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="vk-home vk-home--material">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Vật liệu dự án</h2>
            </div>
        </div>

            <div class="row no-gutters vk-project__list vk-slider" data-slider="material">
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

    <div class="vk-home vk-home--testimonial">
        <div class="container">
            <div class="vk-home__title-box pb-2">
                <h2 class="vk-home__title">Khách hàng nói về chúng tôi</h2>
                <div class="vk-home__title-sub">
                    <p>
                        Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu <br> thật
                        kĩ trước khi quyết định, cần thống nhất về mặt chi phí
                    </p>
                </div>
            </div>


            <div class="vk-partner__list row vk-slider vk-slider--style-1" data-slider="partner">

                <?php $listItem->partner_item(); ?>

            </div>
        </div>

    </div>


<?php
//Footer
$footer->render();

//srcipt
include 'template/modules/end.temp.php';

