@extends('frontend.main_master')
@section('content')
@section('title')
TagWiseProduct
@endsection


<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        @include('frontend.common.vertical_menu')
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <h3 class="section-title">@if(session()->get('language') == 'romanian') vezi dupa @else shop by @endif</h3>
              <div class="widget-header">
                <h4 class="widget-title">@if(session()->get('language') == 'romanian') Categorie @else Category @endif</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                    @foreach($categories as $category)
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapse{{$category->id}}" data-toggle="collapse" class="accordion-toggle collapsed"> 
                    @if(session()->get('language') == 'romanian') {{$category->category_name_ro}} @else {{$category->category_name_en}} @endif</a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapse{{$category->id}}" style="height: 0px;">
                      <div class="accordion-inner">
                          @php
                          $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                          @endphp
                        <ul>
                            @foreach($subcategories as $subcategory)
                          <li><a href="#">@if(session()->get('language') == 'romanian') {{ $subcategory->subcategory_name_ro}} @else {{ $subcategory->subcategory_name_en}} @endif</a></li>
                          @endforeach
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  @endforeach
                  
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
            <!-- ============================================== PRICE SILDER============================================== -->
           
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== --> 
            <!-- ============================================== MANUFACTURES============================================== -->
    
            <!-- /.sidebar-widget --> 
            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            <!-- ============================================== COLOR============================================== -->
           
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COLOR: END ============================================== --> 
            <!-- ============================================== COMPARE============================================== -->
           
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COMPARE: END ============================================== --> 
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            @include('frontend.common.product_tags')
          <!----------- Testimonials------------->
            @include('frontend.common.testimonials')
            
            <!-- ============================================== Testimonials: END ============================================== -->
            
            <div class="home-banner"> <a href="upload/Try_before_Buy.zip" download><img src="{{asset('frontend/assets/images/banners/LHS-banner.jpg')}}" alt="Image"></a> </div>
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
     
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>@if(session()->get('language') == 'romanian') Grila @else Grid @endif</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>@if(session()->get('language') == 'romanian') Lista @else List @endif</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">@if(session()->get('language') == 'romanian') Sorteaza dupa @else Sort by @endif</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> @if(session()->get('language') == 'romanian') Pozitie @else Position @endif <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">@if(session()->get('language') == 'romanian') pozitie @else position @endif</a></li>
                        <li role="presentation"><a href="#">@if(session()->get('language') == 'romanian') Pret: cel mai mic @else Price: Lowest first @endif</a></li>
                        <li role="presentation"><a href="#">@if(session()->get('language') == 'romanian') Pret: cel mai mare @else Price: Highest first @endif</a></li>
                        <li role="presentation"><a href="#">@if(session()->get('language') == 'romanian') Nume: A la Z @else Product Name: A to Z @endif</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">@if(session()->get('language') == 'romanian') Arata @else Show @endif</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>

        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">

                @foreach($products as $product)
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
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
                          <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          @if ($product->discount_price == NULL)
                            <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span>   </div>
                            @else
                            <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">$ {{ $product->selling_price }}</span> </div>
                        @endif
                          <!-- /.product-price --> 
                          
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
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            


            <!-- product list view start -->
            <div class="tab-pane "  id="list-container">
              <div class="category-product">
                  
                @foreach($products as $product)
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="{{asset($product->product_thumbnail)}}" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'romanian') {{$product->product_name_ro}} @else {{$product->product_name_en}} @endif</a></h3>
                            <div class="rating rateit-small"></div>
                                
                            @if ($product->discount_price == NULL)
                              <div class="product-price"> <span class="price"> ${{ $product->selling_price }} </span></div>
                            @else
                              <div class="product-price"> <span class="price"> ${{ $product->discount_price }} </span> <span class="price-before-discount">${{ $product->selling_price }}</span> </div>
                            @endif

                            
                            <!-- /.product-price -->
                            <div class="description m-t-10">
                            @if(session()->get('language') == 'romanian') short_descp_ro @else {{ $product->short_descp_en }} @endif</div>
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
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      <div class="tag new"><span>@if(session()->get('language') == 'romanian') nou @else new @endif</span></div>
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                @endforeach
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 


@endsection