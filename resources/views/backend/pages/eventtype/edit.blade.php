@extends('backend.master')

@section('concert')

<div style="padding:15px">
 <form action="{{route('eventtype.update',$event_type->id)}}" method="post">
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
            <input value="{{$event_type->name}}" type="text" name='name'class="form-control" id="name">
            
        </div>

        <div class="form-group">
           
            <label for="name">Select Status</label>
            <select name="status" id="name" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea value="{{$event_type->description}}" class="form-control" name="description" id="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
@endsection