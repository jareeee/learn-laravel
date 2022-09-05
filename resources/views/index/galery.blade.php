@extends('index.layout.main')


@section('container')
<div class="container">
  <a href="/galeries" class="btn btn-dark position-absolute"><- Back</a>
  <h1 class="mb-5 text-center">Galery</h1>
</div>
<div class="container">
  <div class="row">
    @foreach($galery as $g)
    <div class="col">
        <div class="card" style="width: 18rem;">
          <img src=" {{ $g->photos }} " class="card-img-top" alt="...">
            <div class="card-body">
                <h3>{{ $g->title }}</h3>
                <h5>{{ $g->author }}</h5>
                <p class="card-text"> {{ strip_tags($g->body) }} </p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>

@endsection