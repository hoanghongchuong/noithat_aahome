@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 3)->first();
?>
<section class="vk-content">
    <div class="vk-banner vk-banner--style-1">
        <img src="{{asset('upload/banner/'.$banner->image)}}" alt="" class="w-100">
    </div>
    <div class="vk-blog__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="vk-blog__title-box">
                        <h1 class="vk-blog__title">Giới thiệu</h1>
                        <div class="vk-blog__title-sub">
                            <p>
                                {!! $about->content !!}
                            </p>

                        </div>
                    </div>

                </div>
            </div>

            <p><img src="images/about-1.jpg" alt=""></p>
        </div>
    </div>

    <div class="vk-about__section vk-about__section--style-1 mt-5">
        <div class="container">
            <div class="vk-about-item">
                <h2 class="vk-about-item__title">Tầm nhìn & Sứ mệnh</h2>
                <div class="vk-about-item__des">
                    <p>{!! @$tamnhin->content !!}</p>
                </div>
            </div>

            <div class="vk-about-item">
                <h2 class="vk-about-item__title">Định hướng phát triển</h2>
                <div class="vk-about-item__des">
                    <p>{!! @$dinhhuong->content !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="vk-about__section vk-about__section--style-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row vk-about__list vk-slider vk-slider--style-3" data-slider="testimonial">
                        @foreach($feedbacks as $f)
                        <div class="_item col-lg-12">
                            <div class="vk-testimonial">
                                <div class="vk-testimonial__brief">
                                    <h3 class="vk-testimonial__title">{{$f->name}}</h3>
                                    <div class="vk-testimonial__position">{{$f->position}}</div>
                                    <p>

                                        {!! $f->content !!}
                                    </p>
                                </div>
                                <div class="vk-img vk-img--cover">
                                    <img src="{{asset('upload/hinhanh/'.$f->photo)}}" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
