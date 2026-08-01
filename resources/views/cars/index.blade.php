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
<a  class="btn btn-outline-info" href="{{route('cars.create')}}">Create</a>

<div class="container">
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4 text-center">
            <div>
                <img class="w-100" 
                src="{{asset('storage/'.$car->image)}}" alt="">
                <h2>the car model: {{$car->model}}</h2>
                <p>the car price: {{$car->price}}</p>
                <a class="btn btn-danger m-3" href="/delete/car/{{$car->id}}">Delete</a>
                <a class="btn btn-warning m-3" href="/restore/car/{{$car->id}}">restore</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

</body>
</html>