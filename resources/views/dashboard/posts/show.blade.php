@extends('dashboard.layout.dashboard-layout')

@section('contain')
  <div class="container">
<div class="card mt-4 d-flex justify-content-center " style="width: 20rem;">
  <img src="{{ $galery->photos }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $galery->title }}</h5>
    <h6 class="card-title">{{ $galery->author }}</h6>
    <p class="card-text">{{ strip_tags($galery->body) }}</p>
    <a href="/dashboard/posts" class="badge bg-dark"><span data-feather="skip-back"></span></a>
    <a href="" class="badge bg-dark" ><span data-feather="edit"></span></a>
    <form action="{{ url('/dashboard/posts/'. $galery->slug)  }}" method="post" class="d-inline">
      @method('delete')
      @csrf
        <button  class="badge bg-dark border-0" onclick="return confirm('Are you sure you want to delete this post?')"><span data-feather="x-circle"></span></button>
    </form> 
  </div>
</div>
</div>
@endsection