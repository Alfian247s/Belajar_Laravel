{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Belajar Laravel</title>
  </head>
  <body>
    <div class ="container mt-5">
    <h1>WELCOME</h1>
    <form action="{{route("book-update", $book->id)}}" method="post">
        @csrf
        @method("put")
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input name ="name" type="Text" value="{{$book->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input name ="author" type="Text" value="{{$book->author}}" class="form-control" id="penulis" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input name ="year" type="Text" value="{{$book->year}}" class="form-control" id="tahun" aria-describedby="emailHelp"> 
          </div>
        
        <button type="submit" class="b tn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html> --}}

@extends('backend.master')
@section('content')
<form action="{{route("book-update", $book->id)}}" method="post">
  @csrf
  @method("put")
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input name ="name" type="Text" value="{{$book->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
      <label for="penulis" class="form-label">Penulis</label>
      <input name ="author" type="Text" value="{{$book->author}}" class="form-control" id="penulis" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="tahun" class="form-label">Tahun</label>
      <input name ="year" type="Text" value="{{$book->year}}" class="form-control" id="tahun" aria-describedby="emailHelp"> 
    </div>
  
  <button type="submit" class="b tn btn-primary">Submit</button>
</form>
@endsection