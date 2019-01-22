Customer<br/><br/>
@foreach ($employe as $employelist)
{{ $employelist->employe_id}}</br>
{{ $employelist->employe_name}}</br>
{{ $employelist->employe_address}}</br>
{{ $employelist->employe_number}}</br>
<a href ="/employe/{{$employelist->employe_id}}">Show</a>
<br/>

@endforeach

<a href="{{url('employe')}}">Index</a>