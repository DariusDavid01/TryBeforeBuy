@extends('frontend.main_master')
@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
           
        @include('frontend.common.user_sidebar')
    <div class="col-md-2">

    </div>
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr style="background: #e2e2e2;">
                        <td class="col-md-1">
                            <label for="">@if(session()->get('language') == 'romanian') Data @else Date @endif</label>
                        </td>
                        <td class="col-md-3">
                            <label for="">Total</label>
                        </td>
                        <td class="col-md-3">
                            <label for="">@if(session()->get('language') == 'romanian') Plata @else Payment @endif</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">@if(session()->get('language') == 'romanian') Factura @else Invoice @endif</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">@if(session()->get('language') == 'romanian') Comanda @else Order @endif</label>
                        </td>
                        <td class="col-md-1">
                            <label for="">@if(session()->get('language') == 'romanian') Actiune @else Action @endif</label>
                        </td>
                    </tr>
                    @foreach($orders as $order)
                    <tr style="border: solid; border-width: 1px 0;">
                        <td class="col-md-1">
                            <label for="">{{$order->order_date}}</label>
                        </td>
                        <td class="col-md-3">
                            <label for="">${{$order->amount}}</label>
                        </td>
                        <td class="col-md-3">
                            <label for="">{{$order->payment_method}}</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">{{$order->invoice_no}}</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">
                                @if ($order->status == "pending")
                            <span class="badge badge-pill badge-warning" style="background:#800080;">@if(session()->get('language') == 'romanian') Procesare @else Pending @endif</span>
                                @elseif ($order->status == "confirm")
                            <span class="badge badge-pill badge-warning" style="background:#0000FF;">@if(session()->get('language') == 'romanian') Confirmata @else Confirmed @endif</span>
                                @elseif ($order->status == "processing")
                            <span class="badge badge-pill badge-warning" style="background:#FFA500;">@if(session()->get('language') == 'romanian') Procesata @else Processed @endif</span>
                                @elseif ($order->status == "picked")
                            <span class="badge badge-pill badge-warning" style="background:#800080;">@if(session()->get('language') == 'romanian') Preluata @else Picked @endif</span>
                                @elseif ($order->status == "shipped")
                            <span class="badge badge-pill badge-warning" style="background:#800080;">@if(session()->get('language') == 'romanian') Expediata @else Shipped @endif</span>
                                @elseif ($order->status == "delivered")
                            <span class="badge badge-pill badge-warning" style="background:#00FF00;">@if(session()->get('language') == 'romanian') Livrata @else Delivered @endif</span>

                            @if ($order->return_order == 1)
                            <span class="badge badge-pill badge-warning" style="background:red;">@if(session()->get('language') == 'romanian') Cerere de returnare @else Return requested @endif</span>
                            @endif
                                @else
                                <span class="badge badge-pill badge-warning" style="background:#FF0000;">@if(session()->get('language') == 'romanian') Anulat @else Canceled @endif</span>    
                                @endif
                            </label>
                        </td>
                        <td class="col-md-1">
                            <a href="{{url('user/order_details/'.$order->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> @if(session()->get('language') == 'romanian') Vizualizare @else View @endif </a>
                            <a target="_blank" href="{{url('user/invoice_download/'.$order->id)}}" class="btn btn-sm btn-danger" style="margin-top:5px"><i class="fa fa-download" style="color:white"></i> @if(session()->get('language') == 'romanian') Factura @else Invoice @endif </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        </div> <!-- //end row -->
    </div>
</div>
@endsection