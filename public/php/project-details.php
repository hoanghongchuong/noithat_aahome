<?php
include 'classes/classes.php';

//html
$head->render('project');
$header->class_header = '';
$header->render();
$banner->render('banner-2.jpg');
?>
    <div class="container pt-4">
        <p>
            <img src="images/p-detail-1.jpg" alt="">
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="vk-project-detail__title">Biệt thự Mr.Huy</h1>
                <div class="vk-project-detail__des">
                    <p><b>Địa chỉ:</b> Hưng Yên</p>
                    <p><b>Ngày hoàn thành:</b> 2018</p>
                    <p><b>Mô tả</b></p>

                    <p> Diện tích: 206 m2</p>
                    <p>Chi phí dự tính: 1,15 tỉ</p>
                    <p>Bằng việc sử dụng hiệu quả các loại vật liệu và kinh nghiệm của mình, đội ngũ KTS của AAA Home đã
                        mang đến vẻ đẹp hoàn mỹ cho các công trình mà vẫn tối ưu hóa, phù hợp với tiềm lực kinh tế cũng
                        như
                        công năng sử dụng của từng gia đình.</p>

                </div>
            </div>
        </div>

        <div class="pt-5 row vk-project__list">
            <?php $listItem->project_gallery_item(); ?>
        </div>
    </div>

    <div class="vk-project__relate">
        <div class="container">
            <h2 class="vk-blog-detail__title-sub mb-4">Dự án liên quan</h2>

            <div class="vk-project__list row vk-slider" data-slider="relate">
                <?php
                $content1 = 'Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp';

                $listItem->projectItem__data = array(
                    ['p-1.jpg', 'VP- Hoàng Quốc Việt', $content1],
                    ['p-2.jpg', 'VP- Văn phòng Kaopiz', $content1],
                    ['p-3.jpg', 'VP- Biệt thự Mr. Huy', $content1],
                    ['p-4.jpg', 'Nhà hàng ẩm thực quê ta', $content1],
                );

                $listItem->project_item();
                ?>
            </div>
        </div>
    </div>


<?php
//Footer
$footer->render();

//srcipt
include 'template/modules/end.temp.php';

