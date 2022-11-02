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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

</table>


@endsection