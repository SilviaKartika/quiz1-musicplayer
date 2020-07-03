@extends('tamplate.index')

@section('content') 
<div class="container-fluid bg-dark">
<div class="container bg-info">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
	        <a class="nav-link" href="{{ url('/home') }}">Home</a>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>
            <a class="nav-link" href="{{ url('/artist') }}">Artist</a>
            <a class="nav-link" href="{{ url('/album') }}">Album</a>
            <a class="nav-link" href="{{ url('/track') }}">Track</a>
            <a class="nav-link" href="{{ url('/played') }}">Played</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</ul>
</nav>


<div class="container">
	<h3>Daftar Track</h3> 
	<table align="center " border="3px" cellspacing="100px"> 
		<tr> 
			<td>Nama</td> 
			<td>ID Album</td>
			<td>Time</td>
			<td>File</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
		@foreach($rows as $row)
		<tr> 
			<td>{{ $row->track_name }}</td> 
			<td>{{ $row->track_id_album }}</td>
			<td>{{ $row->track_time }}</td> 
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/.m4a">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
			</td>
						<td><form action="{{ url('track/' . $row->track_id) }}" method="POST"> 
 						<input name="_method" type="hidden" value="DELETE"> 
 						@csrf 
 						<button class="btn-danger">Hapus</button> 
				</form>
			</td>
			<td><a href="{{ url('track/' . $row->track_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td>
		</tr>
	@endforeach 
</table> 
</div> 
<div><a href="{{ url('track/create') }}">Tambah Data</a></div>
 @endsection