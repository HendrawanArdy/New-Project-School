E M P L O Y E D
<br /><br/>

@foreach ($employe as $employelist)
{{ $employelist->employe_id}}
{{ $employelist->employe_name}}</br><br/>
{{ $employelist->employe_address}}</br><br/>
{{ $employelist->employe_phone_number}}</br><br/>
<a href ="/employe/{{$employelist->employe_id}}">Show</a>
<br/>

<a href ="/employe/{{$employelist->employe_id}}/edit">Edit</a>
<br/>

<form action="/employe/{{$employelist->employe_id}}"method="post">
{{csrf_field()}}
{{method_field('DELETE')}}
<button>Hapus Data</button>
<br/>
<br/>
@endforeach
<a href="{{url('employe/create')}}">Buat data baru!</a>