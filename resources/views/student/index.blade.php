<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
@php
// dd($data);
  @endphp
<div class="container">
  <h2>Student</h2>
  <p>The .table-hover class enables a hover state on table rows:</p> 
  <a href="{{route('students.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">add</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>chinese</th>
        <th>english</th>
        <th>math</th>
        <th>edit/del</th>
      </tr>
    </thead>
    <tbody>
   @foreach ($data as $item)   
<tr>
  <td>{{ $item->id }}</td>
  <td>{{ $item->name }}</td>
  <td>{{ $item->chinese }}</td>
  <td>{{ $item->english }}</td>
  <td>{{ $item->math }}</td>
  <td>
    <a href="{{route('students.edit')}}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">add</a>
    <a href="{{route('students.edit')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">add</a>
  </td>
</tr>
@endforeach


    </tbody>
  </table>
</div>

</body>
</html>
