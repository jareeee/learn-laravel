@extends('index.layout.main')


@section('container')

  <div class="col text-center mb-5">
    <h1 >Category</h1>
  </div>

  
</div>
@foreach($category as $c)
<div class="container">
  <div class="row align-items-center text-center">
    <div class="col box">
        <a href="/galeries/{{ $c->id }}" class="btn"><h3>{{ $c['name'] }}</h3></a>
    </div>
  </div>
</div>
@endforeach

@endsection