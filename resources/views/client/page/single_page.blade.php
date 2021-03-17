@extends('client.layout.master')
@section('single_page')
	  <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="img/news-825x525.jpg" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title">{{ $post->title}}</h1>
                                <p><b>{{ $post->description}}</b></p>
                                <a href=""><img src="{{ $post->getThumbnail()}}" style="width: 586px; height: 391px"></a>    
                                
                                <p>
                                    {{ $post->content}}
                                </p>
                                <p>
                                    Quisque arcu nulla, convallis nec orci vel, suscipit elementum odio. Curabitur volutpat velit non diam tincidunt sodales. Nullam sapien libero, bibendum nec viverra in, iaculis ut eros.
                                </p>
                               
                            </div>
                        </div>
                        <div class="sn-related">
                            <h2>Tin khác</h2>
                            <div class="row sn-slider">
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Cùng mục</h2>
                                <div class="news-list">
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-1.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-2.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-3.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-4.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-5.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-1.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-5.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="popular" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-1.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="latest" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-5.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Từ khóa</h2>
                                <div class="tags">
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
@endsection