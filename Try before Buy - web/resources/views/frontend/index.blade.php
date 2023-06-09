@extends('frontend.main_master')
@section('content')

@section('title')
Try before Buy
@endsection
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        @include('frontend.common.vertical_menu')
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        @include('frontend.common.hot_deals')
        <!-- ============================================== HOT DEALS: END ============================================== --> 
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">@if(session()->get('language') == 'romanian') Oferta Speciala @else Special Offer @endif</h3>
          <div class="sidebar-widget-body outer-top-xs')}}">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs')}}">
              <div class="item">
                <div class="products special-product">
                  @foreach($special_offers as $product)
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"> <img src="{{asset($product->product_thumbnail)}}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">@if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $ {{$product->selling_price}} </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  
              @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
        <!-- ============================================== PRODUCT TAGS ============================================== -->
       @include('frontend.common.product_tags')
        <!-- /.sidebar-widget --> 
        <!-- ============================================== PRODUCT TAGS : END ============================================== --> 
        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">@if(session()->get('language') == 'romanian') De neratat @else Special Deals @endif</h3>
          <div class="sidebar-widget-body outer-top-xs')}}">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs')}}">
              <div class="item">
                <div class="products special-product">
                  @foreach($special_deals as $product)
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"> <img src="{{asset($product->product_thumbnail)}}"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">@if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> ${{$product->selling_price}} </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        <!-- ============================================== NEWSLETTER ============================================== -->
       
        <!-- /.sidebar-widget --> 
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
        <!-- ============================================== Testimonials============================================== -->
         @include('frontend.common.testimonials') 
        
        <!-- ============================================== Testimonials: END ============================================== -->
        
        <div class="home-banner"> <a href="upload/Try_before_Buy.zip" download><img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image"></a> </div>
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            @foreach($sliders as $slider)
            <div class="item" style="background-image: url({{ asset($slider->slider_image)}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="big-text fadeInDown-1"> {{$slider->title}} </div>
                  <div class="excerpt fadeInDown-2 hidden-xs')}}"> <span>{{$slider->description}}</span> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            @endforeach
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        
        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">@if(session()->get('language') == 'romanian') banii inapoi @else money back @endif</h4>
                    </div>
                  </div>
                  <h6 class="text">@if(session()->get('language') == 'romanian') banii inapoi in 30 de zile @else 30 Days money back guarantee @endif</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">@if(session()->get('language') == 'romanian') livrare gratuita @else free shipping @endif</h4>
                    </div>
                  </div>
                  <h6 class="text">@if(session()->get('language') == 'romanian') Comenzi in valoare de peste 299 lei @else Shipping on orders over $99 @endif</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">@if(session()->get('language') == 'romanian') Oferte Speciale @else Special Sale @endif</h4>
                    </div>
                  </div>
                  <h6 class="text">@if(session()->get('language') == 'romanian') Reducere 5% la toate produsele @else Extra 5% off on all items @endif </h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">
            @if(session()->get('language') == 'romanian') Produse noi @else New products @endif
            </h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">
              @if(session()->get('language') == 'romanian') Toate @else All @endif
              </a></li>

              @foreach($categories as $category)
              <li><a data-transition-type="backSlide" href="#category{{$category->id}}" data-toggle="tab">
              @if(session()->get('language') == 'romanian') {{$category->category_name_ro}} @else {{$category->category_name_en}} @endif
              </a></li>
              @endforeach
              <!-- <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
              <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li> -->
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs')}}">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                    @foreach($products as $product)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          @php
                            $amount = $product->selling_price - $product->discount_price;
                            $discount = ($amount/$product->selling_price) * 100;
                          @endphp

                          <div>
                              @if ($product->discount_price == NULL)
                              <div class="tag new"><span>
                                @if(session()->get('language') == 'romanian') nou @else new @endif
                              </span></div>
                              @else
                              <div class="tag hot"><span>
                                {{round($discount)}} %
                              </span></div>
                              @endif
                          </div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
                            @if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif
                          </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          @if($product->discount_price == 0)
                          <div class="product-price"> <span class="price"> $ {{$product->selling_price}} </span> </div>
                          
								@else
                          @php
									$amount = $product->selling_price - $product->discount_price;
									$discount = ($amount/$product->selling_price) * 100;
                        @endphp
                          <div class="product-price"> <span class="price"> $ {{$product->discount_price}} </span> <span class="price-before-discount">$ {{$product->selling_price}}</span> </div>
                          <!-- /.product-price --> 
                          
                @endif
                        </div>
                        <!-- /.product-info -->
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
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  @endforeach
                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            @foreach($categories as $category)
            <div class="tab-pane" id="category{{$category->id}}">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                @php
                  $catwiseProduct = App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get();
                @endphp
                    @forelse($catwiseProduct as $product)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          @php
                            $amount = $product->selling_price - $product->discount_price;
                            $discount = ($amount/$product->selling_price) * 100;
                          @endphp

                          <div>
                              @if ($product->discount_price == NULL)
                              <div class="tag new"><span>
                                @if(session()->get('language') == 'romanian') nou @else new @endif
                              </span></div>
                              @else
                              <div class="tag hot"><span>
                                {{round($discount)}} %
                              </span></div>
                              @endif
                          </div>
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
                            @if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif
                          </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          @if($product->discount_price == 0)
                          <div class="product-price"> <span class="price"> $ {{$product->selling_price}} </span> </div>
                          
								@else
                          <div class="product-price"> <span class="price"> $ {{round($discount)}} </span> <span class="price-before-discount">$ {{$product->selling_price}}</span> </div>
                          <!-- /.product-price --> 
                          
                @endif
                        </div>
                        <!-- /.product-info -->
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
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                    @empty
                  <h5 class="text-danger">
                  @if(session()->get('language') == 'romanian') Nici un produs gasit @else No product found @endif
                  </h5>
                  @endforelse
                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            @endforeach
            
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs')}}">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{asset('frontend/assets/images/banners/home-banner1.jpg')}}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{asset('frontend/assets/images/banners/home-banner2.jpg')}}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">@if(session()->get('language') == 'romanian') Produse recomandate @else Featured products @endif</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs')}}">
            @foreach($featured as $product)
            <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          @php
                            $amount = $product->selling_price - $product->discount_price;
                            $discount = ($amount/$product->selling_price) * 100;
                          @endphp

                          <div>
                              @if ($product->discount_price == NULL)
                              <div class="tag new"><span>
                                @if(session()->get('language') == 'romanian') nou @else new @endif
                              </span></div>
                              @else
                              <div class="tag hot"><span>
                                {{round($discount)}} %
                              </span></div>
                              @endif
                          </div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('product/details/'.$product->id.'/'.$product->product_slug_en)}}">
                            @if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif
                          </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          @if($product->discount_price == 0)
                          <div class="product-price"> <span class="price"> $ {{$product->selling_price}} </span> </div>
                          
								@else
                          @php
									$amount = $product->selling_price - $product->discount_price;
									$discount = ($amount/$product->selling_price) * 100;
                        @endphp
                          <div class="product-price"> <span class="price"> $ {{$product->discount_price}} </span> <span class="price-before-discount">$ {{$product->selling_price}}</span> </div>
                          <!-- /.product-price --> 
                          
                @endif
                        </div>
                        <!-- /.product-info -->
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
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
            <!-- /.item -->
            @endforeach
          
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- SKIP PRODUCT 0 PRODUCTS-->
       

        <!-- SKIP PRODUCT 0 PRODUCTS-->

        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs')}}">
          <div class="row">
            <div class="col-md-12">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner.jpg')}}" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">@if(session()->get('language') == 'romanian') Noua moda barbateasca @else New mens fashion @endif<br>
                      <span class="shopping-needs')}}">@if(session()->get('language') == 'romanian') Economiseste cu pana la 40% @else Save up to 40% off @endif</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">@if(session()->get('language') == 'romanian') NOU @else NEW @endif</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== BEST SELLER ============================================== -->
        
        <!-- /.sidebar-widget --> 
        <!-- ============================================== BEST SELLER : END ============================================== --> 
        
        <!-- ============================================== BLOG SLIDER ============================================== -->
        <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">@if(session()->get('language') == 'romanian') ULTIMELE TITLURI @else LATEST TOPICS @endif</h3>
          <div class="blog-slider-container outer-top-xs')}}">
            <div class="owl-carousel blog-slider custom-carousel">
              @foreach($blogpost as $blog)
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="{{route('post.details',$blog->id)}}"><img src="{{asset($blog->post_image)}}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name"><a href="{{route('post.details',$blog->id)}}">@if(session()->get('language') == 'romanian') {{$blog->post_title_ro}} @else {{$blog->post_title_en}} @endif</a></h3>
                    <span class="info">{{Carbon\Carbon::parse($blog->created_at)->diffForHumans()}} </span>
                    <p class="text">@if(session()->get('language') == 'romanian') {!!Str::limit($blog->post_details_ro,100)!!} @else {!!Str::limit($blog->post_details_en,100)!!} @endif</p>
                    <a href="{{route('post.details',$blog->id)}}" class="lnk btn btn-primary">Read more</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              @endforeach
              
            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    @include('frontend.body.brands')
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
@endsection