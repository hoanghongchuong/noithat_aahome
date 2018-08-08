<?php
    $setting = Cache::get('setting');
    $cateProject = DB::table('news_categories')->where('status',1)->where('parent_id', 0)->get();
    $provinces = DB::table('province')->get();
    $slogan = DB::table('slogan')->get();
?>
<header class="vk-header">
    <div class="vk-header__content">
        <a href="{{url('')}}" class="vk-header__logo">
            <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="">
        </a>
        <nav class="vk-header__menu">
            <ul class="vk-list vk-list--inline vk-menu__main">
                <li class="vk-list__item"><a href="{{url('')}}">Trang chủ</a></li>
                <li class="vk-list__item"><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                <li class="vk-list__item">
                    <a href="#">Dự án</a>
                    <ul class="vk-list vk-menu__child" style="z-index: 1">
                        @foreach($cateProject as $cate)
                        <li class="vk-list__item"><a href="{{url('du-an/'.$cate->alias)}}">{{$cate->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="vk-list__item"><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                <li class="vk-list__item"><a href="{{url('vat-lieu')}}">Vật liệu dự án</a></li>
            </ul>
        </nav>

        <div class="vk-header__left">
            <div class="vk-header__search">
                <a href="#searchForm" data-toggle="collapse" class="vk-btn vk-btn--outline-brown-1 vk-header__btn-search"><i class="ti-search"></i></a>
                <div class="collapse vk-header__search-form" id="searchForm">
                    <form action="{{ route('searchNews') }}" method="get">
                        <div class="vk-form vk-form--search" >
                            <input type="text" class="form-control" name="txtSearch" required="">
                            <button class="vk-btn vk-btn--yellow-1"><i class="ti-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="vk-header__social">
                <a href="{{$setting->facebook}}" class="vk-btn vk-btn--outline-brown-1 vk-header__btn-search"><i class="fa fa-facebook"></i></a>
            </div>

            <div class="vk-header__register">
                <a href="#exampleModal" data-toggle="modal" class="vk-btn vk-btn--outline-brown-1 vk-header__btn-register">Đăng ký tư vấn</a>
            </div>

            <a class="vk-header__hotline" href="callto:0911 077 422">
                <img src="{{ asset('public/images/icon-1.png')}}" alt="" class="_icon">
                <span class="_num">{{$setting->phone}}</span>
            </a>
            <a href="#menu" class="vk-header__btn-menu vk-btn vk-btn--outline-brown-1 d-lg-none"><i class="ti-menu"></i></a>
        </div>
    </div>

</header> <!--./vk-header-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog vk-modal" role="document">
        <div class="modal-content">

            <div class="vk-modal__wrapper">
                <form action="{{ route('postContact') }}" method="post">
                    {{ csrf_field() }}
                    <div class="vk-form  vk-form--register">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Họ tên">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <select  class="form-control" name="province">
                                <option value="">Chọn thành phố</option>
                               @foreach($provinces as $province) 
                                <option value="{{ $province->id }}">{{$province->name}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="content">
                                <option value="">Bạn cần tư vấn về?</option>
                                @foreach($slogan as $s)
                                <option value="{{ $s->id }}">{{$s->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-center">
                            <button class="vk-btn vk-btn--submit vk-btn--brown-1">ĐĂNG KÝ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>