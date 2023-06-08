@extends('frontend.main_master')
@section('content')
@section('title')
Checkout
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">@if(session()->get('language') == 'romanian') Acasa @else Home @endif</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	          <span>1</span>@if(session()->get('language') == 'romanian') Metoda checkout @else Checkout method @endif
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		

				<!-- guest-login -->			
				<div class="col-md-6 col-sm-6 already-registered-login">
					<h4 class="checkout-subtitle"><b>@if(session()->get('language') == 'romanian') Adresa de livrare @else Shipping address @endif</b></h4>
					<form class="register-form" action="{{route('checkout.store')}}" method="POST">
						@csrf
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">@if(session()->get('language') == 'romanian') Nume @else Name @endif <span>*</span></label>
					    <input type="text" name="shipping_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Full name" value="{{Auth::user()->name}}" required="">
					  </div>
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">@if(session()->get('language') == 'romanian') Email @else Email @endif <span>*</span></label>
					    <input type="email" name="shipping_email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Full email" value="{{Auth::user()->email}}" required="">
					  </div>
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">@if(session()->get('language') == 'romanian') Numar de telefon @else Phone number @endif <span>*</span></label>
					    <input type="number" name="shipping_phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Phone" value="{{Auth::user()->phone}}" required="">
					  </div>
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">@if(session()->get('language') == 'romanian') Cod postal @else Post code @endif <span>*</span></label>
					    <input type="text" name="post_code" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Post code" required="">
					  </div>
				</div>	
				<!-- guest-login -->

				<!-- already-registered-login -->
				<div class="col-md-6 col-sm-6 already-registered-login">
						
				<div class="form-group">
								<h5>@if(session()->get('language') == 'romanian') Tara @else Country @endif <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="division_id" class="form-control" required="">
										<option value="" selected="" disabled="">@if(session()->get('language') == 'romanian') Selecteaza tara @else Select the country @endif</option>
                                        @foreach($divisions as $item)
										<option value="{{$item->id}}">{{$item->division_name}}</option>
                                        @endforeach
									</select>
                                    @error('division_id')
						<span class="text-danger">{{$message}}</span>
						@enderror
								</div>
							</div>
				<div class="form-group">
								<h5>@if(session()->get('language') == 'romanian') Judet @else County @endif <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="district_id" class="form-control" required="">
										<option value="" selected="" disabled="">@if(session()->get('language') == 'romanian') Selecteaza judetul @else Select the county @endif</option>
                                        @foreach($districts as $item)
										<option value="{{$item->id}}">{{$item->district_name}}</option>
                                        @endforeach
									</select>
                                    @error('district_id')
						<span class="text-danger">{{$message}}</span>
						@enderror
								</div>
							</div>
				<div class="form-group">
								<h5>@if(session()->get('language') == 'romanian') Localitate @else Village @endif <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="state_id" class="form-control" required="">
										<option value="" selected="" disabled="">@if(session()->get('language') == 'romanian') Selecteaza locuinta @else Select the village @endif</option>
                                        @foreach($states as $item)
										<option value="{{$item->id}}">{{$item->state_name}}</option>
                                        @endforeach
									</select>
                                    @error('state_id')
						<span class="text-danger">{{$message}}</span>
						@enderror
								</div>
							</div>
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">Notes</label>
					   <textarea class="form-control" cols="30" rows="5" name="notes" placeholder="Notes"></textarea>
					  </div>
				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					    <!-- checkout-step-02  -->
					  	<div class="panel panel-default checkout-step-02">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
						          <span>2</span>@if(session()->get('language') == 'romanian') Informatii despre plata @else Billing information @endif
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse">
						      <div class="panel-body">
						      @if(session()->get('language') == 'romanian') Facturarea este procesul de generare și trimitere a facturilor către clienți pentru produsele sau serviciile primite.
O facturare exactă este importantă pentru a se asigura că clienții sunt facturați corect și că întreprinderea primește suma corespunzătoare de venituri.
							  @else 
							  Billing is the process of generating and sending invoices to customers for the products or services they have received.
