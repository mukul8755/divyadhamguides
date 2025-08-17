@extends('layout')

@section('content')

<!-- Hero -->
<section class="page-header text-center py-5 bg-light shadow-sm">
  <div class="container">
    <h1 class="fw-bold display-5 text-danger">📰 Our Spiritual Blogs</h1>
    <p class="text-muted fs-5">Stories, journeys & wisdom from Kashi, Ayodhya & Prayagraj</p>
  </div>
</section>

<!-- Blog Section -->
<section class="blog-section py-5">
  <div class="container">
    <div class="row g-4">

      @foreach($blogs as $id =>$blog)
      <div class="col-md-6 col-lg-4">
        <div class="card blog-card h-100 shadow-sm border-0 rounded-3 hover-blog">
          <img src="{{ asset($blog['image']) }}" class="card-img-top" alt="{{ $blog['title'] }}">
          <div class="card-body">
            <div class="blog-meta text-muted small mb-2">
              By <strong>{{ $blog['author'] }}</strong> | {{ $blog['date'] }}
            </div>
            <h5 class="fw-bold text-danger">{{ $blog['title'] }}</h5>
            <p class="text-muted">{{ $blog['excerpt'] }}</p>
            <a href="{{ route('blogs.show', $id) }}" class="btn btn-outline-danger btn-sm mt-2">Read More</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

@endsection

@push('styles')
<style>
  .hover-blog {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .hover-blog:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }
  .blog-card img {
    height: 220px;
    object-fit: cover;
    border-radius: 0.5rem 0.5rem 0 0;
  }
</style>
@endpush
