@component('mail::message')
# Your lastest order has been received! 

We will email you when your order has been confirmed.



@component('mail::table')
| Product       | Quantity         | Total |
| ------------- |:-------------:| --------:|
@foreach($orderedItems as $item)
| {{ $item['item']['name'] }}   | **{{ $item['qty'] }}** | {{ $item['qty']*$item['price']/100 }}      |
@endforeach 
@endcomponent

***
{{-- ### Total: £{{$totalCost/100}} --}}
***
@component('mail::button', ['url' => ''])
Cancel Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
