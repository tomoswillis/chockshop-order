@component('mail::message')
# Your Order has been approved! 

Order Id: {{$order->id}}

@component('mail::panel')
Please contact us if you **did not** make this order. 
@endcomponent

@component('mail::button', ['url' => 'http://chockshop-order.test/myorders/'.$order->id])
View Order
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
