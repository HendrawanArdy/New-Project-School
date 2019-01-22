Edit Data
<br/>
@foreach ($employe as $employelist)
<form action ="{{route('employe.update', $employelist->employe_id)}}"method="post">
{{csrf_field()}}
{{method_field('PUT')}}
<input type="text" name="txt_name" value="{{$employelist->name}}"/>
<br/><br/>
<input type="text" name="txt_address" value="{{$employelist->address}}"/>
<br/><br/>
<input type="text" name="txt_number" value="{{$employelist->number}}"/>
<br/><br/>
@endforeach
<button type="submit">Submit</button>
<br/>
<a href="{{url('employe')}}">Index</a>