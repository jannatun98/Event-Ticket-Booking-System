@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('store.audience')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input  id="name" type="text" class="form-control" name="name">
    <label for="email">Email</label>
    <input  id="name" type="email" class="form-control" name="email">
    <label for="contact">Contact</label>
    <input  id="contact" type="tel" class="form-control" name="contact">
    <label for="address">Address</label>
    <input  id="address" type="text" class="form-control" name="address">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>
</div>


@endsection



