@extends('dashboard.layout.dashboard-layout')

@section('contain')
        @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
             {{ session('success') }} 
          </div>
        @endif
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            @auth
            <h1 class="h2">Categories</h1>
            @endauth
        </div>

        <a href="/dashboard/categories/create">
        <button type="button" class="btn btn-dark mb-2">Create a new category</button>
        </a>

        <div class="table-responsive col-lg-6">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <a href="{{ url('/dashboard/categories/'. $category->slug)  }}" class="badge bg-dark" class="badge bg-dark" ><span data-feather="eye"></span></a>
                <a href="{{ url('/dashboard/categories/'. $category->slug.'/edit')  }}" class="badge bg-dark" ><span data-feather="edit"></span></a>
                <form action="{{ url('/dashboard/categories/'. $category->slug)  }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                    <button  class="badge bg-dark border-0" onclick="return confirm('Are you sure you want to delete this post?')"><span data-feather="x-circle"></span></button>
                </form> 
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
@endsection