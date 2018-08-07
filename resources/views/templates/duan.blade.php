@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 4)->first();
?>
<section class="vk-content">
    <div class="vk-banner vk-banner--style-1">
        <img src="images/banner-2.jpg" alt="" class="w-100">
    </div>
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

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-1.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-2.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-3.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-4.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-5.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-6.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-7.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-8.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-9.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-10.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-11.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-12.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-13.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-14.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-15.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-16.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-17.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-18.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="profile">

                    <div class="row vk-project__list">

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-1.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-2.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-3.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-4.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-5.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-6.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-7.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-8.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-9.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-10.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-11.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-12.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-13.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-14.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Biệt thự Mr. Huy" class="vk-img vk-img--cover">
                                    <img src="images/p-15.jpg" alt="VP- Biệt thự Mr. Huy" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Biệt thự Mr. Huy">VP- Biệt thự Mr. Huy</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="Nhà hàng ẩm thực quê ta" class="vk-img vk-img--cover">
                                    <img src="images/p-16.jpg" alt="Nhà hàng ẩm thực quê ta" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="Nhà hàng ẩm thực quê ta">Nhà hàng ẩm thực quê ta</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Hoàng Quốc Việt" class="vk-img vk-img--cover">
                                    <img src="images/p-17.jpg" alt="VP- Hoàng Quốc Việt" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Hoàng Quốc Việt">VP- Hoàng Quốc Việt</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="project-details.html" title="VP- Văn phòng Kaopiz" class="vk-img vk-img--cover">
                                    <img src="images/p-18.jpg" alt="VP- Văn phòng Kaopiz" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='project-details.html'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="project-details.html" title="VP- Văn phòng Kaopiz">VP- Văn phòng Kaopiz</a></h3>
                                        <div class="vk-project-item__text"><p>Thiết kế đơn giản hiện đại, màu sách sang trọng toát lên vẻ quý phái. Không gian rộng mở, kết hợp ăn ý giữa đèn và gạch nền tạo sự chuyên nghiệp</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="project-details.html" class="vk-btn"><img src="images/icon-4.png" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>
                    </div>

                </div>
            </div>




        </div>
    </div>



</section>
@endsection