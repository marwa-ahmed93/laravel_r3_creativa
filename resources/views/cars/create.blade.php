<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<form  method="post" action="{{route('car.store')}}" class="w-75 m-auto my-3" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Model</label>
    <input type="text" name="model" class="form-control" id="exampleInputPassword1">
  </div>


   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="number" name="price" class="form-control" id="exampleInputPassword1">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

</body>
</html>