@extends('subview/home')

@section('title', 'Services')

@section('content')

<h1>Welcome To The Services Page !</h1>


<form action="/service" method="post">
@csrf
<p>Enter the Service Name !</p>
<input type="text" name="name" autocomplete="off">
<button>Add Service</button>
</form>

<p style="color:red">@error('name') {{$message}} @enderror</p> 

<ul>
    @forelse($services as $service)
     <li>{{$service->name}}</li>

     @empty
     <li>No Services Available</li>
    @endforelse
</ul>
@endsection