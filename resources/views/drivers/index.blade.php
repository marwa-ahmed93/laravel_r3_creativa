<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>





<a class="btn btn-info m-3" href="{{route('drivers.create')}}">Create Driver</a>



<!-- <form class="w-75   m-auto " action="#" method="GET">
    <input type="text" name="search" class="form-control my-2" placeholder="Search by ID or Name">
    <button class="btn btn-primary m-2" type="submit">Search</button>
</form>  -->





<table class="table table-dark table-striped">
  <thead>
    <th>index</th>
    <th>name</th>
    <th>email</th>
   <th>Show</th>
  </thead>

<tbody>
    @foreach($drivers as $driver)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$driver->name}}</td>
        <td>{{$driver->email}}</td>

        <td><a href="{{route('driver.show',$driver->id)}}" class="btn btn-warning">Show</a></td>

    </tr>
    @endforeach
</tbody>

</table>
<div class="w-50 m-auto ">
    {{$drivers->links()}}
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>