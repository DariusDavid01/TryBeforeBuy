@extends('frontend.main_master')
@section('content')

@section('title')
@if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif

@endsection
<style>
	.checked {
  color: orange;
}
</style>

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n">
				<a href="upload/Try_before_Buy.zip" download><img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image"></a>
</div>		
  
    
    
    	<!-- ============================================== HOT DEALS ============================================== -->
		@include('frontend.common.hot_deals')
<!-- ============================================== HOT DEALS: END ============================================== -->					

<!-- ============================================== NEWSLETTER ============================================== -->
<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
	<h3 class="section-title">@if(session()->get('language') == 'romanian') Newslettere @else Newsletters @endif</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<p>@if(session()->get('language') == 'romanian') Inscrie-te la newsletterul nostru! @else Sign Up for Our Newsletter! @endif</p>
        <form>
        	 <div class="form-group">
			    <label class="sr-only" for="exampleInputEmail1">@if(session()->get('language') == 'romanian') Adresa de email @else Email address @endif</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
			  </div>
			<button class="btn btn-primary">@if(session()->get('language') == 'romanian') Abonare @else Subscribe @endif</button>
		</form>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== NEWSLETTER: END ============================================== -->

<!-- ============================================== Testimonials============================================== -->
@include('frontend.common.testimonials')
    
<!-- ============================================== Testimonials: END ============================================== -->

 

				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">

            @foreach($multiImg as $img)
            <div class="single-product-gallery-item" id="slide{{$img->id}}">
                <a data-lightbox="image-1" data-title="Gallery" href="{{asset($img->photo_name)}}">
                    <img class="img-responsive" alt="" src="{{asset($img->photo_name)}}" data-echo="{{asset($img->photo_name)}}" />
                </a>
            </div><!-- /.single-product-gallery-item -->
            @endforeach

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                @foreach($multiImg as $img)
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{$img->id}}">
                        <img class="img-responsive" width="85" alt="" src="{{asset($img->photo_name)}}" data-echo="{{asset($img->photo_name)}}" />
                    </a>
                </div>
                @endforeach
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->    

@php 
	$reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
@endphp


					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name" id="pname">@if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif</h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
									@if($avarage == 0)
									@if(session()->get('language') == 'romanian') Fara recenzii inca @else No rating yet @endif 
   @elseif($avarage == 1 || $avarage < 2)
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
   @elseif($avarage == 2 || $avarage < 3)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
  @elseif($avarage == 3 || $avarage < 4)
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

  @elseif($avarage == 4 || $avarage < 5)
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
  @elseif($avarage == 5 || $avarage < 5)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
   @endif
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">({{ count($reviewcount) }} @if(session()->get('language') == 'romanian') Recenzii @else Reviews @endif)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label">@if(session()->get('language') == 'romanian') Disponibilitate @else Availability @endif :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value">@if(session()->get('language') == 'romanian') In stoc @else In stock @endif</span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
                            @if(session()->get('language') == 'romanian') {{$product->short_descp_ro}} @else {{$product->short_descp_en}} @endif
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">
                                            @if ($product->discount_price == NULL)
											<span class="price">${{$product->selling_price}}</span>
                                            @else
											<span class="price">${{$product->discount_price}}</span>
											<span class="price-strike">${{$product->selling_price}}</span>
                                            @endif
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->


							<!-- add product color and size -->
							<div class="row">
									

									<div class="col-sm-6">
									<div class="form-group">
							<label class="info-title control-label">@if(session()->get('language') == 'romanian') Alege culoarea @else Choose color @endif</label>
							<select class="form-control unicase-form-control selectpicker" style="display:none" id="color">
								<option selected="" disabled="">--@if(session()->get('language') == 'romanian') Selecteaza @else Select @endif--</option>
								@if(session()->get('language') == 'romanian')
								@foreach($product_color_ro as $color)
								<option value="{{$color}}">{{ucwords($color)}}</option>
								@endforeach
								@else 
								@foreach($product_color_en as $color)
								<option value="{{$color}}">{{ucwords($color)}}</option>
								@endforeach 
								@endif
								
							</select>
						</div>
									</div>

									<div class="col-sm-6">
									<div class="form-group">
										@if($product->product_size_en == NULL)

										@else
										<label class="info-title control-label">@if(session()->get('language') == 'romanian') Alege dimensiunea @else Choose size @endif</label>
							<select class="form-control unicase-form-control selectpicker" style="display:none" id="size">
							<option selected="" disabled="">--@if(session()->get('language') == 'romanian') Selecteaza @else Select @endif--</option>
								@if(session()->get('language') == 'romanian')
								@foreach($product_size_ro as $size)
								<option value="{{$size}}">{{$size}}</option>
								@endforeach
								@else 
								@foreach($product_size_en as $size)
								<option value="{{$size}}">{{$size}}</option>
								@endforeach 
								@endif
							</select>
										@endif
							
						</div>
									</div>

								</div><!-- /.row -->
							<!-- add product color and size -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-3">
										<span class="label">@if(session()->get('language') == 'romanian') CANTITATE @else QUANTITY @endif :</span>
									</div>
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
								                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
								                </div>
								                <input type="text" id="qty" value="1" min="1">
							              </div>
							            </div>
										<input type="hidden" id="product_id" value="{{$product->id}}" min="1">
									</div>

									<div class="col-sm-7">
										<button class="btn btn-primary" type="submit" onclick="addToCart()"><i class="fa fa-shopping-cart inner-right-vs"></i> @if(session()->get('language') == 'romanian') ADAUGA IN COS @else ADD TO CART @endif</button>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">@if(session()->get('language') == 'romanian') DESCRIERE @else DESCRIPTION @endif</a></li>
								<li><a data-toggle="tab" href="#review">@if(session()->get('language') == 'romanian') RECENZII @else REVIEW @endif</a></li>
								<li><a data-toggle="tab" href="#tags">@if(session()->get('language') == 'romanian') TAGURI @else TAGS @endif</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">@if(session()->get('language') == 'romanian') {!!$product->long_descp_ro!!} @else {!!$product->long_descp_en!!} @endif</p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">@if(session()->get('language') == 'romanian') Recenzii clienti @else Customer reviews @endif</h4>
