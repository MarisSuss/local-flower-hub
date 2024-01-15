@extends('layout')

@section('content')
  <p>This is Home</p>
  @guest
    <a href="/register">Register</a>
  @endguest
@endsection