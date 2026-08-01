
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