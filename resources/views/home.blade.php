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
            <div class="card">
                <div class="card-header">Dashboard</div>          
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1>Selamat Datang di Sistem Informasi Music Player</h1> 
                    <h2>Enjoy Your Music</h2>
                    <h1>_______________________________________</h1>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
@endsection
