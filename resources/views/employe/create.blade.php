Inputan Data <br/><br/>
<form method="POST" action="{{ route('employe.store') }}">
{{csrf_field()}}
<input type="text" name="txt_Name" /><br/><br/>
<input type="text" name="txt_Address" /><br/><br/>
<input type="text" name="txt_Number" /><br/><br/>
<input type="submit" name="S_save" id="S_save" value="save"/>
</form>