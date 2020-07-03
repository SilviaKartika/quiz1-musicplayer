@extends('tamplate.index')
@section('content') 

        <div class="col-md-8 bg-light">
<div class="container"> 
	<h3 align="center">Edit Data Track</h3>
	<form action="{{ url('/track') }}" method="post"> 
		@csrf 
		<table align="center " border="3px" cellspacing="100px"> 
			<tr> 
			 	<td>Nama</td> 
			 	<td><input type="text" name="track_name"></td> 
			</tr> 
			<tr> 
			 	<td>ID Album</td> 
			 	<td><input type="text" name="track_id_album"></td> 
			</tr>
			<tr> 
			 	<td>Time</td> 
			 	<td><input type="text" name="track_time"></td> 
			</tr>
		<tr>
			<th>FILE (MP3)</th>
			<td><input type="file" name="track_file"></td>
		</tr>
		</td>
			</tr>
			<tr> 
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> 
			</tr>  
		</table>  
	</form>  
</div>  
@endsection