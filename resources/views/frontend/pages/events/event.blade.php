@extends('frontend.master')

@section('content')

@foreach($events as $event)
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <p class="card-text">{{$event->name}}</p>
    <p class="card-text">{{$event->venue}}</p>
  </div>
</div>
@endforeach

@endsection




