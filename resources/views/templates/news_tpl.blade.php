@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 2)->first();
?>

<section class="vk-content">
    <div class="vk-banner vk-banner--style-1">
        <img src="{{ asset('upload/banner/'.$banner->image) }}" alt="" class="w-100">
    </div>
    <div class="vk-blog__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="vk-blog__title-box">
                        <h1 class="vk-blog__title">Tin tức</h1>
                        <div class="vk-blog__title-sub">
                            <p>
                                {!! $about->content !!}
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
            @foreach($tintuc as $item)
                <div class="col-lg-4 col-sm-6 _item">
                    <div class="vk-blog-item">
                        <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}" class="vk-img vk-img--cover">
                            <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                        </a>

                        <div class="vk-blog-item__brief">
                            <h3 class="vk-blog-item__title"><a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
                            <div class="vk-blog-item__text">
                                <p>{!! $item->mota !!}</p>
                            </div>
                            <div class="vk-blog-item__button">
                                <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" class="vk-btn vk-btn--outline-yellow-1">Chi tiết</a>
                            </div>
                        </div>
                    </div> <!--./vk-blog-item-->
                </div>
            @endforeach
                
            </div>

            <div class="vk-blog__button">
                <!-- <a href="#" class="vk-btn vk-btn--outline-yellow-1">XEM THÊM</a> -->
                <div class="paginations">{!! $tintuc->links() !!}</div>
            </div>
        </div>
    </div>
</section>

@endsection