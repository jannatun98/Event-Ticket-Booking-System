@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('store.audience')}}" method="POST"  enctype="multipart/form-data">
    @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @csrf
    <label for="name">Name</label>
    <input required id="name" type="text" class="form-control" name="name">
    <label for="email">Email</label>
    <input required id="name" type="email" class="form-control" name="email">
    <label for="contact">Contact</label>
    <input required id="contact" type="tel" class="form-control" name="contact">
    <label for="address">Address</label>
    <input required id="address" type="text" class="form-control" name="address">
    <label for="image">Upload Image</label>
    <input id="image" type="file" class="form-control" name="image">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>
</div>


@endsection



