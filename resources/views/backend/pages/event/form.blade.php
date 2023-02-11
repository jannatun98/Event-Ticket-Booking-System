@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('store.event')}}"  method="POST" enctype="multipart/form-data">
    
  @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @csrf
    <label for="name">Name</label>
    <input required id="name" type="text" class="form-control" name="name">
    <label for="venue">Venue</label>
    <input required id="venue" type="text" class="form-control" name="venue">
    <label for="event_type">Event type</label>
    <input required id="event_type" type="text" class="form-control" name="event_type">
    <label for="performer_id">Performer ID</label>
    <input required id="performer_id" type="text" class="form-control" name="performer_id">
    <label for="date">Date</label>
    <input id="date" type="date" class="form-control" name="date">
    <label for="image">Upload Image</label>
    <input id="image" type="file" class="form-control" name="image">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>
</div>


@endsection



