@extends('tamplate.index')
@section('content') 


<div class="container"> 
	<h3>Tambah Data Artist</h3>
	<form action="{{ url('/artist') }}" method="post"> 
		@csrf
		<table align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="artist_name"></td> 
			</tr> 
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection