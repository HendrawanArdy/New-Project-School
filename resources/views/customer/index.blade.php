apakah ini keluar bro?
<br />

@foreach ($customer as $customerlist)
{{ $customerlist->customers_id}}</br>
{{ $customerlist->name}}</br>
{{ $customerlist->address}}</br>
<a href ="/customers/{{$customerlist->customer_id}}">show</a>
<br/>
<a href ="/customers/{{$customerlist->customer_id}}/edit">edit</a>
<br/>
<form action="/customers/{{$customerlist->customer_id}}"method="post">
{{csrf_field()}}
{{method_field('DELETE')}}
<button>X</button>
@endforeach
<a href="{{url('customers/create')}}">
pencet saya donk
</a>