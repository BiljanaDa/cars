@extends('layout.default')

@section('content')

<div class="container">
    <img src="{{ $car->image_url }}" >
    <h1>{{ $car->title }}</h1>
    <p>{{ $car->category }}</p>
</div>

@endsection