@extends('layout.default')

@section('content')
<br><br>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach ($parts as $part )
    @include('components.part')
    @endforeach
</div>

@endsection