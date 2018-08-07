<?php
    $setting = Cache::get('setting');
    $chinhanh = DB::table('chinhanh')->get();   
?>
<footer class="vk-footer">

    <div class="vk-footer__top">
        <div class="container">
            <div class="row vk-footer__row">
                <div class="col-lg-5">
                    <div class="vk-footer__item">
                        <a href="{{url('')}}" class="vk-footer__logo">
                            <img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}" alt="">
                        </a>

                        <ul class="vk-footer__list-icon vk-list">
                            <li class="vk-list__item"><i class="_icon fa fa-map-marker"></i>
                            @foreach($chinhanh as $c)
                                <p>{{$c->name}}: {{$c->address}}</p>
                            @endforeach
                            </li>
                            <li class="vk-list__item"><i class="_icon fa fa-phone"></i> <a href="callto:{{$setting->hotline}}">{{$setting->hotline}}</a></li>
                            <li class="vk-list__item"><i class="_icon fa fa-envelope"></i> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg">
                    <div class="vk-footer__item">
                        <h2 class="vk-footer__title">Dịch vụ</h2>
                        <ul class="vk-footer__list vk-list">
                            <li class="vk-list__item"><a href="#">thiết kế và thi công trọn gói</a></li>
                            <li class="vk-list__item"><a href="#"></a>Thiết kế kiến trúc và nội thất</li>
                            <li class="vk-list__item"><a href="#">Thi công nội thất</a></li>
                            <li class="vk-list__item"><a href="#">Sửa chữa cải tạo</a></li>
                            <li class="vk-list__item"><a href="#">Thiết kế nhà theo phong thủy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg">
                    <div class="vk-footer__item">

                        <h2 class="vk-footer__title">&nbsp;</h2>
                        
                        <div class="fb-page" data-href="https://www.facebook.com/Thi%E1%BA%BFt-K%E1%BA%BF-Nh%C3%A0-%C4%90%E1%BA%B9p-Phong-Thu%E1%BB%B7-132959804193749/" data-tabs="timeline" data-height="203" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Thi%E1%BA%BFt-K%E1%BA%BF-Nh%C3%A0-%C4%90%E1%BA%B9p-Phong-Thu%E1%BB%B7-132959804193749/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Thi%E1%BA%BFt-K%E1%BA%BF-Nh%C3%A0-%C4%90%E1%BA%B9p-Phong-Thu%E1%BB%B7-132959804193749/">Thiết Kế Nhà Đẹp Phong Thuỷ</a></blockquote></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="vk-footer__bot">
        <div class="container">
            <div class="vk-footer__bot-content">
                <div class="_coppyright">© GCO GROUP 2018. All rights reserved</div>
                <ul class="vk-list vk-list--inline vk-list--social vk-footer__social">
                    <li class="vk-list__item"><a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                    <li class="vk-list__item"><a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                    <li class="vk-list__item"><a href="{{ $setting->youtube }}"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>

        </div>
    </div> <!--./vk-footer__bot-->
</footer><!--./vk-footer-->
<nav class="" id="menu">
    <ul class="">
        <li class=""><a href="{{url('')}}">Trang chủ</a></li>
        <li class=""><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
        <li class="">
            <a href="project.html">Dự án</a>
            <ul class="">
                <li class=""><a href="project.html">thiết kế và thi công trọn gói</a></li>
                <li class=""><a href="project.html">Thi công nội thất</a></li>
                <li class=""><a href="project.html">Thiết kế và thi công nội thất</a></li>
                <li class=""><a href="project.html">sửa chữa cải tạo</a></li>
                <li class=""><a href="project.html">thiết kế nhà theo phong thủy</a></li>
            </ul>
        </li>
        <li class=""><a href="{{url('tin-tuc')}}">Tin tức</a></li>
        <li class=""><a href="{{url('vat-lieu')}}">Vật liệu dự án</a></li>
    </ul>
</nav>
