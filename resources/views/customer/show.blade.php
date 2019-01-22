Customer
@foreach ($customer as $customerlist)
{{ $customerlist->customers_id}}</br>
{{ $customerlist->name}}</br>
{{ $customerlist->address}}</br>
<a href ="/customers/{{$customerlist->customer_id}}">show</a>
<br/>

@endforeach

<a href="{{url('customers')}}">INDEX</a>