Accurate billing is important to ensure that customers are billed correctly and that the business receives the appropriate amount of revenue.
@endif
						      </div>
						    </div>
					  	</div>
					  	<!-- checkout-step-02  -->

						<!-- checkout-step-03  -->
					  	<div class="panel panel-default checkout-step-03">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
						       		<span>3</span>@if(session()->get('language') == 'romanian') Informatii despre livrare @else Shipping information @endif
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse">
						      <div class="panel-body">

						      @if(session()->get('language') == 'romanian') Transportul online a revoluționat modul în care sunt transportate și livrate mărfurile către clienți.
Cu transportul online, clienții pot comanda produse de oriunde din lume și le pot primi direct la ușa lor.
Dezvoltarea comerțului electronic a alimentat creșterea transportului maritim online, deoarece tot mai mulți consumatori preferă să facă cumpărături online decât în magazinele tradiționale de cărămidă și mortar.
Companiile de transport maritim online folosesc o varietate de metode de transport, inclusiv avioane, nave, camioane și trenuri, pentru a muta bunurile în întreaga lume.
							   @else 
							  Online shipping has revolutionized the way that goods are transported and delivered to customers.
With online shipping, customers can order products from anywhere in the world and have them delivered directly to their doorstep.
The rise of e-commerce has fueled the growth of online shipping, as more and more consumers prefer to shop online rather than in traditional brick-and-mortar stores.
Online shipping companies use a variety of transportation methods, including planes, ships, trucks, and trains, to move goods across the globe.
 @endif

						      </div>
						    </div>
					  	</div>
					  	<!-- checkout-step-03  -->

						<!-- checkout-step-04  -->
					    <div class="panel panel-default checkout-step-04">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
						        	<span>4</span>@if(session()->get('language') == 'romanian') Metoda de livrare @else Shipping Method @endif
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFour" class="panel-collapse collapse">
							    <div class="panel-body">
								@if(session()->get('language') == 'romanian')
								Există diferite metode de expediere disponibile pentru întreprinderi și persoane fizice, în funcție de viteza, costul și mărimea transportului.
Una dintre cele mai comune metode de expediere este transportul terestru, care este de obicei mai lent decât transportul aerian, dar și mai puțin costisitor.
Transportul aerian este o opțiune mai rapidă și mai scumpă, care este adesea utilizată pentru expedierile sensibile la timp sau de mare valoare.
								  @else 
								  There are various methods of shipping available to businesses and individuals, depending on the speed, cost, and size of the shipment.
One of the most common shipping methods is ground shipping, which is typically slower than air shipping but also less expensive.
Air shipping is a faster and more expensive option that is often used for time-sensitive or high-value shipments.
								  
								  @endif

							    </div>
					    	</div>
						</div>
						<!-- checkout-step-04  -->

						<!-- checkout-step-05  -->
					  	<div class="panel panel-default checkout-step-05">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
						        	<span>5</span>@if(session()->get('language') == 'romanian') Informatii despre plata @else Payment information @endif
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFive" class="panel-collapse collapse">
						      <div class="panel-body">
							  @if(session()->get('language') == 'romanian')
							  Informațiile de plată se referă la detaliile unei tranzacții care sunt necesare pentru a procesa o plată, inclusiv suma, metoda de plată și informațiile de facturare.
Atunci când fac o achiziție online, clienții sunt adesea nevoiți să introducă informațiile de plată, cum ar fi detaliile cardului de credit sau ale contului bancar, pentru a finaliza tranzacția.
Informațiile de plată sunt de obicei criptate pentru a se asigura că sunt sigure și protejate de accesul neautorizat.
Comercianții sunt responsabili de păstrarea în siguranță a informațiilor de plată și de respectarea reglementărilor relevante, cum ar fi Standardul de securitate a datelor din industria cardurilor de plată (PCI DSS).
Procesatorii de plăți și gateway-urile facilitează transferul de informații de plată între client, comerciant și instituțiile financiare.
								  @else 
								  Payment information refers to the details of a transaction that are required to process a payment, including the amount, payment method, and billing information.
