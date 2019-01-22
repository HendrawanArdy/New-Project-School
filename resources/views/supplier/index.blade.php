@foreach ($supplier as $supplierlist)
{{ $supplierlist->supplier_id}}</br>
{{ $supplierlist->supplier_name}}</br>
{{ $supplierlist->supplier_address}}</br>
@endforeach
<a href="{{ url('supplier/create')}}">Tambah info</a>
