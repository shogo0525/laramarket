@extends('layouts.app')

@section('content')
  <div class="columns">
    @foreach($products as $product)
      <div class="column">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              {{ $product->title }}
            </p>
            <a href="#" class="card-header-icon" aria-label="more options">
              <span class="icon">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </span>
            </a>
          </header>
          <div class="card-content">
            <div class="content">
              {{ $product->description }}
              <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
              <br>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
            </div>
          </div>
          <footer class="card-footer">
            <p class="card-footer-item">{{ $product->price }}</p>
            <a href="#" class="card-footer-item">Add to Cart</a>
          </footer>
        </div>
      </div>
    @endforeach
  </div>
@endsection