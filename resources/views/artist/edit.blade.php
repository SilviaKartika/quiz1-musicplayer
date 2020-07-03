@extends('tamplate.index') 
@section('content') 
<div class="container"> 
	<h3>Edit Data Artist</h3>
	<form action="{{ url('/artist/'.$row->artist_id) }}" method="post"> 
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="artist_name" value="{{$row->artist_name }}"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="UPDATE"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection