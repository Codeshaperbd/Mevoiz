@extends('layouts.app')

@section('content')

<!-- addToCartPayment -->
<main id="tg-main" class="tg-main tg-haslayout addCrtPayment">

<!--************************************
        Categories Search Start
*************************************-->
<section class="tg-haslayout">
    <div class="container">

        <div class="row">
            <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
            	<h2>My Orders</h2>
                <div class="panel panel-default">
                @php $allTotal = 0 @endphp
                @foreach($orders as $order)
                    
                    <div class="panel-body">
                        <table style="width: 100%">
                            <thead class="head-tb">
                                <tr>
                                    <th width="10%">Sl</th>
                                    <th width="40%">Packeg Name</th>
                                    <th width="20%">quantaty</th>
                                    <th width="10%">total</th>
                                    <th width="20%">Purchase date</th>
                                </tr>
                            </thead>
                            <tbody class="body-tb">
                                    @foreach($order->cart->items as $item)
                                <tr>
                                    <td width="10%">Sl</td>
                                    <td width="40%">{{ $item['item']['country']['name'] }} {{ $item['item']['name'] }}</td>
                                    <td width="20%">{{$item['qty']}}</td>
                                    <td width="10%"><span class="badge">${{ $item['amount']}}</span></td>
                                    <td width="20%">{{ $order->created_at->diffForHumans() }}</td>
                                </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <table class="footerTbl" style="width: 100%">
                            <tbody" style="width: 100%">
                                <tr>
                                    <td width="10%"></td>
                                    <td width="40%"></td>
                                    <td width="20%"><strong>Sub Total</strong></td>
                                    <td width="10%"><span class="badge">${{ $order->cart->totalPrice }}</span></td>
                                    <td width="20%"></td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                  @php $allTotal = $allTotal + $order->cart->totalPrice @endphp
                @endforeach 
            </div>
                        <table class="footerTbl" style="width: 100%">
                            <tbody style="width: 100%">
                                <tr>
                                    <td width="10%"></td>
                                    <td width="40%"></td>
                                    <td width="20%"><h3>Total=</h3></td>
                                    <td width="10%"><h3>${{ $allTotal }}</h3></td>
                                    <td width="20%"></td>
                                </tr>
                            </tbody>
                        </table>
        </div>



    </div>
</section>

</main>



@endsection