@extends('layout')

@section('content')
<section class="page-header text-center py-5 bg-light shadow-sm">
  <div class="container">
    <h1 class="fw-bold display-5 text-danger">🛕 Spiritual Destinations</h1>
    <p class="text-muted fs-5">Explore holy cities like Kashi, Ayodhya & Prayagraj</p>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-4">
        @foreach($destinations as $id => $destination)
          <div class="col-md-6 col-lg-4">
              <div class="card shadow-sm h-100 border-0 rounded-3 position-relative">
                  <img src="{{ asset($destination['image']) }}" class="card-img-top" alt="{{ $destination['title'] }}">
                  <div class="card-body">
                      <h5 class="fw-bold text-danger">{{ $destination['title'] }}</h5>
                      <p class="text-muted">{{ Str::limit(strip_tags($destination['intro']), 100) }}</p>

                      <!-- This link makes the whole card clickable -->
                      <a href="{{ route('destinations.show', $id) }}" class="stretched-link btn btn-outline-danger btn-sm">Explore More</a>
                  </div>
              </div>
          </div>
          @endforeach
    </div>
  </div>
</section>
@endsection
