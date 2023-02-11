@extends('backend.master')

@section('concert')

<h1>Booking Details</h1>
<br>
<a href="{{route('bookingdetails.form')}}"class="btn btn-outline-success text-black">Add Booking Details</a>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Booking ID</th>
      <th scope="col">Ticket ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Sub Total</th>
      <th scope="col">Action</th>

        </tr>
  </thead>
  <tbody>
    @foreach($booking_details as $bookingdetail)


    <tr>
      <th scope="row">{{$bookingdetail->id}}</th>
      <td>{{$bookingdetail->booking_id}}</td>
      <td>{{$bookingdetail->ticket_id}}</td>
      <td>{{$bookingdetail->quantity}}</td>
      <td>{{$bookingdetail->unit_price}}</td>
      <td>{{$bookingdetail->sub_total}}</td>
      
      
      <td>
        <a class="btn btn-primary" href="{{route('bookingdetails.view',$bookingdetail->id)}}">View</a>
        <a class="btn btn-success" href="{{route('bookingdetails.edit',$bookingdetail->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('bookingdetails.delete',$bookingdetail->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach
</tbody>
</table>
{{$booking_details->links()}}


@endsection