@php 
$reviews = App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
@endphp
											<div class="reviews">
												@foreach($reviews as $item)
												@if($item->status == 0)
												@else
												<div class="review">
													
												<div class="row">
			<div class="col-md-6">
			<img style="border-radius: 50%" src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}" width="40px;" height="40px;"><b> {{ $item->user->name }}</b>


 @if($item->rating == NULL)

 @elseif($item->rating == 1)
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
 @elseif($item->rating == 2)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

 @elseif($item->rating == 3)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

 @elseif($item->rating == 4)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
 @elseif($item->rating == 5)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

@endif



			</div>

			<div class="col-md-6">
				
			</div>			
		</div> <!-- // end row -->
													<div class="review-title"><span class="summary">{{$item->summary}}</span><span class="date"><i class="fa fa-calendar"></i><span>{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span></span></div>
													<div class="text">{{$item->comment}}</div>
																										</div>
											@endif
											@endforeach
											</div><!-- /.reviews -->
										</div><!-- /.product-reviews -->
										

										
										<div class="product-add-review">
											<h4 class="title">@if(session()->get('language') == 'romanian') Scrie recenzia ta @else Write your own review @endif</h4>
											<div class="review-table"> 

											</div><!-- /.review-table -->
											
											<div class="review-form">
												@guest
												<p>
													<b>
													@if(session()->get('language') == 'romanian') Pentru a adauga o recenzie, trebuie sa fii conectat @else For adding a review, you have to be logged in first! @endif<a href="{{route('login')}}">@if(session()->get('language') == 'romanian') Conecteaza-te aici @else Login here @endif</a>
													</b>
												</p>
												@else
												<div class="form-container">
													<form role="form" class="cnt-form" method="post" action="{{route('review.store')}}">
														@csrf
														<input type="hidden" name="product_id" value="{{$product->id}}">
														<table class="table">	
															<thead>
																<tr>
																	<th class="cell-label">&nbsp;</th>
																	<th>1 @if(session()->get('language') == 'romanian') stea @else star @endif</th>
																	<th>2 @if(session()->get('language') == 'romanian') stele @else stars @endif</th>
																	<th>3 @if(session()->get('language') == 'romanian') stele @else stars @endif</th>
																	<th>4 @if(session()->get('language') == 'romanian') stele @else stars @endif</th>
																	<th>5 @if(session()->get('language') == 'romanian') stele @else stars @endif</th>
																</tr>
															</thead>	
															<tbody>
																<tr>
																	<td class="cell-label">@if(session()->get('language') == 'romanian') Calitate @else Quality @endif</td>
																	<td><input type="radio" name="quality" class="radio" value="1"></td>
																	<td><input type="radio" name="quality" class="radio" value="2"></td>
																	<td><input type="radio" name="quality" class="radio" value="3"></td>
																	<td><input type="radio" name="quality" class="radio" value="4"></td>
																	<td><input type="radio" name="quality" class="radio" value="5"></td>
																</tr>
																
															</tbody>
														</table>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="exampleInputSummary">@if(session()->get('language') == 'romanian') Sumar @else Summary @endif <span class="astk">*</span></label>
							<input type="text" name="summary" class="form-control txt" id="exampleInputSummary" placeholder="">
						</div><!-- /.form-group -->
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputReview">@if(session()->get('language') == 'romanian') Recenzie @else Review @endif <span class="astk">*</span></label>
							<textarea class="form-control txt txt-review" name="comment" id="exampleInputReview" rows="4" placeholder=""></textarea>
						</div><!-- /.form-group -->
					</div>
				</div><!-- /.row -->
														
														<div class="action text-right">
															<button type="submit" class="btn btn-primary btn-upper">@if(session()->get('language') == 'romanian') TRIMITE RECENZIE @else SUBMIT REVIEW @endif</button>
														</div><!-- /.action -->

													</form><!-- /.cnt-form -->
												</div><!-- /.form-container -->
												
												@endguest
											</div><!-- /.review-form -->

										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

								<div id="tags" class="tab-pane">
									<div class="product-tag">
										
										<h4 class="title">@if(session()->get('language') == 'romanian') Taguri produse @else Product tags @endif</h4>
										<form role="form" class="form-inline form-cnt">
											<div class="form-container">
									
												<div class="form-group">
													<label for="exampleInputTag">@if(session()->get('language') == 'romanian') Adauga tag: @else Add tag: @endif </label>
													<input type="email" id="exampleInputTag" class="form-control txt">
													

												</div>

												<button class="btn btn-upper btn-primary" type="submit">@if(session()->get('language') == 'romanian') ADAUGA TAGURI @else ADD TAGS @endif</button>
											</div><!-- /.form-container -->
										</form><!-- /.form-cnt -->

										<form role="form" class="form-inline form-cnt">
											<div class="form-group">
												<label>&nbsp;</label>
												<span class="text col-md-offset-3">@if(session()->get('language') == 'romanian') Foloseste spatiu pentru a separa tagurile. Foloseste ghilimele ('') pentru fraze. @else Use spaces to separate tags. Use single quotes (') for phrases. @endif</span>
											</div>
										</form><!-- /.form-cnt -->

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

				<!-- ============================================== UPSELL PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">@if(session()->get('language') == 'romanian') Produse asemanatoare @else Related products @endif</h3>
	<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
	    	@foreach($relatedProduct as $product)
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" data-echo="{{asset($product->product_thumbnail)}}" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>@if(session()->get('language') == 'romanian') nou @else new @endif</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">@if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif
                          </a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			@if($product->discount_price == 0)
                          <div class="product-price"> <span class="price"> $ {{$product->selling_price}} </span> </div>
                          
								@else
                          <div class="product-price"> <span class="price"> $ {{$product->discount_price}} </span> <span class="price-before-discount">$ {{$product->selling_price}}</span> </div>
                          <!-- /.product-price --> 
                          
                @endif
									
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
					<div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                              @if(session()->get('language') == 'romanian') 
                              <button data-toggle="modal" data-target="#exampleModal"  id="{{$product->id}}" onclick="productView(this.id)" class="btn btn-primary icon" type="button" title="Adauda in cos"> <i class="fa fa-shopping-cart"></i> </button> 
                              @else 
                              <button data-toggle="modal" data-target="#exampleModal"  id="{{$product->id}}" onclick="productView(this.id)" class="btn btn-primary icon" type="button" title="Add to cart"> <i class="fa fa-shopping-cart"></i> </button> 
                              @endif
                                <button class="btn btn-primary cart-btn" type="button">
                                @if(session()->get('language') == 'romanian') Adauga in cos @else Add to cart @endif
                                </button>
                              </li>
                              @if(session()->get('language') == 'romanian') 
                              <button id="{{$product->id}}" onclick="addToWishList(this.id)" class="btn btn-primary icon" type="button" title="Lista de dorinte"> <i class="fa fa-heart"></i> </button> 
                              @else 
                              <button id="{{$product->id}}" onclick="addToWishList(this.id)" class="btn btn-primary icon" type="button" title="Wishlist"> <i class="fa fa-heart"></i> </button> 
                              @endif

                              @if(session()->get('language') == 'romanian') 
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compara"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> 
                              @else 
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> 
                              @endif
                              
                            </ul>
                          </div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
		@endforeach
			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->



<!-- == = BRANDS CAROUSEL : END = -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61c7b2f25ec1d141"></script>
@endsection