When making an online purchase, customers are often required to enter their payment information, such as credit card or bank account details, to complete the transaction.
Payment information is typically encrypted to ensure that it is secure and protected from unauthorized access.
Merchants are responsible for keeping payment information safe and complying with relevant regulations, such as the Payment Card Industry Data Security Standard (PCI DSS).
Payment processors and gateways facilitate the transfer of payment information between the customer, merchant, and financial institutions.
@endif
							
							</div>
						    </div>
					    </div>
					    <!-- checkout-step-05  -->

					  	
					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">@if(session()->get('language') == 'romanian') Progres checkout @else Your checkout progress @endif</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled">
                    @foreach($carts as $item)
					<li>
                        <strong>@if(session()->get('language') == 'romanian') Imagine @else Image @endif : </strong>
                        <img src="{{asset($item->options->image)}}" style="height:50px; width:50px">
                    </li>
					<li>
                        <strong>@if(session()->get('language') == 'romanian') Cantitate @else Quantity @endif : </strong>
                        ( {{$item->qty}} )
                        <strong>@if(session()->get('language') == 'romanian') Culoare @else Color @endif : </strong>
                        {{$item->options->color}}
                        <strong>@if(session()->get('language') == 'romanian') Dimensiune @else Size @endif : </strong>
                        {{$item->options->size}}
                    </li>
                    @endforeach
                    <hr>
					<li>
                        @if(Session::has('coupon'))
                        <strong>Subtotal: </strong> $ {{$cartTotal}}<hr>
                        <strong>@if(session()->get('language') == 'romanian') Cupon @else Coupon @endif : </strong> {{session()->get('coupon')['coupon_name']}}
                        ( {{session()->get('coupon')['coupon_discount']}} %)
                        <hr>
                        <strong>@if(session()->get('language') == 'romanian') Discount cupon @else Coupon discount @endif : </strong>$ {{session()->get('coupon')['discount_amount']}}<hr>
                        <strong>Total: </strong>$ {{session()->get('coupon')['total_amount']}}<hr>
                        
                        @else
                        <strong>Subtotal: </strong> $ {{$cartTotal}}<hr>
                        <strong>Total: </strong> $ {{$cartTotal}}<hr>
                        @endif
                    </li>
				</ul>		
			</div>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>

<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">@if(session()->get('language') == 'romanian') Selecteaza modalitatea de plata @else Select payment method @endif</h4>
		    </div>
		    <div class="row">	
				<div class="col-md-4">
					<label for="">Stripe</label>
					<input type="radio" name="payment_method" value="stripe">
					<img src="{{asset('frontend/assets/images/payments/4.png')}}">
				</div>
				<div class="col-md-4">
					
				<label for="">Card</label>
					<input type="radio" name="payment_method" value="card">
					<img src="{{asset('frontend/assets/images/payments/3.png')}}">
				</div>
				<div class="col-md-4">
					
				<label for="">@if(session()->get('language') == 'romanian') Numerar @else Cash @endif</label>
					<input type="radio" name="payment_method" value="cash">
					<img src="{{asset('frontend/assets/images/payments/6.png')}}">
				</div>
			</div>
				<hr>
				<button type="submit" class="btn-upper btn btn-primary checkout-page-button">@if(session()->get('language') == 'romanian') Plateste @else Pay @endif</button>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>

</form>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<script type="text/javascript">
$(document).ready(function(){
    $('select[name="division_id"]').on('change',function(){
        var division_id = $(this).val();
        if (division_id){
            $.ajax({
                url:"{{ url('/district-get/ajax') }}/" + division_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    $('select[name="state_id"]').empty();
                    var d=$('select[name="district_id"]').empty();
                    $.each(data,function(key,value){
                        $('select[name="district_id"]').append('<option value="'+value.id+'">'+value.district_name+'</option>');
                    });
                },
            });
        } else{
            alert('danger');
        }
    });


    $('select[name="district_id"]').on('change',function(){
        var district_id = $(this).val();
        if (district_id){
            $.ajax({
                url:"{{ url('/state-get/ajax') }}/" + district_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    var d=$('select[name="state_id"]').empty();
                    $.each(data,function(key,value){
                        $('select[name="state_id"]').append('<option value="'+value.id+'">'+value.state_name+'</option>');
                    });
                },
            });
        } else{
            alert('danger');
        }
    });
});


    </script>
@endsection