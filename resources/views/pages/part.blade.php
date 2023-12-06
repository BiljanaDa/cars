@extends('layout.default')

@section('content')

<div class="container">
    <img src="{{ $part->image_url }}" >
    <h1>{{ $part->name }}</h1>
    <p>{{ $part->category }}</p>
</div>

@endsection