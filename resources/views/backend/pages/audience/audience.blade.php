@extends('backend.master')

@section('concert')

<h1>Audience List</h1>

<br>
<a href="{{url('/audience/form')}}"class="btn btn-outline-success text-black">Create New Audience</a>
<br>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

    @foreach($aud_list as $data)


    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>
        <img width="70px" src="{{url('/uploads/'.$data->image)}}" alt="">
      </td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      
      <td>
        <a class="btn btn-primary" href="{{route('audience.view',$data->id)}}">View</a>
        <a class="btn btn-success" href="{{route('audience.edit',$data->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('audience.delete',$data->id)}}">Delete</a>
      </td>

      
    </tr>
    @endforeach
  </tbody>

</table>

{{$aud_list->links()}}


@endsection