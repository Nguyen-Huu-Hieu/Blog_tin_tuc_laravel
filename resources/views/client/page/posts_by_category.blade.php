@extends('client.layout.master')
@section('posts_by_category')

	  <!-- Top News Start-->
        <div class="top-news" style="margin-top: 30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="row ">
                        	@foreach($posts_by_category as $post)

	                            <div class="col-md-4">
	                                <div class="tn-img" >
	                                    <img src="{{ $post->getThumbnail()}}" style="width: 326px; height: 219px" />
	                                    <div class="tn-title">
	                                        <a href="">{{ $post->title}}</a>
	                                    </div>
	                                </div>
	                            </div>
                        	@endforeach
                        
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Top News End-->

       
@endsection