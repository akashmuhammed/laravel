<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>New User</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>

      <a href="{{route('new.user')}}">link</a>
      <div class="container">
    <form action="{{route('save.user')}}" method="post">
      @csrf
    <div class="form-group">
    <label for="">name</label>
    <input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="">DOB</label>
    <input type="text" name="dob"class="form-control" id="">
  </div>
  <br>
  <div class="form-group">
    <label for="">status</label>
   <select class="form-group" name="status">
    <option value="1">Active</option>
    <option value="0">Inactive</option>
    <select>
  </div>
 <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
        
    </body>
</html>