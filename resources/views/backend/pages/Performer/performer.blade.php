@extends('backend.master')

@section('concert')

<h1>Performers</h1>
<br>
<a href="{{route('performer.form')}}"class="btn btn-outline-success text-black">Add New Performer </a>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Performer Type</th>
      <th scope="col">Action</th>

        </tr>
  </thead>
  <tbody>
    @foreach($performers as $performer)


    <tr>
      <th scope="row">{{$performer->id}}</th>
      <td>{{$performer->name}}</td>
      <td>{{$performer->contact}}</td>
      <td>{{$performer->address}}</td>
      <td>{{$performer->performer_type}}</td>
      
      <td>
        <a class="btn btn-primary" href="{{route('performer.view', $performer->id)}}">View</a>
        <a class="btn btn-success" href="{{route('performer.edit', $performer->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('performer.delete', $performer->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach
</tbody>
</table>
{{$performers->links()}}




@endsection