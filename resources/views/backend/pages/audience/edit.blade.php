@extends('backend.master')

@section('concert')
<h1>Update Audience</h1>

<div style="padding:15px">
  <form action="{{route('audience.update',$audience->id)}}" method="POST"  enctype="multipart/form-data">
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
    <input value="{{$audience->name}}"required id="name" type="text" class="form-control" name="name">
    <label for="email">Email</label>
    <input value="{{$audience->email}}" required id="name" type="email" class="form-control" name="email">
    <label for="contact">Contact</label>
    <input value="{{$audience->contact}}" required id="contact" type="tel" class="form-control" name="contact">
    <label for="address">Address</label>
    <input value="{{$audience->address}}" required id="address" type="text" class="form-control" name="address">
    <label for="image">Upload Image</label>
    <input id="image" type="file" class="form-control" name="image">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>
</div>


@endsection