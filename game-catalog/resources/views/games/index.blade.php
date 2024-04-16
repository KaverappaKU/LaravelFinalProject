@extends('home')
@section('content')
<div class="row">
   <div class="col">
      <h1 class="display-2">View all games</h1>
   </div>
</div>
<div class="row">
   @foreach($games as $game)
   <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h3 class="card-title">{{ $game -> name }}</h3>
            <h6 class="card-title">Developer: <strong>{{ $game -> developer }}</strong></h6>
            <h6 class="card-title">Genre: <strong>{{ $game -> genre }}</strong></h6>
            <h6 class="card-title">Release Date: <strong>{{ $game -> release_date }}</strong></h6>
            <a href="{{ route('games.edit', $game -> id ) }}" class="card-link">Edit</a>
            <a href="{{ route('games.trash', $game -> id )}}" class="card-link">Delete</a>
         </div>
      </div>
   </div>
   @endforeach
</div>
@endsection