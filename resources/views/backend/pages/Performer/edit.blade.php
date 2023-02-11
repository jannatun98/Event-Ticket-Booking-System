@extends('backend.master')

@section('concert')

<div style="padding:15px">
 <form action="{{route('performer.update',$performers->id)}}" method="POST">
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
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{$performers->name}}" type="text" name='name'class="form-control" id="name">
            
        </div>

        <div class="form-group">
            <label for="contact">Contact</label>
            <input value="{{$performers->contact}}" type="number" name='contact'class="form-control" id="contact">
            
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input value="{{$performers->address}}" type="text" name='address'class="form-control" id="address">
        </div>

        <div class="form-group">
            <label for="performer_type">Performer Type</label>
            <input value="{{$performers->performer_type}}" type="text" name='performer_type'class="form-control" id="performer_type">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection