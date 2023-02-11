@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('venue.update',$venue->id)}}" method="POST" enctype="multipart/form-data">
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

    <label for="name">Name</label>
    <input value="{{$venue->name}}"required id="name" type="text" class="form-control" name="name">

    <label for="image">Upload Image</label>
    <input value="{{$venue->image}}"id="image" type="file" class="form-control" name="image">

    <label for="capacity">Capacity</label>
    <input value="{{$venue->capacity}}"required id="name" type="number" class="form-control" name="capacity">
    <label for="address">Address</label>
    <input value="{{$venue->address}}"required id="address" type="text" class="form-control" name="address">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>


</div>


@endsection