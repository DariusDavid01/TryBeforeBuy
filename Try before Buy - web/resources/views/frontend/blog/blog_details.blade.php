@extends('frontend.main_master')
@section('content')
@section('title')
@if(session()->get('language') == 'romanian') {{$blogpost->post_title_ro}} @else {{$blogpost->post_title_en}} @endif
@endsection
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">@if(session()->get('language') == 'romanian') Acasa @else Home @endif</a></li>
				<li class="active">@if(session()->get('language') == 'romanian') {{$blogpost->post_title_ro}} @else {{$blogpost->post_title_en}} @endif</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div>
<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">
					<div class="blog-post wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	<img class="img-responsive" src="{{asset($blogpost->post_image)}}" alt="">
	<h1>@if(session()->get('language') == 'romanian') {{$blogpost->post_title_ro}} @else {{$blogpost->post_title_en}} @endif</h1>
    
	<span class="date-time">{{Carbon\Carbon::parse($blogpost->created_at)->diffForHumans()}}</span>
	<p>@if(session()->get('language') == 'romanian') {!!$blogpost->post_details_ro!!} @else {!!$blogpost->post_details_en!!} @endif</p>

		
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>





				<div class="blog-review wow fadeInUp">
	<div class="row">
		<div class="col-md-12">
			@php 
				$comments = App\Models\Comment::where('blogpost_id',$blogpost->id)->latest()->limit(5)->get();
				$commentsnr = App\Models\Comment::where('blogpost_id',$blogpost->id)->count();
			@endphp
			<h3 class="title-review-comments">{{$commentsnr}} comment(s)</h3>
		</div>
		@foreach($comments as $item)
		<div class="col-md-2 col-sm-2">
			<img style="border-radius:50%" src="{{ (!empty($item->user->profile_photo_path)) ? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}" width="150px;" height="150px;" alt="Responsive image" class="img-rounded img-responsive">
		</div>
		<div class="col-md-10 col-sm-10">
			<div class="blog-comments inner-bottom-xs outer-bottom-xs">
				<h4><b>{{$item->user->name}}</b> : {{$item->summary}}</h4>
				<span class="review-action pull-right">
				<span class="date"><i class="fa fa-calendar"></i><span>{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span></span>
				</span>
				<p>{{$item->comment}}</p>
			</div>
		</div>
		@endforeach
	</div>








</div>
</div>				
<div class="blog-write-comment outer-bottom-xs outer-top-xs">
	<div class="row">
		<div class="col-md-12">
			<h4>@if(session()->get('language') == 'romanian') Lasa un comentariu @else Leave a comment @endif</h4>
		</div>
		
											
		@guest
												<p>
													<b>
													@if(session()->get('language') == 'romanian') Pentru a adauga un comentariu, trebuie sa fii logat! @else For adding a comment, you have to be logged in first! @endif<a href="{{route('login')}}">@if(session()->get('language') == 'romanian') Conecteaza-te aici @else Login here @endif</a>
													</b>
												</p>
		@else
												<div class="form-container">
			<form role="form" class="cnt-form" method="post" action="{{route('comment.store')}}">
				@csrf
				<input type="hidden" name="blogpost_id" value="{{$blogpost->id}}">
		<div class="col-md-4">
				<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">@if(session()->get('language') == 'romanian') Adresa de mail @else Email Address @endif <span>*</span></label>
			    <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" placeholder="">
			  </div>
		</div>
		<div class="col-md-8">
				<div class="form-group">
			    <label class="info-title" for="exampleInputTitle">@if(session()->get('language') == 'romanian') Titlu @else Title @endif <span>*</span></label>
			    <input type="text" class="form-control unicase-form-control text-input" name="summary" placeholder="">
			  </div>
		</div>
		<div class="col-md-12">
				<div class="form-group">
			    <label class="info-title" for="exampleInputComments">@if(session()->get('language') == 'romanian') Comentariile tale @else Your comments @endif <span>*</span></label>
			    <textarea class="form-control unicase-form-control" name="comment" id="comment"></textarea>
			  </div>
</div>
		<div class="col-md-12 outer-bottom-small m-t-20">
			<button type="submit" class="btn-upper btn btn-primary checkout-page-button">@if(session()->get('language') == 'romanian') Trimite comentariu @else Submit comment @endif</button>
		</div>
			</form>
		</div>
			@endguest
	</div>
</div>
				</div>
				<div class="col-md-3 sidebar">
                
                
                
					<div class="sidebar-module-container">
						<div class="search-area outer-bottom-small">
    <form>
        <div class="control-group">
            <input placeholder="Type to search" class="search-field">
            <a href="#" class="search-button"></a>   
        </div>
    </form>
</div>		

<div class="home-banner outer-top-n outer-bottom-xs">
<a href="upload/Try_before_Buy.zip" download><img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image"></a>
</div>
				<!-- ==============================================CATEGORY============================================== -->
                <div class="sidebar-widget outer-bottom-xs wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	<h3 class="section-title">@if(session()->get('language') == 'romanian') Categorii @else Categories @endif</h3>
	<div class="sidebar-widget-body m-t-10">
		<div class="accordion">
            @foreach($blogcategory as $category)
        <ul class="list-group">
        <a href="{{url('blog/category/post/'.$category->id)}}"><li class="list-group-item">@if(session()->get('language') == 'romanian') {{$category->blog_category_name_ro}} @else {{$category->blog_category_name_en}} @endif</li></a>
</ul>
@endforeach
	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
	<!-- ============================================== CATEGORY : END ============================================== -->						<div class="sidebar-widget outer-bottom-xs wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
   

	</div>
</div>
						<!-- ============================================== PRODUCT TAGS ============================================== -->

<!-- ============================================== PRODUCT TAGS : END ============================================== -->					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61c7b2f25ec1d141"></script>
@endsection