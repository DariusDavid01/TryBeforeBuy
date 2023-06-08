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
                            <label for="">@if(session()->get('language') == 'romanian') Motiv returnare @else Return reason @endif</label>
                        </td>
                        <td class="col-md-1">
                            <label for="">@if(session()->get('language') == 'romanian') Status comanda @else Order status @endif</label>
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
                            <label for="">{{$order->return_reason}}</label>
                        </td>
                        <td class="col-md-2">
                            <label for="">
                            @if ($order->return_order == 0)
                            <span class="badge badge-pill badge-warning" style="background:#418DB9;">@if(session()->get('language') == 'romanian') Fara cerere de returnare @else No return requested @endif</span>
                            @elseif($order->return_order == 1)
                            <span class="badge badge-pill badge-warning" style="background:#800000;">@if(session()->get('language') == 'romanian') In asteptare @else Pending @endif</span>
                            <span class="badge badge-pill badge-warning" style="background:red;">@if(session()->get('language') == 'romanian') Cerere de returnare @else Return request @endif</span>
                            @elseif($order->return_order == 2)
                            <span class="badge badge-pill badge-warning" style="background:#008000;">@if(session()->get('language') == 'romanian') Succes @else Success @endif</span>
                            @endif
                            </label>
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