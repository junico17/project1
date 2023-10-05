@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

          <a href="/dashboard/posts" class="btn btn-dark"> <span data-feather="arrow-left" class="align-text-bottom"></span> Kembali Ke Dashboard</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-info"> <span data-feather="edit" class="align-text-bottom"></span> Editor</a>
         
          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Yang Bener?')"><span data-feather="x-circle"></span> Delete</button>
          </form>

          @if ($post->image)
            <div>
             <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"class="img-fluid mt-3" >
            </div>
          @else
            <img src="https://source.unsplash.com/720x320?{{ $post->category->name }}" alt="{{ $post->category->name }}"class="img-fluid mt-3" >
          @endif

            <article class my="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection