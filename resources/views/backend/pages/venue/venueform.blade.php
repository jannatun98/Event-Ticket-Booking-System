@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('store.venue')}}" method="POST" enctype="multipart/form-data">

    @if($errors->any())
     @foreach($errors->all() as $error)
       <p class="alert alert-danger">{{$error}}</p>
     @endforeach
    @endif


    @csrf

    <label for="name">Name</label>
    <input required id="name" type="text" class="form-control" name="name">

    <label for="image">Upload Image</label>
    <input required id="image" type="file" class="form-control" name="image">

    <label for="capacity">Capacity</label>
    <input required id="name" type="number" class="form-control" name="capacity">
    <label for="address">Address</label>
    <input required id="address" type="text" class="form-control" name="address">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>


</div>


@endsection