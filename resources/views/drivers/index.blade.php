@extends('main')

@section('body')

<a class="btn btn-info m-3" href="{{route('drivers.create')}}">Create Driver</a>


 <form class="w-75   m-auto " action="{{route('drivers.search')}}" method="GET">
    <input type="text" name="search" class="form-control my-2" placeholder="Search by ID or Name">
    <button class="btn btn-primary m-2" type="submit">Search</button>
</form>  





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
   
</div>



 @endsection