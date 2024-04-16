@extends('home')@section('content')
<div class="row">
   <div class="col">
      <h1 class="display-2">Games</h1>
   </div>
</div>
<div class="row">
   <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">{{ $game -> name }}</h5>
            <a href="{{ route('games.edit', $game -> id ) }}" class="card-link">Edit</a><a href="{{ route('games.trash', $game -> id )}}" class="card-link">Delete</a>
         </div>
      </div>
   </div>
</div>
@endsection