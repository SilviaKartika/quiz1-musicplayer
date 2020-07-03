@extends('tamplate.index') 
@section('content') 

<div class="container"> 
	<h3>Tambah Data Album</h3>
	<form action="{{ url('/album') }}" method="post"> 
		@csrf 
		<table align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="album_name"></td> 
			</tr> 
			<tr> 
			  	<td>ID Artist</td> 
			 	<td><input type="text" name="album_id_artist"></td>  
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection