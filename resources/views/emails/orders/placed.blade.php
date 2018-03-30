<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Email</title>
</head>
<body>
	 <p>
	 	<h3>Orders</h3>
		Order Id: {{ $order->id }}	<br>
		Order Email: {{ $order->billing_email }}
		Order Billing Name: {{ $order->billing_name }} <br> 
		Order Total: ${{ round($order->billing_total / 100, 2) }} <br>
	 </p>
	 <p>
	 	<h3>Our Product(s)</h3>
	 	@foreach($order->products as $product)
	 	Name: {{ $product->name }}<br>
	 	Price: ${{ round($product->price / 100, 2)}}<br>
	 	Quantity: {{ $product->pivot->quantity }}<br>
	 	@endforeach
	 </p>
	 You can get futher details about your order by logging into our websites

	 <p>
	 	Thank you again for chossing us.
	 </p>
</body>
</html>