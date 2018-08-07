@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 9)->first();
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
                        <h1 class="vk-blog__title">Vật liệu dự án</h1>
                        <div class="vk-blog__title-sub">
                            <p>
                                {!! @$about->content !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vk-blog__bot">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home">
                    <div class="row vk-project__list">
                        @foreach($data as $k=>$item)
                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-2">

                                <a href="{{asset('upload/hinhanh/'.$item->photo)}}" title="{{$item->name}}" class="vk-img vk-img--cover">
                                    <img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                                </a>
                                <a class="vk-project-item__brief _material-item"  href="javascript:void(0);" data-index="{{$k}}" >
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title">{{$item->name}}</h3>
                                        <div class="vk-project-item__text"><p>{!! $item->mota !!}</p></div>
                                    </div>
                                </a>
                            </div> <!--./vk-project-item-->
                        </div>
                        @endforeach
                    </div>


                </div>

                <div class="tab-pane fade" id="profile">

                    2

                </div>
            </div>


        </div>
    </div>
    <div id="materialContent">
        <div class="vk-material-detail__wrapper" id="test">
            <div class="container">
                <div class="vk-material-detail">
                    <div class="vk-material-detail__for ">
                        <div class="slider-for">
						@foreach($data as $item)
                            <div class="_item">
                                <div class="vk-md-item">
                                    <div class="vk-img">
                                        <img src="{{asset('upload/hinhanh/'.$item->photo2)}}" alt="">
                                    </div>
                                </div>
                            </div><!--./item-->
						@endforeach



                        </div> <!--./slider-->

                        <div class="vk-material-detail__for-nav">
                            <div class="_count _item">1/30</div>
                            <button class="vk-btn  _item" id="prev"><i class="ti-angle-left"></i></button>
                            <button class="vk-btn  _item" id="next"><i class="ti-angle-right"></i></button>
                        </div>
                    </div>


                    <div class="vk-material-detail__nav">
                        <div class="slider-nav">
                        	@foreach($data as $item)
                            <div class="_item">
                                <div class="vk-md-item">
                                    <div class="vk-md-item__brief">
                                        <h3 class="vk-md-item__title">{{$item->name}}</h3>
                                        <div class="vk-md-item__text">
                                            <p>{!! $item->mota !!}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div><!--./item-->
                            @endforeach

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade " id="materialDetail" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">


        </div>
    </div>

</section>
@endsection