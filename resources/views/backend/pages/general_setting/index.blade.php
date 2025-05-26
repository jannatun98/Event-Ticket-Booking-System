@extends('backend.master')

@section('concert')

<h1>General Details</h1>
<br>
{{-- <a href="{{route('general.setting.form')}}"class="btn btn-outline-success text-black">Add Details</a> --}}
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($generalSetting as $general)


    <tr>
      <th scope="row">{{$general->id}}</th>
      <td>{{$general->company_name}}</td>
      <td>{{$general->address}}</td>
      <td>{{$general->mobile}}</td>
      <td>{{$general->email}}</td>
      <td>{{$general->website}}</td>

      
      <td>
        <a class="btn btn-primary" href="{{route('generalSetting.view',$general->id)}}">View</a>
        <a class="btn btn-success" href="{{route('generalSetting.edit',$general->id)}}">Edit</a>
      </td>

      
    </tr>
  @endforeach
</tbody>
</table>
{{$generalSetting->links()}}


@endsection