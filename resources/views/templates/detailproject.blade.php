@extends('index')

@section('content')

<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 4)->first();
?>

 <section class="vk-content">
    <div class="vk-banner vk-banner--style-1">
        <img src="{{ asset('upload/banner/'.$banner->image) }}" alt="" class="w-100">
    </div>
    <div class="container pt-4">
        <p>
            <img src="{{asset('upload/news/'.$project->icon)}}" alt="">
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                {!! $project->content !!}
            </div>
        </div>

        <div class="pt-5 row vk-project__list">
            @foreach($albums as $album)
            <div class="col-lg-4 col-sm-6 _item">
                <div class="vk-project-item vk-project-item--style-3">
                    <a href="{{ asset('upload/albumnews/'.$album->photo) }}" title="" class="vk-img vk-img--cover" data-fancybox="gallery">
                        <img src="{{ asset('upload/albumnews/'.$album->photo) }}" alt="" class="vk-img__img">
                    </a>

                </div> <!--./vk-project-item-->
            </div>
            @endforeach
            
        </div>
    </div>

    <div class="vk-project__relate">
        <div class="container">
            <h2 class="vk-blog-detail__title-sub mb-4">Dự án liên quan</h2>

            <div class="vk-project__list row vk-slider" data-slider="relate">
                @foreach($projectOther as $p)
                <div class="col-lg-3 col-sm-6 col-md-4 _item">
                    <div class="vk-project-item vk-project-item--style-1">

                        <a href="{{ url('du-an/'.$p->alias.'.html') }}" title="{{$p->name}}" class="vk-img vk-img--cover">
                            <img src="{{asset('upload/news/'.$p->photo)}}" alt="{{$p->name}}" class="vk-img__img">
                        </a>
                        <div class="vk-project-item__brief" onclick="window.location.href='{{ url('du-an/'.$p->alias.'.html') }}'">
                            <div class="vk-project-item__wrapper">
                                <h3 class="vk-project-item__title"><a href="{{ url('du-an/'.$p->alias.'.html') }}" title="{{$p->name}}">{{$p->name}}</a></h3>
                                <div class="vk-project-item__text"><p>{!! $p->mota !!}</p></div>
                                <div class="vk-project-item__button">
                                    <a href="{{ url('du-an/'.$p->alias.'.html') }}" class="vk-btn"><img src="{{ asset('public/images/icon-4.png')}}" alt=""></a>
                                </div>
                            </div>

                        </div>
                    </div> <!--./vk-project-item-->
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>

@endsection