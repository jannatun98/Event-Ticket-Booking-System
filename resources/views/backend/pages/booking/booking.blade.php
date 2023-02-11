@extends('backend.master')

@section('concert')

<h1>Booking</h1>
<br>
<a href="{{route('booking.form')}}"class="btn btn-outline-success text-black">Add Booking List</a>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Event ID</th>
      <th scope="col">Audience ID</th>
      <th scope="col">Total Price</th>
      <th scope="col">Action</th>

        </tr>
  </thead>
  <tbody>
    @foreach($bookings as $booking)


    <tr>
      <th scope="row">{{$booking->id}}</th>
      <td>{{$booking->event_id}}</td>
      <td>{{$booking->audience_id}}</td>
      <td>{{$booking->total_price}}</td>
      
      <td>
        <a class="btn btn-primary" href="{{route('booking.view',$booking->id)}}">View</a>
        <a class="btn btn-success" href="{{route('booking.edit',$booking->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('booking.delete',$booking->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach
</tbody>
</table>
{{$bookings->links()}}


@endsection