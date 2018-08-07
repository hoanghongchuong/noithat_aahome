@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<section class="vk-content">

    <div class="vk-home vk-home--slider" >
        <div class="vk-slider vk-slider--style-2 vk-banner vk-slider--slider-2" data-slider="home">
            @foreach($sliders as $slider)
            <div class="_item">
                <img src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="">
            </div>
			@endforeach
            
        </div>
        <div class="_arrow">
            <div class="container">
                <div class="text-right">
                    <a href="#" data-scroll-to="#after"><i class="ti-arrow-down"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="vk-home vk-home--about" id="after">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Tại sao chọn chúng tôi ?</h2>
                <div class="vk-home__title-sub">
                    <p>
                        Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu <br> thật
                        kĩ trước khi quyết định, cần thống nhất về mặt chi phí
                    </p>
                </div>
            </div>
            <div class="vk-service__list row">
			@foreach($whys as $why)
                <div class="col-lg-3 col-sm-6 _item">
                    <div class="vk-service-item vk-service-item--style-1">
                        <div class="vk-img vk-img--mw100">
                            <img src="{{asset('upload/hinhanh/'.$why->photo)}}" alt="">
                        </div>
                        <div class="vk-service-item__brief">
                            <h3 class="vk-service-item__title">{{$why->name}}</h3>
                            <div class="vk-service-item__text">
                                <p>{{$why->mota}}</p>
                            </div>
                        </div>
                    </div> <!--./vk-project-item-->
                </div>
			@endforeach
            </div>
        </div>
    </div>
    <div class="vk-home vk-home--service">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Dịch vụ</h2>
                <div class="vk-home__title-sub">
                    <!-- <p>
                        Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu thật kĩ
                        trước khi quyết định, cần
                        <br>thống nhất về mặt chi phí, chất liệu với công ty thi công nội thất trọn gói trước khi thuê
                        họ.
                    </p> -->
                </div>
            </div>
            <div class="vk-service__list row" data-layout="masonry">
                <div class="col-lg-6 _item" data-layout="masonry-item">
                    <div class="vk-service-item vk-service-item--style-2">
                        <div class="vk-img vk-img--cover">
                            <img src="{{asset('upload/news/'.@$home[0]->photo)}}" alt="">
                        </div>
                        <div class="vk-service-item__brief">
                            <div class="vk-service-item__wrapper">
                                <h3 class="vk-service-item__title"><a href="{{ url('du-an/'.@$home[0]->alias) }}">{{@$home[0]->name}}</a></h3>
                                <div class="vk-service-item__text">
                                    <p>{!! @$home[0]->mota !!}</p>
                                </div>
                                <div class="vk-service-item__button">
                                    <a href="{{ url('du-an/'.@$home[0]->alias) }}" class="vk-btn vk-btn--outline-white">CHI TIẾT</a>
                                </div>

                            </div>
                        </div>
                    </div> <!--./vk-project-item-->
                </div>
                <div class="col-lg-6 _item" data-layout="masonry-item">
                    <div class="vk-service-item vk-service-item--style-2">
                        <div class="vk-img vk-img--cover">
                            <img src="{{asset('upload/news/'.@$home[1]->photo)}}" alt="">
                        </div>
                        <div class="vk-service-item__brief">
                            <div class="vk-service-item__wrapper">
                                <h3 class="vk-service-item__title"><a href="{{ url('du-an/'.@$home[1]->alias) }}">{{@$home[1]->name}}</a></h3>

                                <div class="vk-service-item__button">
                                    <a href="{{ url('du-an/'.@$home[1]->alias) }}" class="vk-btn vk-btn--outline-white">CHI TIẾT</a>
                                </div>

                            </div>
                        </div>
                    </div> <!--./vk-project-item-->
                </div>
                <div class="col-lg-6 _item" data-layout="masonry-item">
                    <div class="vk-service-item vk-service-item--style-2">
                        <div class="vk-img vk-img--cover">
                            <img src="{{asset('upload/news/'.@$home[2]->photo)}}" alt="">
                        </div>
                        <div class="vk-service-item__brief">
                            <div class="vk-service-item__wrapper">
                                <h3 class="vk-service-item__title"><a href="{{ url('du-an/'.@$home[2]->alias) }}">{{@$home[2]->name}}</a></h3>

                                <div class="vk-service-item__text">
                                    <p>{{@$home[2]->mota}}</p>
                                </div>
                                <div class="vk-service-item__button">
                                    <a href="{{ url('du-an/'.@$home[2]->alias) }}" class="vk-btn vk-btn--outline-white">CHI TIẾT</a>
                                </div>

                            </div>
                        </div>
                    </div> <!--./vk-project-item-->
                </div>

                <div class="col-lg-3 _size _item" data-layout="masonry-item">
                    <div class="vk-service-item vk-service-item--style-2">
                        <div class="vk-img vk-img--cover">
                            <img src="{{asset('upload/news/'.@$home[3]->photo)}}" alt="">
                        </div>
                        <div class="vk-service-item__brief">
                            <div class="vk-service-item__wrapper">
                                <h3 class="vk-service-item__title"><a href="{{ url('du-an/'.@$home[3]->alias) }}">{{@$home[3]->name}}</a></h3>

                                <div class="vk-service-item__button">
                                    <a href="{{ url('du-an/'.@$home[3]->alias) }}" class="vk-btn vk-btn--outline-white">CHI TIẾT</a>
                                </div>

                            </div>
                        </div>
                    </div> <!--./vk-project-item-->
                </div>

                <div class="col-lg-3 _item" data-layout="masonry-item">
                    <div class="vk-service-item vk-service-item--style-2">
                        <div class="vk-img vk-img--cover">
                            <img src="{{asset('upload/news/'.@$home[4]->photo)}}" alt="">
                        </div>
                        <div class="vk-service-item__brief">
                            <div class="vk-service-item__wrapper">
                                <h3 class="vk-service-item__title"><a href="{{ url('du-an/'.@$home[4]->alias) }}">Sửa chữa cải tạo</a></h3>

                                <div class="vk-service-item__button">
                                    <a href="{{ url('du-an/'.@$home[4]->alias) }}" class="vk-btn vk-btn--outline-white">CHI TIẾT</a>
                                </div>

                            </div>
                        </div>
                    </div> <!--./vk-project-item-->
                </div>
            </div>
        </div>

    </div>


    <div class="vk-home vk-home--project">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Dự án tiêu biểu</h2>
                <div class="vk-home__title-sub">
                    <!-- <p>
                        Hiện nay có rất nhiều nơi cung cấp dịch vụ này, chính vì thế mà bạn cần phải tìm hiểu thật kĩ
                        trước khi quyết định, cần
                        <br>thống nhất về mặt chi phí, chất liệu với công ty thi công nội thất trọn gói trước khi thuê
                        họ.
                    </p> -->
                </div>
            </div>

            <div class="vk-home__nav nav">
				@foreach($categories as $k=>$category)
                <a class="@if($k == 0)active @endif" data-toggle="tab" href="#opt{{$k}}">{{$category->name}}</a>
                @endforeach
               <!--  <a class="" data-toggle="tab" href="#opt2">Nhà phố liền kề</a>
                <a class="" data-toggle="tab" href="#opt3">Khách sạn, nhà hàng</a>
                <a class="" data-toggle="tab" href="#opt4">Văn phòng</a>
                <a class="" data-toggle="tab" href="#opt5">Home stay</a>
                <a class="" data-toggle="tab" href="#opt6">Chung cư</a> -->
            </div>
            <div class="tab-content">
				
				@foreach($categories as $k=>$category)
					<?php 
						$cateChilds = DB::table('news_categories')
						->where('status', 1)
						->where('parent_id', $category->id)->get();
						$array_cate = [];
						$array_cate[] = $category->id;
						if($cateChilds){
							foreach($cateChilds as $cate){
								$array_cate[] = $cate->id;
							}
						}
						$projectHot = DB::table('news')
						->where('status',1)
						->where('noibat',1)
						->where('com','du-an')
						->whereIn('cate_id', $array_cate)
						//->where('cate_id',2)
						->take(12)
						->get();
					?>
                <div id="opt{{$k}}" class="tab-pane fade @if($k == 0) show active @endif">
                    <div class="vk-project__list row">
                    	@foreach($projectHot as $hot)
                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">
                                <a href="{{url('du-an/'.$hot->alias.'.html')}}" title="{{$hot->name}}" class="vk-img vk-img--cover">
                                    <img src="{{asset('upload/news/'.$hot->photo)}}" alt="{{$hot->name}}" class="vk-img__img">
                                </a>
                                <div class="vk-project-item__brief" onclick="window.location.href='{{url('du-an/'.$hot->alias.'.html')}}'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="{{url('du-an/'.$hot->alias.'.html')}}" title="{{$hot->name}}">{{$hot->name}}</a></h3>
                                        <div class="vk-project-item__text"><p>{!! $hot->mota !!}</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="{{url('du-an/'.$hot->alias.'.html')}}" class="vk-btn"><img src="{{ asset('public/images/icon-4.png')}}" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>
                        @endforeach

                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>


    <div class="vk-home vk-home--material">
        <div class="container">
            <div class="vk-home__title-box">
                <h2 class="vk-home__title">Vật liệu dự án</h2>
            </div>
        </div>
        <div class="row no-gutters vk-project__list vk-slider" data-slider="material">
			@foreach($vatlieu as $k=>$v)
            <div class="col-lg-3 col-sm-6 col-md-4 _item">

                <div class="vk-project-item vk-project-item--style-2">

                    <a href="{{ asset('upload/hinhanh/'.$v->photo) }}" title="{{$v->name}}" class="vk-img vk-img--cover">
                        <img src="{{ asset('upload/hinhanh/'.$v->photo) }}" alt="{{$v->name}}" class="vk-img__img">
                    </a>

                    <a class="vk-project-item__brief _material-item"  href="javascript:void(0);" data-index="{{$k}}" >
                        <div class="vk-project-item__wrapper">
                            <h3 class="vk-project-item__title">{{$v->name}}</h3>
                            <div class="vk-project-item__text"><p>{{$v->mota}}</p></div>
                        </div>


                    </a>

                </div> <!--./vk-project-item-->
            </div>
			@endforeach
            
        </div>



    </div>

    <div class="vk-home vk-home--testimonial">
        <div class="container">
            <div class="vk-home__title-box pb-2">
                <h2 class="vk-home__title">Khách hàng nói về chúng tôi</h2>
                <div class="vk-home__title-sub">
                    <p>
                        {!! $about_cus->content !!}
                    </p>
                </div>
            </div>


            <div class="vk-partner__list row vk-slider vk-slider--style-1" data-slider="partner">

			@foreach($partners as $partner)
                <div class="col-lg-3 col-sm-6 _item">
                    <div class="vk-partner-item">
                        <div class="vk-img vk-img--mw100">
                            <img src="{{asset('upload/banner/'.$partner->photo)}}" alt="">
                        </div>
                        <div class="vk-partner-item__brief">
                            <div class="vk-partner-item__text">
                                <p>{!! $partner->content !!}</p>
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
