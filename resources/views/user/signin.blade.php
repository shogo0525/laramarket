@extends('layouts.app')
@section('content')
  <h1>Sign In</h1>
  @if(count($errors) > 0)
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif
  <form action="{{ route('user.signin') }}" method="post">
    <label for="email">E-mail</label>
    <input type="text" id="email" name="email">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <button type="submit">Sign In</button>
    {{ csrf_field() }}
  </form>
@endsection