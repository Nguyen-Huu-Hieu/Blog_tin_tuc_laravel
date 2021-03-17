@extends('client.layout.master')
@section('content')

	  <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <h3>Tin Mới</h3>
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                        	@foreach($posts as $post)

	                            <div class="col-md-6">
	                                <div class="tn-img">
                                        <a href="{{ Route('single_page', $post->id)}}">
                                            
	                                       <img src="{{ $post->getThumbnail()}}" style="width: 550px; height: 350px" />
                                        </a>
	                                    <div class="tn-title">
	                                        <a href="{{ Route('single_page', $post->id)}}">{{ $post->title}}</a>
	                                    </div>
	                                </div>
	                            </div>
                        	@endforeach
                        
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <p class="title-time-home">
                            @php
                                echo "Ngày " . $time->day . " tháng " . $time->month . " năm " .$time->year;
                            @endphp
                        </p>
                    </div>
                    {{-- <div class="col-md-6 tn-right">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="frontend/img/news-350x223-1.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="frontend/img/news-350x223-2.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-350x223-3.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/news-350x223-4.jpg" />
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-md-6">
                        <h2>{{ $category->name}}</h2>
                        <div class="row cn-slider">
                        	@foreach($posts as $post)
                        	@if($post->category_id == $category->id)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    	<a href="{{ Route('single_page', $post->id)}}">
	                                    	<img src="{{ $post->getThumbnail()}}"  />
	                                        <a href="{{ Route('single_page', $post->id)}}">{{ $post->title}}</a>
                                    	</a>
                                </div>
                            </div>
                            @endif
                        	@endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Category News End-->

   
        
        <!-- Tab News Start-->
      {{--   <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="popular" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="latest" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Tab News Start-->

@endsection