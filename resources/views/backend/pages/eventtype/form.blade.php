@extends('backend.master')

@section('concert')

<div style="padding:15px">
 <form action="{{route('store.eventtype')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name='name'class="form-control" id="name">
            
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
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>

        <button type="submit" class="btn btn-info mt-2">Submit</button>
 </form>
</div>
@endsection