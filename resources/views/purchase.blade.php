<h2>Hello {{ $email }}</h2>
<h3>Number: {{ $number }}</h3>
<h3>Message: {{ $name }} Purchase Your Product.</h3>
<h3>Payment By: {{ $payVai }} </h3>

<table class="ckOutTable">
	@foreach($packegs as $packeg)
	<tr>
		<td>{{ $packeg['item']['country']['name'] }} {{ $packeg['item']['name'] }}<span class="badge">{{ $packeg['qty'] }}</span></td>
		<td>${{ $packeg['amount'] }}</td>
	</tr>
	@endforeach
	<tr>
		<td><strong>Total Amount</strong></td>
		<td><strong>${{ $totalPrice }}</strong></td>

	</tr>
</table>