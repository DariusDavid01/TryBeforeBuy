@foreach($products as $product)
  <div class="col-sm-6 col-md-4 wow fadeInUp">
    <div class="products">
      <div class="product">
        <div class="product-image">
          <div class="image"> <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img  src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
          <!-- /.image -->

           @php
        $amount = $product->selling_price - $product->discount_price;
        $discount = ($amount/$product->selling_price) * 100;
        @endphp     
          
          <div>
            @if ($product->discount_price == NULL)
            <div class="tag new"><span>new</span></div>
            @else
            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
            @endif
          </div>


        </div>
        <!-- /.product-image -->
        
        <div class="product-info text-left">
          <h3 class="name"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
          	@if(session()->get('language') == 'romanian') {{ $product->product_name_ro }} @else {{ $product->product_name_en }} @endif</a></h3>
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
               