<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
@include('navbar')
<body>
 <div class="section">   
   <table class="table">
     <thead class="thead-dark" style="border-radius: 30px;">
      <tr>
        <th scope="col" style="color: white">#</th>
        <th scope="col" style="color: white">Name</th>
        <th scope="col" style="color: white">Birth date</th>
        <th scope="col" style="color: white">Phone number</th>
        <th scope="col" style="color: white">Options</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($curriculums as $curriculum)
      <tr>
        <th scope="row" >{{$curriculum->id}}</th>
        <td>{{$curriculum->name}}</td>
        <td>{{$curriculum->birth_date}}</td>
        <td>{{$curriculum->phone_number}}</td>
        <td>
          <button class="listBtn fa fa-eye" type="button"></button>
          <button class="heartBtn listBtn fa fa-heart" type="button" style="margin-left: 5px"></button>
          <button class="listBtn fa fa-trash" type="button"></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{route('create_curriculum')}}" >Create</a>
</div> 
</body>
</html>