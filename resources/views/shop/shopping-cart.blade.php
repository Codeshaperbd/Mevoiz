@extends('layouts.app')

@section('styles')


<style type="text/css">
    tr.head-table td {
        font-size: 18px;
        border: 1px solid #ddd;
        margin-bottom: 21px;
        padding-bottom: 10px;
        overflow: hidden;
        /* display: block; */
        padding: 7px;
    }

    tr.body-table td {
        border: 1px solid #ddd;
        padding: 10px;
    }
</style>

@endsection

@section('content')

<!-- addToCartPayment -->
<main id="tg-main" class="tg-main tg-haslayout addCrtPayment">

<!--************************************
        Categories Search Start
*************************************-->
<section class="tg-haslayout">
    <div class="container">
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
            	<ul class="list-group">
                    <table>
                        <thead>
                            <tr class="head-table">
                                <td width="50%">Packeg Name</td>
                                <td width="15%">Amount</td>
                                <td width="15%">Remove Item</td>
                                <td width="10%">Quantaty</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($packegs as $packeg)
                            <tr class="body-table">
                                <td>
                                    <strong>{{ $packeg['item']['country']['name'] }} {{ $packeg['item']['name'] }}</strong>
                                </td>
                                <td>
                                    <span class="label label-success">{{ $packeg['amount'] }}$</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu" style="width: 160px">
                                        <li style="margin: 0px;list-style: none;border-bottom: 1px solid #ddd;"><a href="{{ route('packeg.getReduceByOne',$packeg['item']['id']) }}">Reduce By 1</a></li>                                   
                                        <li style="margin: 0px;list-style: none;"><a href="{{ route('packeg.remove',$packeg['item']['id']) }}">Reduce All</a></li>                                  
                                    </ul>
                                </div>
                                </td>
                                <td><span class="badge">{{ $packeg['qty'] }}</span></td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td><strong>Total: {{ $totalPrice }}$</strong></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
            	</ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" style="text-align: center;">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-lg btn-success btn-lg">Checkout</a>
            </div>
        </div>
        <hr>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            	<h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif

    </div>
</section>

</main>



@endsection