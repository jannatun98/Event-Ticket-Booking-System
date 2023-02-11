@extends('backend.master')

@section('concert')

<h1>Create New Event</h1>
<br>
<a href="{{url('/event/eventform')}}"class="btn btn-outline-success text-black">Create New Audience</a>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Venue</th>
      <th scope="col">Event Type</th>
      <th scope="col">Performer ID</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  @foreach($event_list as $event)

    <tr>
      <th scope="row">{{$event->id}}</th>
      <td>
        <img width="70px" src="{{url('/uploads/'.$event->image)}}" alt="">
      </td>
      <td>{{$event->name}}</td>
      <td>{{$event->venue}}</td>
      <td>{{$event->event_type}}</td>
      <td>{{$event->performer_id}}</td>
      <td>{{$event->date}}</td>

      
      <td>
        <a class="btn btn-primary" href="{{route('event.view',$event->id)}}">View</a>
        <a class="btn btn-success" href="{{route('event.edit',$event->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('event.delete',$event->id)}}">Delete</a>
      </td>

      
    </tr>
    @endforeach
    
  </tbody>

</table>

{{$event_list->links()}}
@endsection