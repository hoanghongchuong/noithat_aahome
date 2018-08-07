@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $cateProjects = DB::table('news_categories')->where('com', 'du-an')->get();
    $banner = DB::table('banner_content')->where('position', 4)->first();
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
                        <h1 class="vk-blog__title">{{$cate->name}}</h1>
                        <div class="vk-blog__title-sub">
                            <p>
                                {!! $cate->mota !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
			@if(count($cateChilds) > 0)
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <nav class="nav vk-project__nav">
                    	@foreach($cateChilds as $k=>$cateChild)
                        <a data-toggle="tab" href="#home{{$k}}" class="@if($k == 0) active @endif">
                        <span class="_icon">
                            <img src="{{asset('upload/news/'.$cateChild->background)}}" alt="">
                            <img src="{{asset('upload/news/'.$cateChild->background)}}" alt="">
                        </span>
                            <span class="_text">{{$cateChild->name}}</span>
                        </a>
                        @endforeach
                        
                    </nav>
                </div>
            </div>
            
			@endif
        </div>
    </div>

    <div class="vk-blog__bot">
        <div class="container">


            <div class="tab-content" >
            	@if(count($cateChilds) > 0)
            	@foreach($cateChilds as $k=>$cateChild)
                <div class="tab-pane fade @if($k == 0) show active @endif" id="home{{$k}}">
                	<?php $data = DB::table('news')->where('status', 1)->where('com', 'du-an')->where('cate_id', $cateChild->id)->orderBy('stt', 'asc')->get(); ?>
                    <div class="row vk-project__list">
                        @foreach($data as $item)
                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}" class="vk-img vk-img--cover">
                                    <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='{{ url('du-an/'.$item->alias.'.html') }}'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                        <div class="vk-project-item__text"><p>{!! $item->mota !!}</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="{{ url('du-an/'.$item->alias.'.html') }}" class="vk-btn"><img src="{{asset('upload/news/'.$item->background)}}" alt=""></a>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--./vk-project-item-->
                        </div>
						@endforeach
                        
                    </div>
                </div>
				@endforeach                	
				
				@endif
                
            </div>


			<div class="row vk-project__list">
                        @foreach($projects as $item)
                        <div class="col-lg-3 col-sm-6 col-md-4 _item">
                            <div class="vk-project-item vk-project-item--style-1">

                                <a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}" class="vk-img vk-img--cover">
                                    <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                                </a>

                                <div class="vk-project-item__brief" onclick="window.location.href='{{ url('du-an/'.$item->alias.'.html') }}'">
                                    <div class="vk-project-item__wrapper">
                                        <h3 class="vk-project-item__title"><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                        <div class="vk-project-item__text"><p>{!! $item->mota !!}</p></div>
                                        <div class="vk-project-item__button">
                                            <a href="{{ url('du-an/'.$item->alias.'.html') }}" class="vk-btn"><img src="{{asset('upload/news/'.$item->background)}}" alt=""></a>
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