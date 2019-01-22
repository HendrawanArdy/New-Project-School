<form method="POST" action="{{ route('customers.store') }}">
{{csrf_field()}}
<input type="text" name="txt_name" id="txt_id"/>
<input type="text" name="txt_address" id="txt_id"/>
<input type="submit" name="S_save" id="S_save" value="save"/>
</form>