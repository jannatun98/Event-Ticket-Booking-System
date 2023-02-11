@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('booking.update',$booking->id)}}"  method="POST">
    @method('put')
    
  @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif

    @csrf
    <label for="event_id">Event ID</label>
    <input value="{{$booking->event_id}}" required id="event_id" type="text" class="form-control" name="event_id">
    <label for="audience_id">Audience ID</label>
    <input value="{{$booking->audience_id}}" required id="audience_id" type="text" class="form-control" name="audience_id">
    <label for="total_price">Total Price</label>
    <input value="{{$booking->total_price}}" required id="total_price" type="text" class="form-control" name="total_price">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>
</div>


@endsection



