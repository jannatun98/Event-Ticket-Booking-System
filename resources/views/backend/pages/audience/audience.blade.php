@extends('backend.master')

@section('concert')

<h1>Audience List</h1>

<br>
<a href="{{url('/audience/form')}}"class="btn btn-info text-white">Create New Audience</a>
<br>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jannatun</td>
      <td>Naim</td>
      <td>jannatun234@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ananna</td>
      <td>Hossain</td>
      <td>ananna@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Shumona</td>
      <td>Shikha</td>
      <td>shikha676@gmail.com</td>
    </tr>
  </tbody>
</table>


@endsection