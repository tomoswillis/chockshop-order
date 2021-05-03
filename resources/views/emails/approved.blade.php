@component('mail::message')
# Your Order has been approved! 

Order Id: {{$order->id}}


@component('mail::button', ['url' => ''])
View Order
@endcomponent

---

Please contact us if you **did not** make this order. 

---

Thanks,<br>
{{ config('app.name') }}
@endcomponent
