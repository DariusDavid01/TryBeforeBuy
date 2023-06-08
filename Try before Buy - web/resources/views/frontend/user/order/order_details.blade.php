@extends('frontend.main_master')
@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
           
        @include('frontend.common.user_sidebar')


        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4>@if(session()->get('language') == 'romanian') Detalii livrare @else Shipping details @endif</h4>
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
                <table class="table">
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Nume @else Name @endif</th>
                        <th>{{$order->name}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Numar de telefon @else Phone number @endif</th>
                        <th>{{$order->phone}}</th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>{{$order->email}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Tara @else Country @endif</th>
                        <th>{{$order->division->division_name}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Judet @else County @endif</th>
                        <th>{{$order->district->district_name}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Localitate @else Village @endif</th>
                        <th>{{$order->state->state_name}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Cod postal @else Post code @endif</th>
                        <th>{{$order->post_code}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Data comenzii @else Order date @endif</th>
                        <th>{{$order->order_date}}</th>
                    </tr>
                </table>
            </div>
            </div>
        </div>


        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4>@if(session()->get('language') == 'romanian') Detalii comanda @else Order details @endif
                    <span class="text-danger"> Invoice : {{$order->invoice_no}} </span></h4>
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
                <table class="table">
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Nume @else Name @endif</th>
                        <th>{{$order->user->name}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Numar de telefon @else Phone number @endif</th>
                        <th>{{$order->user->phone}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Modalitate de livrare @else Payment type @endif</th>
                        <th>{{$order->payment_method}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') ID tranzactie @else Transaction ID @endif</th>
                        <th>{{$order->transaction_id}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Factura @else Invoice @endif</th>
                        <th class="text-danger">{{$order->invoice_no}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Total comanda @else Order total @endif</th>
                        <th>{{$order->amount}}</th>
                    </tr>
                    <tr>
                        <th>@if(session()->get('language') == 'romanian') Comanda @else Order @endif</th>
                        <th><span class="badge badge-pill badge-warning" style="background:#418DB9;">{{$order->status}}</span></th>
                    </tr>
                </table>
            </div>
            </div>
        </div>
        <div class="row">
            
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr style="background: #e2e2e2;">
                        <td class="col-md-1">
                            <label for="">@if(session()->get('language') == 'romanian') Imagine @else Image @endif</label>
                        </td>
                        <td class="col-md-3">
                            <label for="">@if(session()->get('language') == 'romanian') Nume produs @else Product name @endif</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">@if(session()->get('language') == 'romanian') Cod produs @else Product code @endif</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">@if(session()->get('language') == 'romanian') Culoare @else Color @endif</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">@if(session()->get('language') == 'romanian') Dimensiune @else Size @endif</label>
                        </td>
                        <td class="col-md-1">
                            <label for="">@if(session()->get('language') == 'romanian') Cantitate @else Quantity @endif</label>
                        </td>
                        <td class="col-md-1">
                            <label for="">@if(session()->get('language') == 'romanian') Pret @else Price @endif</label>
                        </td>
                        <td class="col-md-1">
                  <label for=""> @if(session()->get('language') == 'romanian') Descarca @else Download @endif </label>
                </td>
                    </tr>
                    @foreach($orderItem as $item)
                    <tr>
                        <td class="col-md-1">
                            <label for=""><img src="{{asset($item->product->product_thumbnail)}}" height="50px" width="50px"></label>
                        </td>
                        <td class="col-md-3">
                            <label for="">{{$item->product->product_name_en}}</label>
                        </td>
                        <td class="col-md-2">
                        <label for="">{{$item->product->product_code}}</label>
                        </td>
                        <td class="col-md-2">
                        <label for="">{{$item->color}}</label>
                        </td>
                        <td class="col-md-2">
                        <label for="">{{$item->size}}</label>
                        </td>
                        <td class="col-md-1">
                        <label for="">{{$item->qty}}</label>
                        </td>
                        <td class="col-md-1">
                        <label for="">${{$item->price}} (${{$item->price * $item->qty}})</label>
                        </td>

                        @php 
$file = App\Models\Product::where('id',$item->product_id)->first();
@endphp

             <td class="col-md-1">
              @if($order->status == 'pending')  
              <strong>
 <span class="badge badge-pill badge-success" style="background: #418DB9;"> @if(session()->get('language') == 'romanian') Fara fisier @else No file @endif</span>  </strong> 

              @elseif($order->status == 'confirm')  

<a target="_blank" href="{{ asset('upload/pdf/'.$file->digital_file) }}">  
  <strong>
 <span class="badge badge-pill badge-success" style="background: #FF0000;"> @if(session()->get('language') == 'romanian') Downloadul e gata @else Download ready @endif</span>  </strong> </a> 
              @endif


                </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        @if ($order->status != "delivered")

        @else
        @php
        $order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
        @endphp
        @if($order)
        <form action="{{route('return.order',$order->id)}}" method="post">
            @csrf
        <div class="form-group">
            <label for="label"> Order return reason:</label>
            <textarea name="return_reason" id="" class="form-control" cols="30" rows="5">@if(session()->get('language') == 'romanian') Motiv returnare @else Return reason @endif</textarea>
        </div>
        <button type="submit" class="btn btn-danger">@if(session()->get('language') == 'romanian') Returnare comanda @else Order return @endif</button>
</form>
@else
<span class="badge badge-pill badge-warning" style="background:red">@if(session()->get('language') == 'romanian') Ai trimis o cerere de returnare a produsului @else You sent a return request for this product @endif</span>
@endif
<br><br>
        @endif
        </div> <!-- //end row -->
    </div>
</div>
@endsection