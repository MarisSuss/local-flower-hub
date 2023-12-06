@extends('layout')

@section('content')
  <p>This is a place where you can add a store</p>
  <form action="/add-store" method="get">
    <label for="">Store name: </label>
    <input type="text">
    <label for="">Location: </label>
    <input type="text">
    <button>Add</button>
  </form>
@endsection