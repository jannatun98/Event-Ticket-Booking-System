@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('bookingdetails.update',$bookingdetail->id)}}"  method="POST">
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
    <label for="booking_id">Booking ID</label>
    <input value="{{$bookingdetail->booking_id}}" required id="booking_id" type="text" class="form-control" name="booking_id">
    <label for="ticket_id">Ticket ID</label>
    <input value="{{$bookingdetail->ticket_id}}" required id="ticket_id" type="text" class="form-control" name="ticket_id">
    <label for="quantity">Quantity</label>
    <input value="{{$bookingdetail->quantity}}" required id="quantity" type="text" class="form-control" name="quantity">
    <label for="unit_price">Unit Price</label>
    <input value="{{$bookingdetail->unit_price}}" required id="unit_price" type="text" class="form-control" name="unit_price">
    <label for="sub_total">Sub Total</label>
    <input value="{{$bookingdetail->sub_total}}" required id="sub_total" type="text" class="form-control" name="sub_total">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>
</div>


@endsection



