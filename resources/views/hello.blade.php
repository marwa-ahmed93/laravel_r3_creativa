
@extends('main')
    
    @section('body')
    @foreach($users as $user)
<h1>user name:  {{$user->name}}</h1>
<h2>card number: {{$user->visacard->visa_number}}</h2>
@endforeach
</body>
</html>
@endsection