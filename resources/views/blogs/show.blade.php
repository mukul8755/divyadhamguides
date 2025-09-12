@extends('layout')

@section('content')

<!-- Hero -->
<section class="page-header text-center py-5 bg-light shadow-sm">
  <div class="container">
    <h1 class="fw-bold display-5 text-danger">{{ $blog['title'] }}</h1>
    <p class="text-muted fs-6">By <strong>{{ $blog->author->name ?? 'Unknown' }}</strong> | {{ $blog->created_at->format('F j, Y, g:i a') }}</p>
  </div>
</section>

<!-- Blog Content -->
<section class="blog-content py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <img src="{{ asset('storage/' . $blog->featured_image) }}"  class="img-fluid rounded shadow mb-4" alt="{{ $blog['title'] }}">
       <p class="fs-5 text-muted">{!! $blog->content !!}</p>

        <a href="{{ route('blogs.index') }}" class="btn btn-danger mt-4">⬅ Back to Blogs</a>
      </div>
    </div>
  </div>
</section>

@endsection
