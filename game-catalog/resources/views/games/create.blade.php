@extends('home')@section('content')
<div class="row">
   <div class="col">
      <h4 class="display-2">Add a Game</h4>
   </div>
</div>
<div class="row">
   <form action="{{ route('games.store') }}" method="post">
      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif{{ csrf_field() }}
        <div class="mb-3">
            <label for="gname" class="form-label">Game Name: </label>
            <input type="text" class="form-control" id="gname" name="name" aria-describedby="gname">
        </div>
        <div class="mb-3">
            <label for="dname" class="form-label">Developer Name: </label>
            <input type="text" class="form-control" id="dname" name="developer" aria-describedby="dname">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre: </label>
            <input type="text" class="form-control" id="genre" name="genre" aria-describedby="genre">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date: </label>
            <input type="date" class="form-control" id="date" name="release_date" aria-describedby="date">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
@endsection