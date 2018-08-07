@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 8)->first();

?>
<section class="vk-content">
    <div class="vk-banner vk-banner--style-1">
        <img src="{{ asset('upload/banner/'.$banner->image) }}" alt="" class="w-100">
    </div>

    <div class="vk-blog-detail__wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="vk-blog-detail__title-box">
                        <h1 class="vk-blog-detail__title">{{$news_detail->name}}</h1>
                        <div class="vk-blog-detail__date">{{date('d/m/Y', strtotime($news_detail->created_at))}}</div>
                    </div>
                    <div class="vk-blog-detail__content">
                        {!! $news_detail->content !!}
                        <div class="vk-blog-detail__share">
                            <div class="fb-like" data-href="{{URL::Current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            <!-- <ul class="vk-list vk-list--inline vk-list--social">
                                <li class="vk-list__item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="vk-list__item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="vk-list__item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="vk-blog__relate">
                            <h2 class="vk-blog-detail__title-sub">Bài viết liên quan</h2>
                            <div class="row vk-blog__list">
                                @foreach($baiviet_khac as $item)
                                <div class="col-sm-6 _item">
                                    <div class="vk-blog-item">
                                        <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}" class="vk-img vk-img--cover">
                                            <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                                        </a>
                                        <div class="vk-blog-item__brief">
                                            <h3 class="vk-blog-item__title"><a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                            <div class="vk-blog-item__text"><p>{!! $item->mota !!}</p></div>
                                            <div class="vk-blog-item__button">
                                                <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" class="vk-btn vk-btn--outline-yellow-1">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div> <!--./vk-blog-item-->
                                </div>
                                @endforeach                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

