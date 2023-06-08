@extends('frontend.main_master')
@section('content')
@section('title')
@if(session()->get('language') == 'romanian') Cosul meu @else My cart @endif
@endsection

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">@if(session()->get('language') == 'romanian') Acasa @else Home @endif</a></li>
				<li class='active'>@if(session()->get('language') == 'romanian') Cosul meu @else My cart @endif</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
	<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">@if(session()->get('language') == 'romanian') Imagine @else Image @endif</th>
					<th class="cart-description item">@if(session()->get('language') == 'romanian') Nume produs @else Product name @endif</th>
					<th class="cart-product-name item">@if(session()->get('language') == 'romanian') Culoare @else Color @endif</th>
					<th class="cart-edit item">@if(session()->get('language') == 'romanian') Dimensiune @else Size @endif</th>
					<th class="cart-qty item">@if(session()->get('language') == 'romanian') Cantitate @else Quantity @endif</th>
					<th class="cart-sub-total item">Subtotal</th>
					<th class="cart-total last-item">@if(session()->get('language') == 'romanian') Sterge @else Remove @endif</th>
				</tr>
			</thead><!-- /thead -->
			<tbody id="cartPage">
				
			</tbody>
		</table>
	</div>
                </div>		
				<div class="col-md-4 col-sm-12 estimate-ship-tax">





				</div>

				<div class="col-md-4 col-sm-12 estimate-ship-tax">
					@if (Session::has('coupon'))
					@else
	<table class="table" id="couponField">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">@if(session()->get('language') == 'romanian') Cod discount @else Discount code @endif</span>
					<p>@if(session()->get('language') == 'romanian') Introdu cuponu, daca ai unul @else Enter your coupon code if you have one @endif</p>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>
						<div class="form-group">
							<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon.." id="coupon_name">
						</div>
						<div class="clearfix pull-right">
							<button type="submit" class="btn-upper btn btn-primary" onclick="applyCoupon()">@if(session()->get('language') == 'romanian') APLICA CUPON @else APPLY COUPON @endif</button>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
	@endif
</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead id="couponCalField">
			
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="cart-checkout-btn pull-right">
							<a href="{{route('checkout')}}" type="submit" class="btn btn-primary checkout-btn">@if(session()->get('language') == 'romanian') CATRE CHECKOUT @else PROCEED TO CHECKOUT @endif</a>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->			

</div><!-- /.row -->
		</div><!-- /.sigin-in-->
        <br>
        @include('frontend.body.brands')
</div>
</div>



@endsection
