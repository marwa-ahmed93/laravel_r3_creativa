

  <a class="btn btn-primary m-3" href="{{route('drivers.index')}}">Back</a>



<div class="container">
  <h2>User Name: <span class="text-info"> {{$driver?->name}}</span></h2>
  <h2>User email: <span class="text-info">{{$driver?->email}}</span></h2>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>