@extends('backend.master')

@section('concert')

<div style="padding:15px">
 <form action="{{route('performer.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name='name'class="form-control" id="name">
            
        </div>

        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="number" name='contact'class="form-control" id="contact">
            
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name='address'class="form-control" id="address">
        </div>

        <div class="form-group">
            <label for="performer_type">Performer Type</label>
            <input type="text" name='performer_type'class="form-control" id="performer_type">
        </div>


        <button type="submit" class="btn btn-info mt-2">Submit</button>
 </form>
</div>
@endsection