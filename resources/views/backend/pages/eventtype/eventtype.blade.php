@extends('backend.master')

@section('concert')

<h1>Event Types</h1>
<br>
<a href="{{route('eventtype.form')}}"class="btn btn-outline-success text-black">Create Event Types </a>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>

        </tr>
  </thead>
  <tbody>
    @foreach($event_types as $eventtype)


    <tr>
      <th scope="row">{{$eventtype->id}}</th>
      <td>{{$eventtype->name}}</td>
      <td>{{$eventtype->status}}</td>
      <td>{{$eventtype->description}}</td>
      
      <td>
        <a class="btn btn-primary" href="{{route('eventtype.view', $eventtype->id)}}">View</a>
        <a class="btn btn-success" href="{{route('eventtype.edit', $eventtype->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('eventtype.delete', $eventtype->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach
</tbody>
</table>
{{$event_types->links()}}


@endsection