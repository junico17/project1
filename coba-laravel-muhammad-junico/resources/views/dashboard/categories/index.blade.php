@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">CategorieS {{ auth()->user()->name }}</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-5" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-5">
  <a href="/dashboard/categories/create" class="btn btn-info mb-3">Buat Category baru</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td>
          <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-success"><span data-feather="eye" class="align-text-bottom"></span></a>
          <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-info"><span data-feather="edit" class="align-text-bottom"></span></a>
          <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Yang Bener?')"><span data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
    
@endsection