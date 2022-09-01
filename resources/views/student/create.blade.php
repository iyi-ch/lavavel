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
<!-- @php
// dd($data);
  @endphp -->
<div class="container">
  <h2>新增資料</h2>
  <p>The .table-hover class enables a hover state on table rows:</p> 
  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">add</a>
  <table class="table table-hover">
    <thead>
      <tr>
        {{-- <th>id</th> --}}
        <th>name</th>
        <th>chinese</th>
        <th>english</th>
        <th>math</th>
      </tr>
    </thead>

    <form action="{{route('students.store')}}" method="post">
      @csrf
    <tbody>
<tr>
  <td><input type="text" name="name" id="name"></td>
  <td><input type="number" name="chinese" id="chinese"></td>
  <td><input type="number" name="english" id="english"></td>
  <td><input type="number" name="math" id="math"></td>
</tr>
<tr>
  <td colspan="4">
<input type="submit" value="add submit">
  </td>
</tr>
    </tbody>
  </form>
  </table>
</div>

</body>
</html>
