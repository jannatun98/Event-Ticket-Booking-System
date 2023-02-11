@extends('backend.master')

@section('concert')

<h1>Venue List</h1>

<br>
<a href="{{url('/venue/venueform')}}"class="btn btn-outline-success text-black">Create New Venue </a>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Capacity</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue_list as $venue)


    <tr>
      <th scope="row">{{$venue->id}}</th>
      <td>
        <img width="70px" src="{{url('/uploads/'.$venue->image)}}" alt="">
      </td>
      <td>{{$venue->name}}</td>
      <td>{{$venue->capacity}}</td>
      <td>{{$venue->address}}</td>
      
      <td>
        <a class="btn btn-primary" href="{{route('venue.view',$venue->id)}}">View</a>
        <a class="btn btn-success" href="{{route('venue.edit',$venue->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('admin.delete',$venue->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach
</tbody>
</table>
{{$venue_list->links()}}

@endsection