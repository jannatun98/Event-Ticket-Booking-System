@extends('backend.master')

@section('concert')

<div style="padding:15px">
  <form action="{{route('general.setting.store')}}"  method="POST" enctype="multipart/form-data">
    
  @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @csrf
    <label for="company_name">Name</label>
    <input required id="company_name" type="text" class="form-control" name="company_name">
    <label for="address">Address</label>
    <input required id="address" type="text" class="form-control" name="address">
    <label for="email">Email</label>
    <input required id="email" type="email" class="form-control" name="email">
    <label for="mobile">Mobile No.</label>
    <input required id="mobile" type="number" class="form-control" name="mobile">
    <label for="website">Website</label>
    <input id="website" type="text" class="form-control" name="website">
    <button type="submit" class="btn btn-info mt-2">Submit</button>
  </form>
</div>


@endsection



