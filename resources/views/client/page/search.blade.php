@extends('client.layout.master')
@section('search')

	 <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="row ">
                        	@foreach($posts as $post)

	                            <div class="col-md-4">
	                                <div class="tn-img">
	                                	<a href="">
	                                		
	                                    <img src="frontend/img/news-450x350-1.jpg" />
	                                    <div class="tn-title">
	                                        <a href="">{{ $post->title}}</a>
	                                	</a>
	                                    </div>
	                                </div>
	                            </div>
                        	@endforeach
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

@endsection

