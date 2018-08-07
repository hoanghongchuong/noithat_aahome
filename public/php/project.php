<?php
include 'classes/classes.php';

//html
$head->render('project');
$header->class_header = '';
$header->render();
$banner->render('banner-2.jpg');
?>
    <div class="vk-blog__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="vk-blog__title-box">
                        <h1 class="vk-blog__title">Thiết kế & thi công trọn gói</h1>
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

            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <nav class="nav vk-project__nav">
                        <a data-toggle="tab" href="#home" class="active">
                            <span class="_icon">
                                 <img src="images/icon-2-1.png" alt="">
                                <img src="images/icon-2.png" alt="">

                            </span>

                            <span class="_text">Thi công biệt thự cao cấp</span>
                        </a>
                        <a data-toggle="tab" href="#profile" class="">
                            <span class="_icon">
                                <img src="images/icon-3-1.png" alt="">
                                <img src="images/icon-3.png" alt="">
                            </span>
                            <span class="_text">Thi công chung cư</span>
                        </a>
                    </nav>
                </div>
            </div>

        </div>
    </div>

<div class="vk-blog__bot">
    <div class="container">


        <div class="tab-content" >
            <div class="tab-pane fade show active" id="home">
                <div class="row vk-project__list">
                    <?php

                    $listItem->project_item();
                    ?>
                </div>


            </div>

            <div class="tab-pane fade" id="profile">

                <div class="row vk-project__list">
                    <?php

                    $listItem->project_item();
                    ?>
                </div>

            </div>
        </div>




    </div>
</div>


<?php
//Footer
$footer->render();

//srcipt
include 'template/modules/end.temp.php';

