@extends('layouts.app')

@section('content')
  @if(Session::has('cart'))
    <ul>
      @foreach($products as $product)
        <li>
          <p>{{ $product['qty'] }}</p>
          <p>{{ $product['item']['title'] }}</p>
          <p>{{ $product['price'] }}</p>
        </li>
        <a href="">Reduce by 1</a>
        <a href="">Reduce All</a>
      @endforeach
    </ul>
    <div>Total: {{ $totalPrice }}</div>
    <div><button>Checkout</button></div>
  @else
    <p>Nothing in shopping cart</p>
  @endif
@endsection